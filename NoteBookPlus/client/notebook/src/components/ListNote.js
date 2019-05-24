import React, {Component} from 'react';
import './ListNote.css';

import ListNoteItem from './ListNoteItem.js';

export default class ListNote extends Component {

  render() {

    const { notes_data, onSelected } = this.props;

    const elements = notes_data.map((item) => {
      return (
        <li
          key={item.id} className = "list-group-item"
          style = { {backgroundColor: "#e0e0d1"} } >
        <ListNoteItem
          // name_note = {item.name_note}
          // date_note = {item.date_note}
          { ... item }
          onSelected = { () => onSelected(item.id) } />
        </li>
      )
    });

    return (
      <ul className = "list-group">
        {elements}
      </ul>
    );
  }
}
