import React, { Component } from 'react';
//import {header} from '../js/start_page.js';
//import logo from './logo.svg';
//import './App.css';

//import "./greeting.css";
//import Greeting from "./greeting";

// import {alert123} from "./f1.js";

export class Hed extends Component {
  render() {
        return ( <h2>Список телефонов</h2>
    );
  }
}

export default class App extends Component {
  componentDidMount() {
    // alert123();
    fetch("./users.php")//вывод даных
      .then(response => {
        return response.json()})
      .then(json => {
        this.setState({users: json}),
        console.log("response2")})
  }

  render() {
    let users = [];
    if (this.state && this.state.users) {
      users = this.state.users;
      console.dir(users);
    }

    return (
      <div>

        {users.map(user => (
          <span key={user.id}> {user.id}: {user.usernames}</span>
        ))}
        <form className="App">
          <input placeholder="user_id" className="input form-control mb-3" name="user_id" />
          <input placeholder="title" className="input form-control mb-3" name="title" />
          <input placeholder="text" className="input form-control mb-3" name="text" />
          <input className="button btn btn-info submit"  value="Add note" type="submit" id="submit" onClick={save_note} />
        </form>
      </div>
    );
  }
}

function header() {
    let header = document.createElement("header");
    header.className = "footer navbar-fixed-bottom";
    document.querySelector("body").append(header);
    document.querySelector('header').innerHTML="text";
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
