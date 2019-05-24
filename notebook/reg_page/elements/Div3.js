import "../css/Form-group.css";
export default class Div3 {
  static open(pageNode) {
    let div3 = document.createElement("div3");
    div3.className = "form-group";
    document.querySelector("form").append(div3);
  }
}
