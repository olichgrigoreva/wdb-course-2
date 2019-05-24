import "../css/Form-group.css";
export default class Div4 {
  static open(pageNode) {
    let div4 = document.createElement("div4");
    div4.className = "form-group";
    document.querySelector("form").append(div4);
  }
}
