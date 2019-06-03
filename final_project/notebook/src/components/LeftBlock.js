import React, { Component } from "react";

import SearchPanel from "./search-panel";
import NoteList from "./note-list";

export default class LeftBlock extends Component {
  render() {
    return (
      <div>
        <SearchPanel />
        <NoteList />
      </div>
    );
  }
}