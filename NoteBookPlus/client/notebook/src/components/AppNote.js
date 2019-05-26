import React, {Component} from 'react';
import './AppNote.css';

import NavigationBlock from './NavigationBlock/NavigationBlock.js';
import PrimaryBlock from './PrimaryBlock/PrimaryBlock.js';

export default class AppNote extends Component {

  state = {
    noteNavigationBlock: [
      {id: 1, name_note: "Запись 1", date_note: "12-12-2020", content_note: "вдаыпрозкизкипатикутиму", mode: "START_MODE"},
      {id: 2, name_note: "Запись 2", date_note: "12-12-2021", content_note: "вdgsndfhnh mgfhmdg mdndиму", mode: "START_MODE"},
      {id: 3, name_note: "Запись 3", date_note: "12-12-2022", content_note: "пкутренлииг небьеб еб зкизкипатикутиму", mode: "START_MODE"},
      {id: 4, name_note: "Запись 3", date_note: "12-12-2022", content_note: "пкутренлииг небьеб еб зкизкипатикутиму", mode: "START_MODE"},
      {id: 5, name_note: "Запись sgs", date_note: "12-12-2022", content_note: "gdhtjdjипатикутиму", mode: "START_MODE"}
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

  deleteNote(id) {
    console.log("удалить заметку с ид. удалить на сервере и получить новый state");
    console.log(id);
  };


  render() {
    return (
      <div className = "AppNote">

        <NavigationBlock
          navigation_block = { this.state.noteNavigationBlock }
          onSelected = { this.selectItem }
          onEdited = { this.editNote }
          onDeleted = { this.deleteNote } />

        <PrimaryBlock
          primary_block = { this.state.notePrimaryBlock }/>

      </div>
    );
  }
}
