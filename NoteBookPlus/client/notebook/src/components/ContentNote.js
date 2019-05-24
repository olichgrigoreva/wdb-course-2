import React, {Component} from 'react';
import './ContentNote.css';

export default class ContentNote extends Component {
  render() {
    const { note_view_content } = this.props;
    return (
      <div>
      {note_view_content}
      </div>
    );
  }
}
