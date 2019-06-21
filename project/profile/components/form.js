import "./form.css";

export default class Form {
  static open(pageNode) {
    let form = document.createElement("form");
    form.className = "container form group";
    form.id = "container";
    document.querySelector("body").append(form);
    pageNode.append(form);
  }
}
