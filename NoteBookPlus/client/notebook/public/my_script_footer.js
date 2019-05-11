function footer(event) {

  let footer=document.createElement("footer");
  footer.classList.add("panel_color");

  let div=document.createElement("div");
  div.classList.add("text_footer", "centr");

  let br=document.createElement("br");
  div.append(br);

  let text=document.createTextNode("NoteBookPlus");
  div.append(text);

  br=document.createElement("br");
  div.append(br);
  br=document.createElement("br");
  div.append(br);

  text=document.createTextNode("Версия 0.1");
  div.append(text);

  br=document.createElement("br");
  div.append(br);
  br=document.createElement("br");
  div.append(br);

  text=document.createTextNode("2019 г.");
  div.append(text);

  br=document.createElement("br");
  div.append(br);
  br=document.createElement("br");
  div.append(br);

  footer.append(div);

  document.querySelector("body").append(footer);
}
