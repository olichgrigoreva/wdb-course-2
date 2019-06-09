import React from 'react';
import ReactDOM from 'react-dom';

import {Hed} from './App.js';
import App from './App.js';

document.addEventListener("DOMContentLoaded", function () {
  ReactDOM.render(<Hed />, document.querySelector(".header"));
  ReactDOM.render(<App />, document.querySelector(".root"));
  //ReactDOM.render(<Hello />, document.getElementById("header"));
})
