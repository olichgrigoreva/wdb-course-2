let appDataCollection = {};
  (function(app){
    app.newDataCollection = newDataCollection;
      function newDataCollection(){
        let input = document.createElement("input");
        input.type = "submit";
        input.className = "btn btn-primary";
        input.value = "Register";
        input.id = "inblock";
        input.name = "inblock";
        document.querySelector("form").append(input);
      }
} (appDataCollection));
