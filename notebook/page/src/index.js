import React from 'react';
import ReactDOM from 'react-dom';
import AppHeader from './elements/AppHeader';
import SearchPanel from './elements/SearchPanel';
import TodoList from './elements/TodoList';
import AppFooter from './elements/AppFooter';
import ItemStatusFilter from './elements/ItemStatusFilter';
import './index.css';

let App = () => {
  let todoData = [
    {label: 'Have', important: false, id: 1},
    {label: 'Have', important: true, id: 2},
    {label: 'Have', important: false, id: 3},
  ];
    return (
      <div className="todo-app">
        <AppHeader toDo={1} done={3}/>
          <div className="top-panel d-flex">
          <SearchPanel/>
          <ItemStatusFilter/>
          </div>
        <TodoList todos={todoData}/>
        <AppFooter/>
      </div>
    );
  };
ReactDOM.render(<App/>,
  document.getElementById('root'));
