let appheader = {}
appheader.header = header;
(function (header){
  let footer = document.createElement("footer");
  footer.classList.add("footer");
  let footer_text = document.createTextNode("Copyright by ... 2019");
  footer.append(footer_text);
  document.querySelector("body").append(footer);
}(footer));
