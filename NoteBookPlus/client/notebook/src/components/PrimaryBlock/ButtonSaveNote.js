import React, {Component} from 'react';
import './ButtonSaveNote.css';

export default class ButtonSaveNote extends Component {

  render() {

    const { onSaveNote } = this.props;

    return (
      <button onClick = { onSaveNote } className = "btn btn-dark">Сохранить</button>
    );
  }
}
