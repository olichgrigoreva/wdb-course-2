import React, {Component} from 'react';
import ("../../css/primary_block/InputNameNote.css");

export default class InputNameNote extends Component {
  render() {
    const { name_note } = this.props;
      return (
        <input type = "text"
            className = "form-control InputNameNote"
            placeholder = "Name note" />
      );
    }
  }
