function main(event) {

  let main=document.createElement("main");
  main.classList.add("main_color");

  let div=document.createElement("div");
  div.classList.add("width_1", "container");

  let form=document.createElement("form");
  form.classList.add("register_form");

  let input;
  let br;

  br=document.createElement("br");
  form.append(br);

  br=document.createElement("br");
  form.append(br);

  br=document.createElement("br");
  form.append(br);

  input = new Input(
    "Имя пользователя",
    "text",
    "username",
    "enter_username",
    "podsvet_name(this.value, this.id)",
    "Может содержать от 3 до 32 латинских букв, цифр, а также символы .  _  - . Должен начинаться и заканчиваться на букву или цифру, нельзя использовать подряд два одинаковых спецсимвола."
  );
  form.append(input.input_type_1());

  br=document.createElement("br");
  form.append(br);

  input = new Input(
    "Ваш e-mail адрес",
    "email",
    "email",
    "enter_email",
    "podsvet_email(this.value, this.id)",
    "Введите Ваш e-mail адрес в формате name@example.com."
  );
  form.append(input.input_type_1());

  br=document.createElement("br");
  form.append(br);

  input = new Input(
    "Пароль",
    "password",
    "password",
    "enter_password",
    "podsvet_password(this.value, this.id)",
    "Может содержать от 6 до 32 латинских букв, цифр."
  );
  form.append(input.input_type_1());

  br=document.createElement("br");
  form.append(br);

  input = new Input(
    "Подтвердите пароль.",
    "password",
    "confirm_password",
    "enter_confirm_password",
    "podsvet_confirm_password(this.value, document.getElementById('enter_password').value, this.id)",
    "Введите пароль еще раз. Он должен совпадать с полем Пароль."
  );
  form.append(input.input_type_1());

  br=document.createElement("br");
  form.append(br);

  let div_button=document.createElement("div");
  div_button.classList.add("centr");

  let button;

  button = new Button(
    "button",
    "button",
    "Регистрация",
    "registr(event)"
  );
  div_button.append(button.button_type_1());

  br=document.createElement("br");
  div_button.append(br);

  br=document.createElement("br");
  div_button.append(br);

  button = new Button(
    "button",
    "button",
    "Вход",
    "go_to_auth(event)"
  );
  div_button.append(button.button_type_2());



  form.append(div_button);

  br=document.createElement("br");
  form.append(br);

  br=document.createElement("br");
  form.append(br);

  br=document.createElement("br");
  form.append(br);

  div.append(form);

  main.append(div);

  document.querySelector("body").append(main);

}
