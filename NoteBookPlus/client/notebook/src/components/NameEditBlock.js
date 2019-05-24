import React, {Component} from 'react';
import './NameEditBlock.css';

export default class NameEditBlock extends Component {


  render() {

    const { note_view_name } = this.props;
    return (
      <div>
        <span>
          {note_view_name}
        </span>
        <hr></hr>
      </div>
    );
  }
}
