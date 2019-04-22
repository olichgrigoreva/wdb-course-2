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
	
	document.getElementById("result").value = result;
}
