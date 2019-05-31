import React, {Component} from 'react';
import './PrimaryBlock.css';

import NameEditBlock from './NameEditBlock.js';
import InputNameNote from './InputNameNote.js';
import InputDateNote from './InputDateNote.js';
import InputContentNote from './InputContentNote.js';
import ButtonSaveNote from './ButtonSaveNote.js';
import ContentNote from './ContentNote.js';

export default class PrimaryBlock extends Component {
  render() {

    const { primary_block, editNameNote, editDateNote, editContentNote, onSaveNote } = this.props;
    let div_PrimaryBlock_part1;
    let div_PrimaryBlock_part2;
    let div_PrimaryBlock_part3;
    let div_PrimaryBlock_part4;
    if ( primary_block.mode === "START_MODE" ) {
      div_PrimaryBlock_part1 = <NameEditBlock
        name_note = "Выберите заметку" />;
    };

    if ( primary_block.mode === "SELECT_MODE" ) {
        div_PrimaryBlock_part1 = <NameEditBlock
          name_note = { primary_block.name_note }
          date_note = { primary_block.date_note }/>;
        div_PrimaryBlock_part2 = <ContentNote
          content_note = { primary_block.content_note }/>;
    };

    if ( primary_block.mode === "EDIT_MODE" ) {
        div_PrimaryBlock_part1 = <InputNameNote name_note = { primary_block.name_note }
                                                editNameNote = { editNameNote } />;
        div_PrimaryBlock_part2 = <InputDateNote date_note = { primary_block.date_note }
                                                editDateNote = { editDateNote } />;
        div_PrimaryBlock_part3 = <InputContentNote content_note = { primary_block.content_note }
                                                    editContentNote = { editContentNote } />;
        div_PrimaryBlock_part4 = <ButtonSaveNote onSaveNote = { () => onSaveNote(primary_block) } />;
    };

    return(
      <div className = "PrimaryBlock">
        { div_PrimaryBlock_part1 }
        { div_PrimaryBlock_part2 }
        { div_PrimaryBlock_part3 }
        { div_PrimaryBlock_part4 }
      </div>
    )
  }
}
