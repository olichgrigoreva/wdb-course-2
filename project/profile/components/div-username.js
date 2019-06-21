import Form from "./form.js";
import "./div-username.css";

export default class DivUsername {
  static open(pageNode) {
    let div1 = document.createElement("div1");
    div1.className = "form-group";
    document.querySelector("form").append(div1);
    //pageNode.append(div1);

    let username = document.createElement("input");
    username.type = "text";
    username.class = "form-control";
    username.className = "form-control";
    username.placeholder = "Username";
    username.setAttribute('username', 1);
    username.id = "username";
    username.name = "username";
    username.classList.add("reg_fields");
    username.classList.add("username_field");
    document.querySelector("div1").append(username);
    //pageNode.append(username);
  }
}
