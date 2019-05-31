import React, {Component} from 'react';
import './AppNote.css';

import NavigationBlock from './NavigationBlock/NavigationBlock.js';
import PrimaryBlock from './PrimaryBlock/PrimaryBlock.js';

export default class AppNote extends Component {

  state = {
    noteNavigationBlock: [
      {id: 1, name_note: "Записьсь 1", date_note: "2019-12-12", content_note: "вдаыпрозкизкипатикутиму", mode: "START_MODE"},
      {id: 2, name_note: "Запись 2", date_note: "2020-12-12", content_note: "вdgsndfhnh mgfhmdg mdndиму", mode: "START_MODE"},
      {id: 3, name_note: "Запись 3", date_note: "2021-12-12", content_note: "пкутренлииг небьеб еб зкизкипатикутиму", mode: "START_MODE"},
      {id: 4, name_note: "Запись 3", date_note: "2022-12-12", content_note: "пкутренлииг небьеб еб зкизкипатикутиму", mode: "START_MODE"},
      {id: 5, name_note: "Запись sgs", date_note: "2023-12-12", content_note: "gdhtjdjипатикутиму", mode: "START_MODE"}
    ],
    notePrimaryBlock: {name_note: "", date_note: "", content_note: "", mode: "START_MODE"}
  };

  selectItem = (id) => {
    this.setState(({noteNavigationBlock}) => {
      const indx = noteNavigationBlock.findIndex((element) => element.id === id);
      const new_noteNavigationBlock = [];
      let new_notePrimaryBlock;
      let string_noteNavigationBlock;
      for (let i=0; i<noteNavigationBlock.length; i++) {
        string_noteNavigationBlock = noteNavigationBlock[i];
        if (i === indx) {
          string_noteNavigationBlock.mode = "SELECT_MODE";
          new_notePrimaryBlock = {
            name_note: string_noteNavigationBlock.name_note,
            date_note: string_noteNavigationBlock.date_note,
            content_note: string_noteNavigationBlock.content_note,
            mode: string_noteNavigationBlock.mode
          };
        }
        else {
          string_noteNavigationBlock.mode = "START_MODE";
        };
        new_noteNavigationBlock.push(string_noteNavigationBlock);
      };
      return {
      noteNavigationBlock: new_noteNavigationBlock,
      notePrimaryBlock: new_notePrimaryBlock,
      };
    });
  };

  editNote = (id) => {
    this.setState(({noteNavigationBlock}) => {
      const indx = noteNavigationBlock.findIndex((element) => element.id === id);
      const new_noteNavigationBlock = [];
      let new_notePrimaryBlock;
      let string_noteNavigationBlock;
      for (let i=0; i<noteNavigationBlock.length; i++) {
        string_noteNavigationBlock = noteNavigationBlock[i];
        if (i === indx) {
          string_noteNavigationBlock.mode = "EDIT_MODE";
          new_notePrimaryBlock = {
            name_note: string_noteNavigationBlock.name_note,
            date_note: string_noteNavigationBlock.date_note,
            content_note: string_noteNavigationBlock.content_note,
            mode: string_noteNavigationBlock.mode
          };
        }
        else {
          string_noteNavigationBlock.mode = "START_MODE";
        };
        new_noteNavigationBlock.push(string_noteNavigationBlock);
      };
      return {
      noteNavigationBlock: new_noteNavigationBlock,
      notePrimaryBlock: new_notePrimaryBlock,
      };
    });
  };

  deleteNote = (id) => {
    console.log("удалить заметку с ид. удалить на сервере и получить новый state");
    console.log(id);
  };

  searchNote = (searh_string) => {
    this.setState(({noteNavigationBlock}) => {
      const new_noteNavigationBlock = [];
      let string_noteNavigationBlock;
      for (let i=0; i<noteNavigationBlock.length; i++) {
        string_noteNavigationBlock = noteNavigationBlock[i];
        if (string_noteNavigationBlock.name_note.toLowerCase().indexOf(searh_string.toLowerCase()) === -1) {
          string_noteNavigationBlock.mode = "HIDDEN_MODE";
        }
        else {
          string_noteNavigationBlock.mode = "START_MODE";
        }
        new_noteNavigationBlock.push(string_noteNavigationBlock);
      };
      return {
      noteNavigationBlock: new_noteNavigationBlock,
      notePrimaryBlock: {name_note: "", date_note: "", content_note: "", mode: "START_MODE"},
      };
    });
  };

  editNameNote = (name_note) => {
    this.setState(({notePrimaryBlock}) => {
      let new_notePrimaryBlock;
      new_notePrimaryBlock = {
        name_note: name_note,
        date_note: notePrimaryBlock.date_note,
        content_note: notePrimaryBlock.content_note,
        mode: notePrimaryBlock.mode
      };
      return {
      notePrimaryBlock: new_notePrimaryBlock,
      };
    });
  };

  editDateNote = (date_note) => {
    this.setState(({notePrimaryBlock}) => {
      let new_notePrimaryBlock;
      new_notePrimaryBlock = {
        name_note: notePrimaryBlock.name_note,
        date_note: date_note,
        content_note: notePrimaryBlock.content_note,
        mode: notePrimaryBlock.mode
      };
      return {
      notePrimaryBlock: new_notePrimaryBlock,
      };
    });
  };

  editContentNote = (content_note) => {
    this.setState(({notePrimaryBlock}) => {
      let new_notePrimaryBlock;
      new_notePrimaryBlock = {
        name_note: notePrimaryBlock.name_note,
        date_note: notePrimaryBlock.date_note,
        content_note: content_note,
        mode: notePrimaryBlock.mode
      };
      return {
      notePrimaryBlock: new_notePrimaryBlock,
      };
    });
  };

  onSaveNote = (primary_block) => {
    console.log("сохранить");
    console.log(primary_block);
  };

  onNewNote () {
    console.log("новая заметка");
  };

  render() {
    return (
      <div className = "AppNote">

        <NavigationBlock
          navigation_block = { this.state.noteNavigationBlock }
          onSelected = { this.selectItem }
          onEdited = { this.editNote }
          onDeleted = { this.deleteNote }
          searchNote = { this.searchNote }
          onNewNote = { this.onNewNote } />

        <PrimaryBlock
          primary_block = { this.state.notePrimaryBlock }
          editNameNote = { this.editNameNote }
          editDateNote = { this.editDateNote }
          editContentNote = { this.editContentNote }
          onSaveNote = { this.onSaveNote } />

      </div>
    );
  }
}
