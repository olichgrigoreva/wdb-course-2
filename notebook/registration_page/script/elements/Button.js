let appButton = {};
  (function(app){
    app.newButton = newButton;
      function newButton(){
        let button = document.createElement("button");
        let buttonText = document.createTextNode("Register");
        button.type = "submit";
        button.id = "button_register";
        button.className = "btn btn-primary";
        button.name = "register";
        button.append(buttonText);
        document.querySelector("form").append(button);
        button.addEventListener("click", in_function);
      }
} (appButton));
