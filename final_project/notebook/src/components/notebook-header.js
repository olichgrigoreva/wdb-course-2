import React, { Component } from 'react';

import './notebook-header.css';

export default class NotebookHeader extends Component {
  render() {
    return (
      <header className="notebook-header">
        <p>SUPER NOTEBOOK</p>
        <p>Welcome, {this.props.username}. Logout</p>
      </header>
    );
  }
}
