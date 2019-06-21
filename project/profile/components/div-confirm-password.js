import Form from "./form.js";
import "./div-confirm-password.css";

export default class DivConfirmPassword {
  static open(pageNode) {
    let div3 = document.createElement("div3");
    div3.className = "form-group";
    document.querySelector("form").append(div3);

    let confirm_password = document.createElement("input");
    confirm_password.type = "password";
    confirm_password.class = "form-control";
    confirm_password.className = "form-control";
    confirm_password.placeholder = "Confirm Password";
    confirm_password.id = "confirm_password";
    confirm_password.name = "confirm_password";
    confirm_password.classList.add("reg_fields");
    confirm_password.classList.add("confirm_password_field");
    document.querySelector("div3").append(confirm_password);
  }
}
