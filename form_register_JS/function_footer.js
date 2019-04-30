let appFooter = {};
  (function(app){
  app.footer = newFooter;
    function newFooter(){
      function footer(){
        let footer = document.createElement("footer");
          footer.classList.add("footer");
            footer.className = "footer";
            let footer_text = document.createTextNode("Copyright by ... 2019");
          footer.append(footer_text);
        document.querySelector("body").append(footer);
      return footer;
    }
}(appFooter));
