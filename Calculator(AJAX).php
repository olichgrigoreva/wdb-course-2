<html>
  <head>
    <meta charset="utf-8">
    <style>
      .topic_text {
        background-color: #CCCCCC;
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
    <script type="text/javascript">
      function Calc(n1, op, n2) {
        res="";
        if ((!(!n1)) && (!(!n2))) {
          if (op=="+") { res=parseFloat(n1)+parseFloat(n2); }
          else {
            if (op=="-") { res=parseFloat(n1)-parseFloat(n2); }
            else {
              if (op=="*") { res=parseFloat(n1)*parseFloat(n2); }
              else {
                if (parseFloat(n2)==0) { res="На ноль не делится!"; }
                else { res=parseFloat(n1)/parseFloat(n2); }
              }
            }
          }
        }
        else { res="Ошибка ввода числа"; }
        return res;
 	    }

      function outRes(event) {
        event.preventDefault();
        let form=document.querySelector("form");

        let result=Calc(document.querySelector(".n1").value,
                        document.querySelector(".OperLi").value,
                        document.querySelector(".n2").value);

        fetch("/Calculator(AJAX).php", {
          method: "POST",
          body: new FormData(form)
        })
        .then (response => {
          return response.text();
        })
        .then (text => {
          document.querySelector(".result").innerHTML=text;
        });
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
 	  	<button onclick="outRes(event)"> = </button>
  	  <div class="result"></div>
    </div>
  </body>
</html>
