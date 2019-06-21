function footer() {
  let footer = document.createElement("footer");
  footer.classList.add("footer");
  footer.className = "footer";
  let footer_text = document.createTextNode("© Copyright 2019. All rights reserved");
  footer.append(footer_text);
  document.querySelector("body").append(footer);
}
