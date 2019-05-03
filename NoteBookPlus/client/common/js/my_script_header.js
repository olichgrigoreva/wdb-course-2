function header(event) {

  let header=document.createElement("header");
  header.classList.add("panel_color");

  let br=document.createElement("br");
  header.append(br);

  let div=document.createElement("div");
  div.classList.add("text_header", "centr");
  let text=document.createTextNode("NoteBookPlus");
  div.append(text);
  header.append(div);

  br=document.createElement("br");
  header.append(br);

  document.querySelector("body").append(header);
}
