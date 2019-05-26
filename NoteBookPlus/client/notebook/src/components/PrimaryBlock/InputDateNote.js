import React, {Component} from 'react';
import './InputDateNote.css';

export default class InputDateNote extends Component {
  render() {
    return (
      <form>
         <input className = "form-control InputDateNote" type="date"/>
      </form>
    );
  }
}
