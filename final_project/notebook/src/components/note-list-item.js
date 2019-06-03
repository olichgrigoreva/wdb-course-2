import React, { Component } from "react";

import "./note-list-item.css";

export default class NoteListItem extends Component {
  render() {
    return (
      <span className="list-group-item note-list-item">
        <span className="note-list-item-label">{this.props.label}</span>

        <button type="button" className="btn btn-light btn-sm">
          <i className="fa fa-pencil" />
        </button>

        <button type="button" className="btn btn-light btn-sm">
          <i className="fa fa-trash" />
        </button>
      </span>
    );
  }
}
