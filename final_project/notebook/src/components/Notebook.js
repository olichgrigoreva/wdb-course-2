import React, { Component } from "react";

import NotebookHeader from "./notebook-header";
import NotebookFooter from "./notebook-footer";
import NoteList from "./note-list";
import SearchPanel from "./search-panel";
import AddNewNote from "./add-new-note";

export default class Notebook extends Component {
  render() {
    return (
      <div className="Notebook">
        <NotebookHeader />
        <SearchPanel />
        <NoteList />
        <AddNewNote />
        <NotebookFooter />
      </div>
    );
  }
}
