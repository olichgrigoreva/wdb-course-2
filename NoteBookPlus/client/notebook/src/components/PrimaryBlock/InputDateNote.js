import React, {Component} from 'react';
import './InputDateNote.css';

export default class InputDateNote extends Component {

  editDateNote = (event) => {
      const date_note = event.target.value;
      this.props.editDateNote ( date_note );
  };

  render() {

    const { date_note } = this.props;

    return (
      <form>
         <input className = "form-control InputDateNote"
                type="date"
                value = { date_note }
                onChange = { this.editDateNote } />
      </form>
    );
  }
}
