import React from 'react';
import ReactDOM from 'react-dom';

import Notebook from './Notebook';

document.addEventListener("DOMContentLoaded", function () {
  ReactDOM.render(<Notebook />, document.querySelector(".root"));
})
