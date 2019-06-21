import "./app-header.css";

export default class Header {
  static open(pageNode) {
    let header = document.createElement("header");
    header.className = "header";
    header.classList.add("header");
    let header_text = document.createTextNode("NOTEBOOK");
    header.append(header_text);
    pageNode.append(header);
  }
}
