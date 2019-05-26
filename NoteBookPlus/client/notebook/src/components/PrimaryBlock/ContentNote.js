import React, {Component} from 'react';
import './ContentNote.css';

export default class ContentNote extends Component {
  render() {
    const { content_note } = this.props;
    return (
      <div>
      {content_note}
      </div>
    );
  }
}
