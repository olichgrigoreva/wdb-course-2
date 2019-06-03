import React, { Component } from "react";

export default class NoteList extends Component {
  render() {
    return (
      <div>
        <ul className="list-group"></ul>
        <button>Add new note</button>
      </div>
    );
  }
}
