import React, {Component} from 'react';
import './ButtonNewNote.css';

export default class ButtonNewNote extends Component {
  render() {

    const { onNewNote } = this.props;

    return (
      <button onClick = { onNewNote } className = "btn btn-dark">Создать новую запись</button>
    );
  }
}
