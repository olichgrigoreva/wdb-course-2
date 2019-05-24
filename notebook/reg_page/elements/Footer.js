import "../css/Footer.css";
export default class Footer {
  static open(pageNode) {
    let footer = document.createElement("footer");
    footer.classList.add("footer");
    footer.className = "footer";
    let footer_text = document.createTextNode("Copyright by ... 2019");
    footer.append(footer_text);
    document.querySelector("body").append(footer);
  }
}
