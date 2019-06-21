import Form from "./form.js";
import "./div-password.css";

export default class DivPassword {
  static open(pageNode) {
    let div2 = document.createElement("div2");
    div2.className = "form-group";
    document.querySelector("form").append(div2);

    let password = document.createElement("input");
    password.type = "password";
    password.class = "form-control";
    password.className = "form-control";
    password.placeholder = "Password";
    password.id = "password";
    password.name = "password";
    password.classList.add("reg_fields");
    password.classList.add("password_field");
    document.querySelector("div2").append(password);
  }
}
