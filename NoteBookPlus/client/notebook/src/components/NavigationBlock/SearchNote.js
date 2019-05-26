import React, {Component} from 'react';
import './SearchNote.css';

export default class SearchNote extends Component {

  render() {
    return (
      <input className = "form-control SearchNote"
              placeholder = "Поиск" />
    );
  }
}
