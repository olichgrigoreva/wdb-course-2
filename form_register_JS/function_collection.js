let appCollecton = {};
    (function(app){
      app.input = newInput;
        function newInput(id, name, value){
          let input = document.createElement("input");
            input.type = "submit";
              input.className = "btn-primary";
                input.value = "Register";
              input.id = "inblock";
            input.name = name;
          document.querySelector("form").append(input);
        }
}(appCollecton));
