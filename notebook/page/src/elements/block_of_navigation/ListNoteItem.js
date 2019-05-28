import React, {Component} from 'react';
import ("../../css/block_of_navigation/ListNoteItem.css");

/*let ListNoteItem = (value)  => {
  this.setState( { value: name_note, date_note, mode, onSelected, onEdited, onDeleted } )
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
export default ListNoteItem;*/

export default class ListNoteItem extends Component {
  render() {
    const {name_note, date_note, mode, onSelected, onEdited, onDeleted} = this.props;
      let classNames = '';
        if (mode === "SELECT_MODE") {
          classNames += ' selected_note';
        }
          if (mode === "EDIT_MODE") {
            classNames += ' edit_note';
          }
    return (
      <span className = {classNames}>
        <button onClick = { onDeleted } style = { { float: "right", marginLeft: "5px" } } type = "button" className = "btn btn-outline-danger btn-sm">♻</button>
        <button onClick = { onEdited } style = { { float: "right", marginLeft: "5px" } } type = "button" className = "btn btn-outline-success btn-sm">✎</button>
        <span onClick = { onSelected }>
          <span style = { { float: "left" } }> { name_note } </span>
          <span style = { { float: "right" } }> { date_note } </span>
        </span>
      </span>
    );
  }
}
