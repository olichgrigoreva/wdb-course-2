import React/*, {Component}*/ from 'react';

let ListNoteItem = () => {
  let { name_note, date_note, mode, onSelected, onEdited, onDeleted } = this.props; //item;
  let classNames = '';
    if (mode === "SELECT_MODE") {
      classNames += 'selected_note';
    }
      if (mode === "EDIT_MODE") {
        classNames += 'edit_note';
      }
        return (
          <span className = { classNames }>
            <button onClick = { onDeleted } style = { { float: "right", marginLeft: "5px" } } type = "button" className = "btn btn-primary btn-sm">♻</button>
            <button onClick = { onEdited } style = { { float: "right", marginLeft: "5px" } } type = "button" className = "btn btn-primary btn-sm">✎</button>
              <span onClick = { onSelected }>
                <span style = { { float: "left" } }> { name_note }>
                </span>
                <span style = { { float: "right" } }> { date_note }
                </span>
              </span>
          </span>
        );
};
export default ListNoteItem;
