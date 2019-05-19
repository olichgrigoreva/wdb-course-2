import React from 'react';
import './ListNote.css';

import ListNoteItem from './ListNoteItem.js';
const ListNote = ( {notes_data} ) => {

  const elements = notes_data.map((item) => {
    return (
      <li
        key={item.id} className = "list-group-item"
        style = { {backgroundColor: "#e0e0d1"} } >
      <ListNoteItem
        // name_note = {item.name_note}
        // date_note = {item.date_note}
        { ... item }
      />
      </li>
    )
  });


  return (
    <ul className = "list-group">
      {elements}
    </ul>

  );
};

export default ListNote;
