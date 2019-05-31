import React, {Component} from 'react';
import './NavigationBlock.css';

import SearchNote from './SearchNote.js';
import ListNote from './ListNote.js';
import ButtonNewNote from './ButtonNewNote.js';

export default class NavigationBlock extends Component {

  render() {

    const { navigation_block, onSelected, onEdited, onDeleted, searchNote, onNewNote } = this.props;

    return (
      <div className = "NavigationBlock">

        <SearchNote
          searchNote = { searchNote } />

        <ListNote
          navigation_block = { navigation_block }
          onSelected = { onSelected }
          onEdited = { onEdited }
          onDeleted = { onDeleted }/>

        <ButtonNewNote onNewNote = { onNewNote } />

      </div>
    )
  }
}
