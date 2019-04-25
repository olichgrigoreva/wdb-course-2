let appform = {}
appform.form = form;
(function (form){
  let form = document.createElement("form");
  form.className = "form";
  form.name = "form";
  document.querySelector("body").append(form);
}(form));
