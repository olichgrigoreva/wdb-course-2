import React, {Component} from 'react';
import './InputContentNote.css';

export default class InputContentNote extends Component {

  editContentNote = (event) => {
      const content_note = event.target.value;
      this.props.editContentNote ( content_note );
  };

  render() {

    const { content_note } = this.props;

    return (
      <textarea className = "form-control InputContentNote"
                placeholder = "Содержимое заметки"
                value = { content_note }
                onChange = { this.editContentNote } />
    );
  }
}
