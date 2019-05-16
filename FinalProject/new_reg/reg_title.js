function top_title(event) {
  let div_title = document.createElement("div");
  let text=document.createTextNode("Lena's NoteBook");
  div_title.classList.add("jumbotron", "div_main_header_css");
  div_title.append(text);
  document.querySelector("body").append(div_title);
}
