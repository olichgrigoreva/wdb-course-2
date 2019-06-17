import React, { Component } from 'react';

import NoteListItem from './note-list-item';
import './note-list.css';

export default class NoteList extends Component {
  constructor() {
    super()
    this.state = {}
  }

  componentDidMount() {
    fetch("../services/get-notes.php")
      .then(response => response.text())
      .then(data => console.log(data))
  }

  render() {
    return (
      <ul className="list-group note-list">
        <li>
          <NoteListItem label="Note1 12.03.2019" />
        </li>
        <li>
          <NoteListItem label="Note2 13.03.2019" />
        </li>
        <li>
          <NoteListItem label="Note3 14.03.2019" />
        </li>
      </ul>
    );
  }
}
