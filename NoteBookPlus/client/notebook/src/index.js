import React from 'react';
import ReactDOM from 'react-dom';

import SearchNote from './components/SearchNote.js';
import ListNote from './components/ListNote.js';
import ButtonNote from './components/ButtonNote.js';
import NameEditBlock from './components/NameEditBlock.js';
import InputDataNote from './components/InputDataNote.js';
import CalendarNote from './components/CalendarNote.js';

const BodyNotebook = () => {
  return (
    <div className = "notebook_body">

      <div className = "left_block">
      <SearchNote />
      <ListNote />
      <ButtonNote />
      </div>

      <div className = "richt_block">
        <NameEditBlock />
        <InputDataNote />
        <CalendarNote />
        <InputDataNote />
        <br></br>
        <ButtonNote />
      </div>

    </div>
  );
};

ReactDOM.render(<BodyNotebook />, document.getElementById('root'));
