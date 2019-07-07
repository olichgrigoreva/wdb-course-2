import React from 'react';

const AddNoteToggle = ({onToggleAdd, ItemAddedToggle}) => {
    let textButton = (ItemAddedToggle) ? 'Close Edit Mode':'Add Note';
  return (
    <div className="todo-app text-center">
        <button type="button"
                className="btn btn-primary btn-lg"
                onClick={onToggleAdd}>
                {textButton}
        </button>
    </div>
  );
};

export default AddNoteToggle;