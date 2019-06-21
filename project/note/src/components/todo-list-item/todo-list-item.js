import React from 'react';
import './todo-list-item.css';
const TodoListItem = ({ important, done, label, onToggleImportant, onToggleDone, modalToggleOn, onDelete, itemUpdate }) => {
  let classNames = 'todo-list-item';
    if (important) {
      classNames += ' important';
    }
      if (done) {
        classNames += ' done';
      }
        return (
          <span className={classNames}>
            <span
              className="todo-list-item-label"
              onClick={ onToggleDone }> {label} </span>
                <button type="button"
                        className="btn btn-outline-success btn-sm float-right"
                        onClick={onToggleImportant}>
                <i className="fa fa-exclamation"></i>
                </button>
                  <button type="button"
                          className="btn btn-outline-danger btn-sm float-right"
                          onClick={modalToggleOn}>
                  <i className="fa fa-trash-o"></i>
                  </button>
                    <button type="button"
                            className="btn btn-outline-info btn-sm float-right"
                            onClick = {itemUpdate}>
                    <i className="fa fa-pencil" id="item-refactor"></i>
                    </button>
          </span>
        );
};

export default TodoListItem;
