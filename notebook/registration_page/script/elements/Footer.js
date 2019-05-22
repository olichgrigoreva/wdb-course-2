let appFooter = {};
  (function(app){
    app.newFooter = newFooter;
      function newFooter() {
        let footer = document.createElement("footer");
        footer.classList.add("footer");
        footer.className = "footer";
        let footer_text = document.createTextNode("Copyright by ... 2019");
        footer.append(footer_text);
        document.querySelector("body").append(footer);
      }
} (appFooter));
