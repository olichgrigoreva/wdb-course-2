import React, {Component} from 'react';
import './ListNote.css';

import ListNoteItem from './ListNoteItem.js';

export default class ListNote extends Component {

  render() {

    const { navigation_block, onSelected, onEdited, onDeleted } = this.props;

    const elements = navigation_block.map((item) => {
      if (item.mode !== "HIDDEN_MODE") {
        return (
          <li
            className = "list-group-item ListNote"
            key={item.id}
          >
          <ListNoteItem
            // name_note = {item.name_note}
            // date_note = {item.date_note}
            { ... item }
            onSelected = { () => onSelected(item.id) }
            onEdited = { () => onEdited(item.id) }
            onDeleted = { () => onDeleted(item.id) }
            />
          </li>
        )
      }
    });

    return (
      <ul className = "list-group">
        {elements}
      </ul>
    );
  }
}
