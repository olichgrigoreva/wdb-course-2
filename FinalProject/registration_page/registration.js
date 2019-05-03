document.addEventListener("DOMContentLoaded", loaded);

function create_form (event){
  let reg_form=document.createElement("form");
  reg_form.id="form";
  reg_form.name="registration_form";
  reg_form.method="post";
  document.querySelector("body").append(reg_form);

  let input_username = document.createElement("input");
  input_username.type = "text";
  input_username.id = "username";
  input_username.classList.add("input");
  document.querySelector("form").append(input_username);

  let p=document.createElement("p");
  p.id="div_break";
  document.querySelector("form").append(p);

  let input_password = document.createElement("input");
  input_password.type = "password";
  input_password.id = "password";
  input_password.classList.add("input");
  document.querySelector("form").append(input_password);

  let p1=document.createElement("p");
  p1.id="div_break";
  document.querySelector("form").append(p1);

  let repeat_password = document.createElement("input");
  repeat_password.type = "password";
  repeat_password.id = "password";
  repeat_password.classList.add("input");
  document.querySelector("form").append(repeat_password);

  let p2=document.createElement("p");
  p2.id="div_break";
  document.querySelector("form").append(p2);

  let input_email = document.createElement("input");
  input_email.type = "text";
  input_email.id = "password";
  input_email.classList.add("input");
  document.querySelector("form").append(input_email);

}
