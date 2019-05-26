import React, { Component } from 'react';
//import logo from './logo.svg';
//import './App.css';

//import "./greeting.css";
//import Greeting from "./greeting";

// import {alert123} from "./f1.js";

export default class App extends Component {
  componentDidMount() {
    // alert123();
    fetch("./users.php")//вывод даных
      .then(response => response.json())
      .then(json => {
        this.setState({users: json});
      })
  }

  render() {
    let users = [];
    if (this.state && this.state.users) {
      users = this.state.users;
    }

    return (
      <div>
        {users.map(user => (
          <span key={user.id}> {user.id}: {user.usernames}</span>
        ))}
        <form className="App">
          <input placeholder="user_id" className="input form-control mb-3" name="user_id" />
          <input name="title" />
          <input name="text" />
          <input className="submit" type="submit" onClick={save_note} />
        </form>
      </div>
    );
  }
}

function save_note() {
  event.preventDefault();
  fetch("./test.php", {
    method: "POST",
    body: new FormData(document.querySelector("form"))
  })
    .then(response => response.text())
    .then(text => {
      document.querySelector(".App")
        .append(document.createTextNode(text));
    })
}
