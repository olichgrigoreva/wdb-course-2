class Input {

  constructor(label_value, input_type, input_name, input_id, podsvet_function, small_value) {
    this.label_value = label_value;
    this.input_type = input_type;
    this.input_name = input_name;
    this.input_id = input_id;
    this.podsvet_function = podsvet_function;
    this.small_value = small_value;
  }

  input_type_1() {
  let div=document.createElement("div");
  let label = document.createElement("label");
  label.setAttribute("for", this.input_id);
  let text = document.createTextNode(this.label_value);
  label.append(text);
  div.append(label);
  let input = document.createElement("input");
  input.classList.add("form-control");
  input.type = this.input_type;
  input.name  = this.input_name;
  input.value = "";
  input.id = this.input_id;
  input.setAttribute("onkeyup", this.podsvet_function);
  div.append(input);
  let small = document.createElement("small");
  small.classList.add("form-text", "text-muted");
  let text_small = document.createTextNode(this.small_value);
  small.append(text_small);
  div.append(small);
  return div;
  }

}
