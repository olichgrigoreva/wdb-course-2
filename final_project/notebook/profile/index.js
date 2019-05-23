import React from 'react';
import ReactDOM from 'react-dom';

import ProfileForm from "./elements/form.js";

document.addEventListener("DOMContentLoaded", function (){
  ReactDOM.render(<ProfileForm />, document.querySelector(".root"));
})
