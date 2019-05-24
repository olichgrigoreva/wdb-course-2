import Header from "./elements/Header.js";
import Form from "./elements/Form.js";
import Div1 from "./elements/Div1.js";
import Username from "./elements/Username.js";
import Div2 from "./elements/Div2.js";
import Password from "./elements/Password.js";
import Div3 from "./elements/Div3.js";
import ConfirmPassword from "./elements/ConfirmPassword.js";
import Div4 from "./elements/Div4.js";
import Email from "./elements/Email.js";
import Button from "./elements/Button.js";
import Footer from "./elements/Footer.js";

document.addEventListener("DOMContentLoaded", function () {
  let node = document.querySelector(".page");
  Header.open(node);
  Form.open(node);
  Div1.open(node);
  Username.open(node);
  Div2.open(node);
  Password.open(node);
  Div3.open(node);
  ConfirmPassword.open(node);
  Div4.open(node);
  Email.open(node);
  Button.open(node);
  Footer.open(node);
})
