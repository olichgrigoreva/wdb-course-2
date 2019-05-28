import React, { Component } from 'react';
// import logo from './logo.svg';
import './Notebook.css';


export default class Notebook extends Component {
  componentDidMount() {
    // alert123();
    fetch("/src/note_list.php")
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

    return (
      <div>

        {notes.map(user => (
          <span key={user.id}> {user.id}: {user.username}</span>
        ))}

      </div>
    );
  }
}


// export default class App extends Component {
//   render() {
//     return (
//       <div className="App">
//         <header className="App-header">
//           <img src={logo} className="App-logo" alt="logo" />
//           <p>
//             Edit <code>src/App.js</code> and save to reload.
//           </p>
//           <a
//             className="App-link"
//             href="https://reactjs.org"
//             target="_blank"
//             rel="noopener noreferrer"
//           >
//             Learn React
//           </a>
//         </header>
//       </div>
//     );
//   }
// }
