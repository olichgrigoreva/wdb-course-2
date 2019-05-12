document.addEventListener("DOMContentLoaded", loaded);

function create_form (event){

  let div_form=document.createElement("div");
  div_form.type="div";
  div_form.classList.add("div_form_style");
  document.querySelector("body").append(div_form);

    let reg_form=document.createElement("form");
    reg_form.id="form";
    reg_form.name="registration_form";
    reg_form.method="post";
    reg_form.classList.add("form_style", "col-sm");
    document.querySelector("div").append(reg_form);

      let input_username=document.createElement("input");
      input_username.type="text";
      input_username.id="username";
      input_username.classList.add("input", "form-control");
      input_username.value="Введите имя пользователя";
      document.querySelector("form").append(input_username);

      let p=document.createElement("p");
      p.id="div_break";
      document.querySelector("form").append(p);

      let input_password = document.createElement("input");
      input_password.type = "password";
      input_password.id = "password";
      input_password.classList.add("input", "form-control");
      input_password.value="Введите пароль";
      document.querySelector("form").append(input_password);

      let p1=document.createElement("p");
      p1.id="div_break";
      document.querySelector("form").append(p1);

      let repeat_password = document.createElement("input");
      repeat_password.type = "password";
      repeat_password.id = "password";
      repeat_password.classList.add("input", "form-control");
      repeat_password.value="Введите пароль повторно";
      document.querySelector("form").append(repeat_password);

      let p2=document.createElement("p");
      p2.id="div_break";
      document.querySelector("form").append(p2);

      let input_email = document.createElement("input");
      input_email.type = "text";
      input_email.id = "email";
      input_email.classList.add("input", "form-control");
      input_email.value-"Введите имейл";
      document.querySelector("form").append(input_email);
}
