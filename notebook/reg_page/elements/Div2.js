import "../css/Form-group.css";
export default class Div2 {
  static open(pageNode) {
    let div2 = document.createElement("div2");
    div2.className = "form-group";
    document.querySelector("form").append(div2);
  }
}
