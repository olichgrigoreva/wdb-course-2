<html>
  <head>
    <title>Calc</title>
    <style type="text/css">
      .value_inp {
      font-family:Arial; 
      font-size:24px;   
      width:150px;      
    }

    .operationType {
      font-size:24px;
      background:transparent;
      border:none;
      outline:0;
      -webkit-appearance: none;
      -moz-appearance: none;
      -ms-appearance: none;
      appearance: none !important;  
    }

    .operationType:hover {
      border: solid;
    }

    .result {
      font-family:Arial;
      font-size:24px;
    }
    
    .dateCreated {
      font-family:Arial;
      font-size:12px;
      margin: 0px 30px 0px 30px;
    }                 
    </style>
    <script>
      function bCalculate(event) {
        let form = document.querySelector("form");
        event.preventDefault();
        fetch("/calc.php", {
          method: "POST",
          body: new FormData(form)
        }).then(response => {
          return response.text();
        }).then(text => {
          document.querySelector(".result").innerHTML = text;
        });
      }
    </script>
  </head>

  <body>
    <form>
      <input type="text" maxlength=5 class="value_inp value1" name="value1">
      <select class="operationType" name="operation">
        <option value="+" selected>+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="text" maxlength=5 class="value_inp value2" name="value2">
      <a class="value_inp">  = </a> <a class="result value_inp"></a>
      <button class="value_inp" onclick="bCalculate(event)">Calculate</button>
    </form>
    <a class="result lastDBRecord">  = </a>
  </body>
</html>