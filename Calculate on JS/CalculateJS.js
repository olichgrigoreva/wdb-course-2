document.addEventListener("DOMContentLoaded", loaded);
function loaded() {
    let commonfield = document.createElement("div");
    commonfield.classList.add("div_1");
    document.querySelector("body").append(commonfield);
    create_input_first();
    function create_input_first() {
        let operand_1 = document.createElement("input");
        operand_1.classList.add("operand1");
        operand_1.type = "number";
        document.querySelector("div").append(operand_1);
    }
    commonfield.append(document.createTextNode("Выбери операцию"));
    let select = document.createElement("select");
    select.classList.add("select");
    document.querySelector("div").append(select);
    create_option_addition();
    function create_option_addition() {
        let option_addition = document.createElement("option");
        option_addition.value = "+";
        option_addition.append(document.createTextNode("+"));
        document.querySelector("select").append(option_addition);
    }
    create_option_subtraction();
    function create_option_subtraction() {
        let option_subtraction = document.createElement("option");
        option_subtraction.value = "-";
        option_subtraction.append(document.createTextNode("-"));
        document.querySelector("select").append(option_subtraction);
    }
    create_option_division();
    function create_option_division() {
        let option_division = document.createElement("option");
        option_division.value = "/";
        option_division.append(document.createTextNode("/"));
        document.querySelector("select").append(option_division);
    }
    create_option_multiply();
    function create_option_multiply() {
        let option_multiply = document.createElement("option");
        option_multiply.value = "*";
        option_multiply.append(document.createTextNode("*"));
        document.querySelector("select").append(option_multiply);
    }
    create_input_second();
    function create_input_second() {
        let operand_2 = document.createElement("input");
        operand_2.classList.add("operand2");
        operand_2.type = "number";
        document.querySelector("div").append(operand_2);
    }
    create_button_calculate();
    function create_button_calculate() {
        let button = document.createElement("button");
        button.classList.add("button_result");
        button.append(document.createTextNode("Вычислить"));
        document.querySelector("body").append(button);
        document.querySelector(".button_result").addEventListener("click", Calculate);
    }
    let br = document.createElement("br");
    document.querySelector("body").append(br);
    create_input_result();
    function create_input_result() {
        let result = document.createElement("output");
        result.classList.add("result");
        result.type = "number";
        // result.placeholder = "Результат";
        document.querySelector("body").append(result);
    }

}
function Calculate() {
    let operand1 = Number(document.querySelector(".operand1").value);
    let operand2 = Number(document.querySelector(".operand2").value);
    let operation = document.querySelector(".select").value;
    if (operation == "+") {
        result = operand1 + operand2;
        document.querySelector(".result").innerHTML = result;
    }
    else if (operation == "-") {
        result = operand1 - operand2;
    }
    else if (operation == "*") {
        result = operand1 * operand2
    }
    else if (operation == "/") {
        if (operand2 == 0) {
            result = "на 0 делить нельзя";
        }
        else result = operand1 / operand2;
    }
    document.querySelector(".result").innerHTML = result;
}


