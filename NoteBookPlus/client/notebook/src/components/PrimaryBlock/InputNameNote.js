import React, {Component} from 'react';
import './InputNameNote.css';

export default class InputNameNote extends Component {


  render() {

    const { name_note } = this.props;

    return (
      <input type = "text"
          className = "form-control InputNameNote"
          placeholder = "Название заметки" />
    );
  }
}
