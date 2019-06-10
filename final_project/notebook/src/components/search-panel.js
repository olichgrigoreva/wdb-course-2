import React, { Component } from 'react';

export default class SearchPanel extends Component {
  render() {
    return (
      <div className="search-panel">
        <input placeholder="Search" />
        <button type="button"
                className="btn"
                onClick={ this.searchNote }>
          <i className="fa fa-search" />
        </button>
      </div>
    );
  }

  searchNote = () => {
    console.log('Search', this);
  }
}
