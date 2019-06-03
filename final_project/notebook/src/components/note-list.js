import React, { Component } from "react";

import NoteListItem from "./note-list-item";
import "./note-list.css";

export default class NoteList extends Component {
  render() {
    return (
      <ul className="list-group note-list">
        <li>
          <NoteListItem label="Note1" />
        </li>
        <li>
          <NoteListItem label="Note2" />
        </li>
        <li>
          <NoteListItem label="Note3" />
        </li>
      </ul>
    );
  }
}
