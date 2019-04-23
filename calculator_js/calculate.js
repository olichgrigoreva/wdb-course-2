document.addEventListener('DOMContentLoaded', () => {    
    render();
});


function render(){
    document.body.appendChild(createInput('first_operand'));
    document.body.appendChild(createSelect());
    document.body.appendChild(createInput('second_operand'));
    document.body.appendChild(createButton());
    document.body.appendChild(createInput('result'));
}

function createInput(name){
    var input = document.createElement('input');
    input.type = 'number';
    input.name = name;
    input.value = 0;
    return input;
}

function createSelect(){
    var optionValues = ['+','-', '*', '/'];
    var select = document.createElement('select');
    select.name = 'operation'

    optionValues.forEach(function(optionValue) {
        var option = document.createElement('option');
        option.text = optionValue;
        select.appendChild(option);
    });

    return select;
}

function createButton(){
    var button = document.createElement('button');
    button.innerHTML = 'Send';
    button.onclick = function(){
        calculate()
    };
    ыreturn button;
}

function calculate() {
	var firstOperand = parseInt(document.getElementsByName("first_operand")[0].value);
	var operation = document.getElementsByName("operation")[0].value;
	var secondOperand = parseInt(document.getElementsByName("second_operand")[0].value);
	
	var result = 0;
	
	if (operation == '*'){
		result = firstOperand * secondOperand;
	}else if (operation == '/'){
		if (secondOperand == '0'){
			result = 'error';
		}
		else {
			result = firstOperand / secondOperand;
		}		
	}else if (operation == '+'){
		result = firstOperand + secondOperand;
	}else{
		result = firstOperand - secondOperand;
	}
	
	document.getElementsByName('result')[0].value = result;
}

