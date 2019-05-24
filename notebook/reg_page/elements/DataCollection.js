export default class DataCollection {
  static open(pageNode) {
    let input = document.createElement("input");
    input.type = "submit";
    input.className = "btn btn-primary";
    input.value = "Register";
    input.id = "inblock";
    input.name = "inblock";
    document.querySelector("form").append(input);
  }
}
