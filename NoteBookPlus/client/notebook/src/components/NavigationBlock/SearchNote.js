import React, {Component} from 'react';
import './SearchNote.css';

export default class SearchNote extends Component {

  state = {
    searh_string: ''
  };

  searchNote = (event) => {
      const searh_string = event.target.value;
      this.setState ({ searh_string });
      this.props.searchNote ( searh_string );
  };

  render() {
    return (
      <input className = "form-control SearchNote"
              placeholder = "Поиск"
              value = { this.state.searh_string }
              onChange = { this.searchNote } />
    );
  }
}
