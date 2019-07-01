import React, { Component } from 'react';
// import { createStore } from 'redux';
// import store from './store';
import './Notebook.css';
// import Connect from './note_select';



export default class Notebook extends Component {
  constructor() {
    super();
    this.state = {
      select: 1,
    };
  }
  componentDidMount() {
    fetch("/src/notes_list.php")
      .then(response => response.json())
      .then(json => {
        this.setState({notes: json});
      })
  }

  render() {
    let notes = [];
    if (this.state && this.state.notes) {
      notes = this.state.notes;
    }
    let select = this.state.select;
    return (
      <div>
        <div className="logout">logout</div>
        <div className="header">header</div>
        {notes.map(note => (
          <div
            onClick={() => {
              this.setState({select: note.id})
            }}
            key={note.id} id={note.id} className="notes_list"> {note.name} {note.text} {note.date}
          </div>
        ))}
        <div className="footer">footer</div>
        <NoteSelected id={this.state.select}/>
      </div>
    );
  }
}

class NoteSelected extends Component {
  constructor() {
    super();
    this.state = {
      note: {}
    };
  }

  // shouldComponentUpdate(nextProps) {
  //   return (this.props.id !== nextProps.id)
  // }

  componentWillReceiveProps(nextProps) {
    if(this.props.id !== nextProps.id) {
      let id= this.props.id
      fetch("/src/note_selected.php", {
        method: 'post',
        body: JSON.stringify({id: id}),
        headers: {
          'content-type': 'application/json'
        }
      })
      .then(response => response.json())
      .then(json => {
        this.setState({
          note: json
        })
      });
    }
  }

  render() {
    let note = this.state.note;
    return (
      <div>
        <p className="noteSelected"> {note.name} </p>
        <p className="noteSelected"> {note.text} </p>
      </div>
    )
  }
}
