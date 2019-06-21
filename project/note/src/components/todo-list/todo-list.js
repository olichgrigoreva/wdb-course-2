import React from 'react';
import TodoListItem from '../todo-list-item/todo-list-item';
//import './todo-list.css';

const TodoList = ({ items, itemId, onItemSelected, onToggleImportant, onToggleDone, modalToggleOn, itemUpdate, onDelete }) => {
  const elements = items.map((item) => {
    const { id, ...itemProps } = item;
      return (
        <li key={id} onClick={() => onItemSelected(id)}
          className="list-group-item">
          <TodoListItem
            { ...itemProps }
            onToggleImportant={ () => onToggleImportant(id) }
            onToggleDone={ () => onToggleDone(id) }
            modalToggleOn={ () => modalToggleOn(id) }
            onDelete={ () => onDelete(id) }
            onItemSelected = { () => onItemSelected(id)}
            itemUpdate={ (e) => {
                 e.stopPropagation();
                 itemUpdate(id)} } />
        </li>
      );
  });

  return (<ul className="todo-list list-group">{ elements }</ul>);
};

export default TodoList;
