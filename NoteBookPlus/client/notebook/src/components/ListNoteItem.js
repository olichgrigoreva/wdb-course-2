import React, {Component} from 'react';
import './ListNoteItem.css';

export default class ListNoteItem extends Component {


  // state = {
  //   selected: false
  // };

    // onTextLiClick = () => {
    //   // console.log(`Done: ${this.props.name_note}`)
    //   this.setState((state) => {
    //     return {
    //       selected: !state.selected
    //     }
    //   });
    // };

  render() {

    const {name_note, date_note, selected, onSelected} = this.props;
    // const { selected } = this.state;

    let classNames = '';
    if (selected) {
      classNames += ' selected_note';
    }

    return (
      <span className = {classNames}>
        <button style = { { float: "right", marginLeft: "5px" } } type="button" class="btn btn-outline-danger btn-sm">♻</button>
        <button style = { { float: "right", marginLeft: "5px" } } type="button" class="btn btn-outline-success btn-sm">✎</button>
        <span onClick = { onSelected } >
          <span style = { { float: "left" } }> { name_note } </span>
          <span style = { { float: "right" } }> { date_note } </span>
        </span>
      </span>
    );
  }
}
