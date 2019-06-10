import React, { Component } from 'react';

import './note-list-item.css';

export default class NoteListItem extends Component {
  render() {
    return (
      <span className="list-group-item note-list-item"
            onClick={ (e) => this.readNote(e) }>
        <span className="note-list-item-label">
          {this.props.label}
        </span>

        <button type="button"
                className="btn btn-light btn-sm"
                onClick={ (e) => this.editNote(e) }>
          <i className="fa fa-pencil" />
        </button>

        <button type="button"
                className="btn btn-light btn-sm"
                onClick={ (e) => this.deleteNote(e) }>
          <i className="fa fa-trash" />
        </button>
      </span>
    );
  }

  readNote(e) {
    console.log('Read', this);
  }

  editNote(e) {
    console.log('Redact', this);
    e.stopPropagation();
  }

  deleteNote(e) {
    console.log('Delete', this);
    e.stopPropagation();
  }
}
