import React, {Component} from 'react';

import NavigationBlock from './block_of_navigation/NavigationBlock.js';
import PrimaryBlock from './primary_block/PrimaryBlock.js';

export default class AppNotebook extends Component {
  state = {
    noteNavigationBlock: [
      { id: 1, name_note: "Note1", data_note: "01.01.2020", content_note: "Note1", mode: "START_MODE"  },
      { id: 2, name_note: "Note2", data_note: "01.01.2020", content_note: "Note2", mode: "START_MODE"  },
      { id: 3, name_note: "Note3", data_note: "01.01.2020", content_note: "Note3", mode: "START_MODE"  },
      { id: 4, name_note: "Note4", data_note: "01.01.2020", content_note: "Note4", mode: "START_MODE"  },
      { id: 5, name_note: "Note5", data_note: "01.01.2020", content_note: "Note5", mode: "START_MODE"  },
      { id: 6, name_note: "Note6", data_note: "01.01.2020", content_note: "Note6", mode: "START_MODE"  },
      { id: 7, name_note: "Note7", data_note: "01.01.2020", content_note: "Note6", mode: "START_MODE"  },
    ],
    notePrimaryBlock: { name_note: "", data_note: "", content_note: "", mode: "START_MODE" }
  };
    selectItem = (id) => {
      this.setState(({noteNavigationBlock}) => {
        let index = noteNavigationBlock.findIndex((element) => element.id === id);
        let new_noteNavigationBlock = [];
        let new_notePrimaryBlock;
        let string_noteNavigationBlock;
        for(let i=0; i<noteNavigationBlock.length; i++) {
          string_noteNavigationBlock = noteNavigationBlock[i];
          if(i === index) {
            string_noteNavigationBlock.mode = "SELECT_MODE";
            new_notePrimaryBlock = {
              name_note: string_noteNavigationBlock.name_note,
              date_note: string_noteNavigationBlock.date_note,
              content_note: string_noteNavigationBlock.content_note,
              mode: string_noteNavigationBlock.mode
            };
          }
          else {
            string_noteNavigationBlock.mode = "START_MODE";
          };
            new_noteNavigationBlock.push(string_noteNavigationBlock);
      };
        return {
          noteNavigationBlock: new_noteNavigationBlock,
          notePrimaryBlock: new_notePrimaryBlock,
        };
      });
    };
      editNote = (id) => {
        this.setState(({noteNavigationBlock}) => {
          let index = noteNavigationBlock.findIndex((element) => element.id === id);
          let new_noteNavigationBlock = [];
          let new_notePrimaryBlock;
          let string_noteNavigationBlock;
          for(let i=0; i<noteNavigationBlock.length; i++) {
            string_noteNavigationBlock = noteNavigationBlock[i];
            if(i === index) {
              string_noteNavigationBlock.mode = "EDIT_MODE";
              new_notePrimaryBlock = {
                name_note: string_noteNavigationBlock.name_note,
                date_note: string_noteNavigationBlock.date_note,
                content_note: string_noteNavigationBlock.content_note,
                mode: string_noteNavigationBlock.mode
              };
            }
            else {
              string_noteNavigationBlock.mode = "START_MODE";
            };
            new_noteNavigationBlock.push(string_noteNavigationBlock);
          };
          return {
            noteNavigationBlock: new_noteNavigationBlock,
            notePrimaryBlock: new_notePrimaryBlock,
          };
        });
      };
deleteNote(id) {
console.log("Remove");
console.log(id);
};
render() {
    return (
      <div className = "AppNotebook">
        <NavigationBlock
          navigation_block = { this.state.noteNavigationBlock }
          onSelected = { this.selectItem }
          onEdited = { this.editNote }
          onDeleted = { this.deleteNote }/>
        <PrimaryBlock
          primary_block = { this.state.notePrimaryBlock }/>
      </div>
    );
  }
}
