class InputDisabled {

  constructor(label_value, input_value, input_id) {
    this.label_value = label_value;
    this.input_value = input_value;
    this.input_id = input_id;
  }

  input_type_disabled() {
  let div=document.createElement("div");
  let label = document.createElement("label");
  label.setAttribute("for", this.input_id);
  let text = document.createTextNode(this.label_value);
  label.append(text);
  div.append(label);
  let input = document.createElement("input");
  input.classList.add("form-control");
  input.type = "text";
  input.value = this.input_value;
  input.id = this.input_id;
  input.disabled = "disabled";
  div.append(input);
  return div;
  }

}
