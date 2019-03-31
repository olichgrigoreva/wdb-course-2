<html>
  <head>
    <meta charset="utf-8" />
    <style>
      .topic_text {
        background-color: CCCCCC;
        font-size: 32px;
        font-style: italic;
        color: red;
        padding-top: 10px;
        text-align: center;
      }
      .space {
        padding: 10px;
      }
    </style>
    <title> Калькулятор </title>
    <script type="text/javascript">
      function Calc(event) {
        event.preventDefault();
        let form = document.querySelector("form");
        // AJAX Request
        fetch("/wdb-course-2/Calculator(AJAX).php", {
          method: "POST",
          body: new FormData(form)
        })
        .then(response => {
        return response.text();
        })
        .then(text => {
          document.querySelector(".result").innerHTML = text;
        });
        }

        let n1=document.querySelector(".n1").value;
        let n2=document.querySelector(".n2").value;
        if ((!(!n1)) && (!(!n2))) {
          let op=document.querySelector(".OperLi").value;
          if (op=="+") {
            document.querySelector(".result").innerHTML=parseFloat(n1)+parseFloat(n2);
          }
          else {
            if (op=="-") {
              document.querySelector(".result").innerHTML=parseFloat(n1)-parseFloat(n2);
            }
            else {
              if (op=="*") {
                document.querySelector(".result").innerHTML=parseFloat(n1)*parseFloat(n2);
              }
              else {
                if (parseFloat(n2)==0) {
                  document.querySelector(".result").innerHTML="На ноль не делится!";
                }
                else {
                  document.querySelector(".result").innerHTML=parseFloat(n1)/parseFloat(n2);
                }
              }
            }
          }
        }
        else {
          document.querySelector(".result").innerHTML="Ошибка ввода числа";
        }
 	    }
    </script>
  </head>
  <body>
    <div class="topic_text" "space">
      Калькулятор
      <hr>
    </div>
		<div>
	    <input type="text" class="n1">
	    <select name="oper" class="OperLi">
				<option value="+" selected="selected">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
	    </select>
      <input type="text" class="n2">
 	  	<button onclick="Calc(event)"> = </button>
  	  <div class="result"></div>
    </div>
  </body>
</html>
