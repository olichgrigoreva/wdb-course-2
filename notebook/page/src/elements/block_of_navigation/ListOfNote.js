import React, {Component} from 'react';
import ListNoteItem from './ListNoteItem.js';
import ("../../css/block_of_navigation/ListOfNote.css");

/*let ListOfNote = ({navigation_block}) => {
  let elements = navigation_block.map((item) => {
    this.props({ navigation_block, onSelected, onEdited, onDeleted })
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
 export default ListOfNote;*/


 export default class ListOfNote extends Component {
  render() {
    const { navigation_block, onSelected, onEdited, onDeleted } = this.props;
    const elements = navigation_block.map((item) => {
      return (
        <li
          className = "list-group-item ListOfNote"
          key={item.id}
        >
        <ListNoteItem
          { ... item }
          onSelected = { () => onSelected(item.id) }
          onEdited = { () => onEdited(item.id) }
          onDeleted = { () => onDeleted(item.id) }
          />
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
