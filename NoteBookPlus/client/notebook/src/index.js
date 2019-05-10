import React from 'react';
import ReactDOM from 'react-dom';

import SearchNote from './components/SearchNote.js';
import ListNote from './components/ListNote.js';
import ButtonNewNote from './components/ButtonNewNote.js';

const BodyNotebook = () => {
  return (
    <div>
    <SearchNote />
    <ListNote />
    <ButtonNewNote />
    </div>
  );
};

ReactDOM.render(<BodyNotebook />, document.getElementById('root'));
