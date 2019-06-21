import "./app-footer.css";

export default class Footer {
  static open(pageNode) {
    let footer = document.createElement("footer");
    footer.classList.add("footer");
    footer.className = "footer";
    let footer_text = document.createTextNode("© Copyright 2019. All rights reserved");
    footer.append(footer_text);
    pageNode.append(footer);
  }
}
