import Form from "./form.js";
import "./div-email.css";

export default class DivEmail {
  static open(pageNode) {
    let div4 = document.createElement("div4");
    div4.className = "form-group";
    document.querySelector("form").append(div4);

    let e_mail = document.createElement("input");
    e_mail.type = "e_mail";
    e_mail.class = "form-control";
    e_mail.className = "form-control";
    e_mail.placeholder = "Email";
    e_mail.id = "e_mail";
    e_mail.name = "e_mail";
    e_mail.classList.add("reg_fields");
    e_mail.classList.add("e_mail_field");
    document.querySelector("div4").append(e_mail);
  }
}
