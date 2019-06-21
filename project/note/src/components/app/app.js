import React, { Component } from 'react';

import NoteapiService from '../../services'
import Header from '../app-header';
import TodoList from '../todo-list';
import SearchPanel from '../search-panel';
import ItemStatusFilter from '../item-status-filter';
import Toggle from '../add-note-toggle';
import ItemAddForm from '../item-add-form';
import ItemDetalis from '../item-detalis';
import Alert from '../alert-modal';
import NoteHeader from '../note-header';
import NoteFooter from '../note-footer';
//import './app.css';
export default class App extends Component {

  maxId = 100;

  state = {
    items: [
      { id: 1, label: 'Note 1', date: '', text: '', important: false, done: false },
      { id: 2, label: 'Note 2', date: '', text: '', important: true, done: false },
      { id: 3, label: 'Note 3', date: '', text: '', important: false, done: false },
      { id: 4, label: 'Note 4', date: '', text: '', important: false, done: false },
      { id: 5, label: 'Note 5', date: '', text: '', important: false, done: false }
    ],
    isOpen: false,
    itemUpdate: false,
    ItemAddedToggle: false,
    deleteItem: null,
    filter: 'all',
    search: '',
    ItemId: null,
  };

  itemUpdate = (item) => {
    const idx = this.findIndex(item, this.state.items);
    const {id, label, date, text} = this.state.items[idx];
    this.setState({
      itemUpdate: {
          id,
          label,
          date,
          text
        }
    })
  }

  onToggleAdd = () => {
    this.setState(({ItemAddedToggle}) => {
      return {
        ItemAddedToggle: !ItemAddedToggle,
        itemUpdate: false
    }
  })
}

  modalToggleOff = () => {
      this.setState({isOpen: false})
  }

  modalToggleOn = (id) => {
    this.setState(({isOpen, deleteItem, items}) => {
      const idx = this.findIndex(id, items);
        const oldItem = items[idx].label
          return ({
            isOpen: true,
            deleteItem: oldItem,
            ItemId: id
          });
    })
  }

  onItemAdded = (label, date, text) => {
    const item = this.createItem(label, date, text);
      if(this.state.itemUpdate) {
        this.setState(({ itemUpdate, itemId, ...state}) => {
          const idx = this.findIndex(itemUpdate.id, state.items);
          const items = [
            ...state.items.slice(0, idx),
              item,
              ...state.items.slice(idx + 1)
          ];
            return {
              ItemId: itemUpdate.id,
              items,
              itemUpdate: false,
              ItemAddedToggle: false
            }
        })
    }
      else {
        this.setState((state) => {
          return {
            items: [...state.items, item],
            itemUpdate: false,
            ItemAddedToggle: true
          };
      })
    }
  };
  onItemSelected = (ItemId) => {
    this.setState({
      ItemId,
      itemUpdate: false,
      ItemAddedToggle: false
    });
  }
  itemData = (item, id) => {
    const idx = this.findIndex(id, item);
      if(idx === -1) {
        return false;
      }
        const { label, date, text } = item[idx];
          return {
            label,
            date,
            text
          };
        }
  toggleProperty = (arr, id, propName) => {
    const idx = this.findIndex(id, arr);
    const oldItem = arr[idx];
    const value = !oldItem[propName];
    const item = { ...arr[idx], [propName]: value } ;
      return [
        ...arr.slice(0, idx),
      item,
        ...arr.slice(idx + 1)
    ];
  };

  onToggleDone = (id) => {
    this.setState((state) => {
      const items = this.toggleProperty(state.items, id, 'done');
        return { items };
    });
  };

  onToggleImportant = (id) => {
    this.setState((state) => {
      const items = this.toggleProperty(state.items, id, 'important');
        return { items };
    });
  };

  onDelete = () => {
    this.setState(({isOpen, ItemId, ...state}) => {
      const idx = this.findIndex(ItemId, state.items);
        const items = [
          ...state.items.slice(0, idx),
          ...state.items.slice(idx + 1)
      ];
      return { items, isOpen: !isOpen};
    });
  };

  findIndex = (id, item) => {
    const idx = item.findIndex((item) => item.id === id);
      return idx;
  }

  onFilterChange = (filter) => {
    this.setState({ filter });
  };

  onSearchChange = (search) => {
    this.setState({ search });
  };

  createItem(label, date, text) {
    return {
      id: ++this.maxId,
      label,
      date,
      text,
      important: false,
      done: false
    };
  }

  filterItems(items, filter) {
    if (filter === 'all') {
      return items;
    }
      else
         if (filter === 'active') {
          return items.filter((item) => (!item.done));
        }
          else
            if (filter === 'done') {
              return items.filter((item) => item.done);
            }
  }

  searchItems(items, search) {
    if (search.length === 0) {
      return items;
    }

    return items.filter((item) => {
      return item.label.toLowerCase().indexOf(search.toLowerCase()) > -1;
    });
  }

  render() {
    const { items, filter, search, ItemId, deleteItem, isOpen, ItemAddedToggle, itemUpdate } = this.state;
    const doneCount = items.filter((item) => item.done).length;
    const toDoCount = items.length - doneCount;
    const visibleItems = this.searchItems(this.filterItems(items, filter), search);
    const selectItem = ItemId ? this.itemData(items, ItemId):'';
    const item = (ItemAddedToggle || itemUpdate) ?
    <ItemAddForm onItemAdded={this.onItemAdded} itemUpdate={itemUpdate}/> :
    <ItemDetalis item={ selectItem } />;
      return (
      <>
        <div className = "row">
            <div className= "col">
              <NoteHeader />
            </div>
        </div>
        <div className="row mb2">
          <div className="col-md-6">
            <div className="todo-app">
              <Header toDo={toDoCount} done={doneCount}/>
                <div className="search-panel d-flex">
                  <SearchPanel
                    onSearchChange={this.onSearchChange}/>
                      <ItemStatusFilter
                        filter={filter}
                          onFilterChange={this.onFilterChange} />
                </div>
                  <TodoList
                    items={ visibleItems }
                    onItemSelected = {this.onItemSelected}
                    onToggleImportant={this.onToggleImportant}
                    onToggleDone={this.onToggleDone}
                    modalToggleOn={this.modalToggleOn}
                    itemUpdate={this.itemUpdate}
                    onDelete={this.onDelete} />
                      <Toggle onToggleAdd={this.onToggleAdd}
                        ItemAddedToggle={ItemAddedToggle}
                        itemUpdate={itemUpdate}/>
                </div>
        </div>
        <div className="col-md-6">
          <div className="todo-app">
              {item}
            </div>
              <Alert
                modalToggleOn={this.modalToggleOn}
                modalToggleOff = {this.modalToggleOff}
                onDelete={this.onDelete}
                isOpen={isOpen}
                ItemId={ItemId}
                deleteItem={deleteItem} />
        </div >
      </div>
    </>
    );
  };
}
