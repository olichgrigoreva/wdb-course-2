import React, {Component} from 'react';
import './InputNameNote.css';

export default class InputNameNote extends Component {

  editNameNote = (event) => {
      const name_note = event.target.value;
      this.props.editNameNote ( name_note );
  };

  render() {

    const { name_note } = this.props;

    return (
      <input type = "text"
          className = "form-control InputNameNote"
          placeholder = "Название заметки"
          value = { name_note }
          onChange = { this.editNameNote } />
    );
  }
}
