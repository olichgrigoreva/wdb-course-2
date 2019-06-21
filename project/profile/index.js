import Header from "./components/app-header.js";
import Form from "./components/form.js";
import DivUsername from "./components/div-username.js";
import DivPassword from "./components/div-password.js";
import DivConfirmPassword from "./components/div-confirm-password.js";
import DivEmail from "./components/div-email.js";
import Button from "./components/button.js";
import Footer from "./components/app-footer.js";

document.addEventListener("DOMContentLoaded", function (){
  let node = document.querySelector(".page");
  Header.open(node);
  Form.open(node);
  DivUsername.open(node);
  DivPassword.open(node);
  DivConfirmPassword.open(node);
  DivEmail.open(node);
  Button.open(node);
  Footer.open(node);
})
