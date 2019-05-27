import React/*, {Component}*/ from 'react';

import ListNoteItem from './ListNoteItem.js';

let ListOfNote = ({navigation_block}) => {
  let elements = navigation_block.map((item) => {
    let { navigation_block, onSelected, onEdited, onDeleted } = this.props; //item;
      return (
        <li key = { item.id }
          className = "list-group-item ListNote" >
          <ListNoteItem
            { ... item }
            onSelected = { () => onSelected(item.id) }
            onEdited = { () => onEdited(item.id) }
            onDeleted = { () => onDeleted(item.id) }
          />
        </li>
      );
    });
    return (
        <ul className = "list-group">
          { elements }
        </ul>
      );
    };
 export default ListOfNote;
