let appHeader = {};
  (function(app){
  app.header = newHeader;
    function newHeader(){
      let header = document.createElement("header");
				header.classList.add("header");
					header.className = "header";
					let header_text = document.createTextNode("SUPER NOTEBOOK");
				header.append(header_text);
			document.querySelector("body").append(header);
      return header;
    }
}(appHeader));
