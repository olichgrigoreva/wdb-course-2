import React from 'react';
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

const BodyNotebook = () => {

  const noteData = [ // в дальнейшей получаем массив яакс запросо с сервера
    {id: 1, name_note: "Запись 1", date_note: "12-12-2020", content_note: "вдаыпрозкизкипатикутиму", selected: false, edit_mode: false},
    {id: 2, name_note: "Запись 2", date_note: "12-12-2021", content_note: "вdgsndfhnh mgfhmdg mdndиму", selected: true, edit_mode: true},
    {id: 3, name_note: "Запись 3", date_note: "12-12-2022", content_note: "пкутренлииг небьеб еб зкизкипатикутиму", selected: false, edit_mode: false}
  ];

  return (
    <div className = "notebook_body">

      <div className = "left_block">
      <SearchNote />
      <ListNote notes_data = {noteData}/>
      <ButtonNewNote />
      </div>

      <div className = "richt_block">
        <NameEditBlock notes_data = {noteData}/>
        <InputNameNote />
        <InputDateNote />
        <InputContentNote />
        <ButtonSaveNote />
        <ContentNote />
      </div>

    </div>
  );
};

ReactDOM.render(<BodyNotebook />, document.getElementById('root'));
