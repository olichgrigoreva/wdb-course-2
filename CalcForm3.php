<?php

$in1 = $_REQUEST["sel1int"];
$in2 = $_REQUEST["sel2"];
$in3 = $_REQUEST["sel3int"];

		if ($in2==1){
			$result=$in1+$in3;
		}
		
		if ($in2==2){
			$result=$in1-$in3;
		}
			
		if ($in2==3){
			$result=$in1*$in3;
		}
		
		if ($in2==4){
			$result=$in1/$in3;
		}

//echo $result;

?>


<html>
	<head>
        <meta charset="utf-8" />
	    <title>Калькулятор</title>
		<script>
		document.addEventListener("DOMContentLoaded", loaded);
			function loaded() {
   	             let textstring1 = document.createElement("div");
				 textstring1.append(document.createTextNode("Введите первое число в поле ввода ниже:"));
				 document.querySelector("form").append(textstring1);
				 let input1 = document.createElement("input");
				 input1.name = "input1";
				 document.querySelector("form").append(input1)	
				 let apply1button = document.createElement("button");
				 apply1button.append(document.createTextNode("Подтвердить выбор первого числа"));
				 apply1button.name="apply1";
				 document.querySelector("form").append(apply1button);
				 apply1button.addEventListener("click", createbyapply1button);
				 }

			function createbyapply1button() {
				let textstring2 = document.createElement("div");
				textstring2.append(document.createTextNode("Выберите математическую операцию из списка ниже"));
				document.querySelector("form").append(textstring2);
				let selectoperation = document.createElement("select");
				selectoperation.name = "select1";     

				option = document.createElement("option");
				option.value = 0;
				option.text = " ";
				selectoperation.appendChild(option);

				option1 = document.createElement("option");
				option1.value = 1;
				option1.text = "Сложить";
				selectoperation.appendChild(option1);

				option2 = document.createElement("option");
				option2.value = 2;
				option2.text = "Вычесть";
	            selectoperation.appendChild(option2);
                
				option3 = document.createElement("option");
                option3.text = "Умножить";
                option3.value = 3;
				selectoperation.appendChild(option3);

				option4 = document.createElement("option");
				option4.value = 4;
				option4.text = "Разделить";	
                                selectoperation.appendChild(option4);

                                selectoperation.addEventListener("change", createbyselect);
				document.querySelector("form").append(selectoperation);
				document.querySelector("[name='apply1']").removeEventListener("click", createbyapply1button);
				}

				function createbyselect() {
				document.querySelector("[name='select1']").removeEventListener("change",createbyselect);
                                let textstring3 = document.createElement("div");
				textstring3.append(document.createTextNode("Введите второе число в поле ввода ниже:"));
				document.querySelector("form").append(textstring3);
                                let input2 = document.createElement("input");
                                input2.name = "input2";
				document.querySelector("form").append(input2)
	                        let apply2button = document.createElement("submit");
				apply2button.append(document.createTextNode("Подтвердить выбор второго числа и вычислить результат"));
				apply2button.name="apply2";
				//apply2button.type="submit";
				document.querySelector("form").append(apply2button);
				apply2button.addEventListener("click", createbyapply2button);
	                        }

				function createbyapply2button() {
				let textstring4 = document.createElement("div");
				textstring4.append(document.createTextNode("Результат вычисления:"));
				document.querySelector("form").append(textstring4);
                let input3 = document.createElement("input");
				input3.name = "input3";
				document.querySelector("form").append(input3);
                document.querySelector("[name='apply2']").removeEventListener("click", createbyapply2button);
	            let sel1 = document.querySelector("[name='input1']").value;
				let sel2 = document.querySelector("[name='select1']").value;
				sel2.name="sel2";
				let sel3 = document.querySelector("[name='input2']").value;
                    let sel1int = parseFloat(sel1);
					sel1int.name="sel1int";            //обязательный атрибут для отправки на сервер!
                    let sel3int = parseFloat(sel3);
					sel3int.name="sel3int";			   //обязательный атрибут для отправки на сервер!
									
				let textstring5 = document.createElement("div");
				textstring5.append(document.createTextNode(" "));
				document.querySelector("form").append(textstring5);
				let resetbutton = document.createElement("button");
                                resetbutton.append(document.createTextNode("Сбросить результат вычисления:"));
				document.querySelector("form").append(resetbutton);
                                resetbutton.addEventListener("click", actionbyresetbutton);
				
				
				//function actionbyresetbutton() {
				//location.reload();
				//	}

				}
</script>                       


<body>
<form method="POST">
</form>
</body>

</html>