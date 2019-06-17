import React, { Component } from 'react';

import './notebook-header.css';

export default class NotebookHeader extends Component {
  render() {
    return (
      <header className="notebook-header">
        <p>SUPER NOTEBOOK</p>
        <p>
          Welcome, <a href="../../../profile/index.html">{this.props.username}</a>.
          <a href="../../../log_in/login.php"> Logout</a>
        </p>
      </header>
    );
  }
}
