import React, {Component} from 'react';
import ReactDOM from 'react-dom';

import './index.css';

import SearchNote from './components/SearchNote.js';
import ListNote from './components/ListNote.js';
import ButtonNewNote from './components/ButtonNewNote.js';

import NameEditBlock from './components/NameEditBlock.js';
import InputNameNote from './components/InputNameNote.js';
import InputDateNote from './components/InputDateNote.js';
import InputContentNote from './components/InputContentNote.js';
import ButtonSaveNote from './components/ButtonSaveNote.js';
import ContentNote from './components/ContentNote.js';


export default class BodyNotebook extends Component {

  state = {
    noteData: [
      {id: 1, name_note: "Запись 1", date_note: "12-12-2020", content_note: "вдаыпрозкизкипатикутиму", selected: false, edit_mode: false},
      {id: 2, name_note: "Запись 2", date_note: "12-12-2021", content_note: "вdgsndfhnh mgfhmdg mdndиму", selected: false, edit_mode: false},
      {id: 3, name_note: "Запись 3", date_note: "12-12-2022", content_note: "пкутренлииг небьеб еб зкизкипатикутиму", selected: false, edit_mode: false},
      {id: 4, name_note: "Запись 3", date_note: "12-12-2022", content_note: "пкутренлииг небьеб еб зкизкипатикутиму", selected: false, edit_mode: false},
      {id: 5, name_note: "Запись sgs", date_note: "12-12-2022", content_note: "gdhtjdjипатикутиму", selected: false, edit_mode: false}
    ],
    noteViewName: "",
    noteViewContent: ""
  };

  selectItem = (id) => {
    this.setState(({noteData}) => {

      const indx = noteData.findIndex((element) => element.id === id);

      const newnoteData = [];
      let stringNoteData;
      let new_noteViewName;
      let new_noteViewContent;
      for (var i=0; i<noteData.length; i++) {

        stringNoteData = noteData[i];
        if (i === indx) {
          stringNoteData.selected = true;

          new_noteViewName = stringNoteData.name_note + " ( " + stringNoteData.date_note + " ) ";

          new_noteViewContent = stringNoteData.content_note;

        }
        else {
          stringNoteData.selected = false;
        };
        newnoteData.push(stringNoteData);

      };


      return {
        noteData: newnoteData,
        noteViewName: new_noteViewName,
        noteViewContent: new_noteViewContent
      };

    });
  };

  render() {

  return (
    <div className = "notebook_body">

      <div className = "left_block">
      <SearchNote />
      <ListNote
        notes_data = {this.state.noteData}
        onSelected = { this.selectItem }/>
      <ButtonNewNote />
      </div>

      <div className = "richt_block">
        <NameEditBlock note_view_name = {this.state.noteViewName}/>
        <InputNameNote />
        <InputDateNote />
        <InputContentNote />
        <ButtonSaveNote />
        <ContentNote note_view_content = {this.state.noteViewContent}/>
      </div>

    </div>
  );

  }

}

ReactDOM.render(<BodyNotebook />, document.getElementById('root'));
