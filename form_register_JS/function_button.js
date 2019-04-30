let appButton = {};
  (function(app){
    app.button = newButton;
      function newButton(){
        let button = document.createElement("button");
          let buttonText = document.createTextNode("Register");
            button.type = "submit";
              button.id = "inblock";
            button.className = "btn-primary";
          document.querySelector("form").append(button);
        button.addEventListener('click',in_function);
      return button;
      }
}(appButton));
