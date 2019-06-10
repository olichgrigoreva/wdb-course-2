import React, { Component } from 'react';

import './add-new-note.css';

export default class AddNewNote extends Component {
  render() {
    return (
      <div className="add-new-note">
        <button className="btn btn-outline-secondary"
                onClick={ this.addNewNote }>
          Add new note
        </button>
      </div>
    );
  }

  addNewNote = () => {
    console.log('значение this:', this);
  }
}
