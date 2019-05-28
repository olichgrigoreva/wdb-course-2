import React, {Component} from 'react';
import SearchOfNote from './SearchOfNote.js';
import ListOfNote from './ListOfNote.js';
import AddNewNote from './AddNewNote.js';
import ("../../css/block_of_navigation/NavigationBlock.css");

/*let NavigationBlock = () => {
  this.props({ navigation_block, onSelected, onEdited, onDeleted })
    return (
      <div className = "NavigationBlock">
        <SearchOfNote/>
          <ListOfNote
            navigation_block = { navigation_block }
            onSelected = { onSelected }
            onEdited = { onEdited }
            onDeleted = { onDeleted }
          />
          <AddNewNote/>
      </div>
    );
};
export default NavigationBlock;*/
export default class NavigationBlock extends Component {
  render() {
    const { navigation_block, onSelected, onEdited, onDeleted } = this.props;
      return (
        <div className = "NavigationBlock">
          <SearchOfNote />
          <ListOfNote
            navigation_block = { navigation_block }
            onSelected = { onSelected }
            onEdited = { onEdited }
            onDeleted = { onDeleted }/>
          <AddNewNote />
        </div>
    )
  }
}
