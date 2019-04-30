let appForm = {};
  (function(app){
    app.form = newForm;
      function newForm(){
  			let form = document.createElement("form");
  				form.className = "form";
  					form.name = "form";
  				document.querySelector("body").append(form);
        return form;
  		}
}(appForm));
