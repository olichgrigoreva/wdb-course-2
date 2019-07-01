import React from 'react';
import ReactDOM from 'react-dom';
// import { Provider } from 'react-redux';
// import store from './store';
// import { Router, Route }from 'react-router';
import Notebook from "./Notebook";


document.addEventListener("DOMContentLoaded", function () {
  ReactDOM.render(<Notebook />, document.querySelector(".root"))
});
// document.addEventListener("DOMContentLoaded", function () {
//   ReactDOM.render(<Provider store={store}>
//   <Router>
//     <Route path="/" component={Notebook} />
//   </Router>
//   </Provider>, document.querySelector(".root"));
// })
