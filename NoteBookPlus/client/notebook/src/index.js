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

const BodyNotebook = () => {
  return (
    <div className = "notebook_body">

      <div className = "left_block">
      <SearchNote />
      <ListNote />
      <ButtonNewNote />
      </div>

      <div className = "richt_block">
        <NameEditBlock />
        <InputNameNote />
        <InputDateNote />
        <InputContentNote />
        <br></br>
        <ButtonSaveNote />
      </div>

    </div>
  );
};

ReactDOM.render(<BodyNotebook />, document.getElementById('root'));
