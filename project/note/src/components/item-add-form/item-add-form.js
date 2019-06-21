import React, { Component } from 'react';
//import './item-add-form.css';
export default class ItemAddForm extends Component {

  state = {
    label: '',
    date: '',
    text: ''
  };

  componentDidMount() {
      if(this.props.itemUpdate) {
          this.ItemAddFormUpdate(this.props.itemUpdate);
      }
  }

  componentDidUpdate(prevProps) {
    if ( this.props.itemUpdate && this.props.itemUpdate.label !== prevProps.itemUpdate.label) {
        this.ItemAddFormUpdate(this.props.itemUpdate);
      }
  }

  ItemAddFormUpdate = (itemUpdate) => {
    const { label, date, text } = itemUpdate;

      this.setState({
        label,
        date,
        text
      })
  }

  onLabelChange = (e) => {
     this.setState({
        label: e.target.value
      })
  };

  onDateChange = (e) => {
    this.setState({
       date: e.target.value
     })
 };

 onTextChange = (e) => {
    this.setState({
       text: e.target.value
     })
 };

  onSubmit = (e) => {
    e.preventDefault();

    fetch('http://wdb.virtual/project/php/add-note.php', {
        method: 'POST',
        credentials: "same-origin",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify( {
            label: this.state.label,
            date: this.state.date,
            text: this.state.text
    })
 })

    const { label, date, text } = this.state;
    this.setState({ label: '',
                     date: '',
                     text: ''
        });

    const cb = this.props.onItemAdded || (() => {});
    cb(label, date, text);
  };

  render() {
    return (
      <form onSubmit={this.onSubmit}>
        <h3>Edit Mode {this.props.itemUpdate.label}</h3>
        <hr />
        <div className="form-group">
          <input type="text"
            onChange={this.onLabelChange}
            className="form-control"
            id="note"
            value={this.state.label}
            placeholder="Note"
            required />
      </div>
      <div className="form-group">
        <input type="date"
          onChange={this.onDateChange}
          className="form-control"
          id="date"
          value={this.state.date}
          placeholder="Date"
          required />
      </div>
      <div className="form-group">
        <textarea className="form-control"
          id="text"
          value={this.state.text}
          onChange={this.onTextChange}
          rows="4"
          required></textarea>
      </div>
        <div className="text-center">
        <button type="submit"
                className="btn btn-primary btn-lg">Save</button>
        </div>
    </form>
    );
  }
}
