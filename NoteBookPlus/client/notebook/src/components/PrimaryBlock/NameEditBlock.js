import React, {Component} from 'react';
import './NameEditBlock.css';

export default class NameEditBlock extends Component {


  render() {

    const { name_note, date_note } = this.props;
    return (
      <div>
        <div>
        <span style = { { float: "left" } }>
          {name_note}
        </span>
        <span style = { { float: "right" } }>
          {date_note}
        </span>
        </div>
        <br></br>
        <hr></hr>
      </div>
    );
  }
}
