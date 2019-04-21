class Button {
  constructor(button_type, button_name, button_value, button_onclick) {
    this.button_type = button_type;
    this.button_name = button_name;
    this.button_value = button_value;
    this.button_onclick = button_onclick;

  }

  button_type_1() {
    let button = document.createElement("button");
    button.classList.add("btn", "btn-dark", "width_button_1");
    button.type = this.button_type;
    button.name = this.button_name;
    let text=document.createTextNode(this.button_value);
    button.append(text);
    button.setAttribute("onclick", this.button_onclick);
    return button;
  }

  button_type_2() {
    let button = document.createElement("button");
    button.classList.add("btn", "btn-secondary", "width_button_1");
    button.type = this.button_type;
    button.name = this.button_name;
    let text=document.createTextNode(this.button_value);
    button.append(text);
    button.setAttribute("onclick", this.button_onclick);
    return button;
  }


}
