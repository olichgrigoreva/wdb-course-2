import React, {Component} from 'react';
import './InputContentNote.css';

export default class InputContentNote extends Component {
  render() {
    return (
      <textarea className = "form-control InputContentNote" placeholder = "Содержимое заметки" />
    );
  }
}
