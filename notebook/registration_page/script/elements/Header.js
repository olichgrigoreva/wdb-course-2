let appHeader = {};
  (function(app){
    app.newHeader = newHeader;
      function newHeader() {
        let header = document.createElement("header");
        header.className = "header";
        header.classList.add("header");
        let header_text = document.createTextNode("NOTEBOOK");
        header.append(header_text);
        document.querySelector("body").append(header);
      }
} (appHeader));
