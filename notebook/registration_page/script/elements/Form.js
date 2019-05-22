let appForm = {};
  (function(app){
      app.newForm = newForm;
        function newForm() {
          let form = document.createElement("form");
          form.className = "container form group";
          form.id = "container";
          document.querySelector("body").append(form);
        }
} (appForm));
