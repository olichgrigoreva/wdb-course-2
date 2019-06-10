import React, { Component } from 'react';
import './Notebook.css';

import NotebookHeader from './notebook-header';
import NotebookFooter from './notebook-footer';
import SearchPanel from './search-panel';
import NoteList from './note-list';
import AddNewNote from './add-new-note';
import Note from './note';

export default class Notebook extends Component {

  render() {
    return (
      <div className="Notebook">
        <NotebookHeader />
        <div className="top-panel d-flex">
          <div>
            <SearchPanel />
            <NoteList />
            <AddNewNote />
          </div>
          <div>
            <Note />
          </div>
        </div>
        <NotebookFooter />
      </div>
    );
  }
}
