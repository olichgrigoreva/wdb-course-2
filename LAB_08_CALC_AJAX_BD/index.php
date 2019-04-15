<?php
  const dbHOST = '127.0.0.1';
  const dbUSER = 'aleks';
  const dbPASS = '123';
  const dbNAME = 'aleks';
  const CNT_RECORD_DISPLAY = 5;
  $calcResult = "";

  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  function dbSetConnect() {
    $mysqli = mysqli_init();
    $connection = mysqli_connect(dbHOST, dbUSER, dbPASS, dbNAME);
    return $connection;
  }

  function dbAddRecord($dbObg, $val1, $val2, $op, $calcResult) {
    $insertQuery = mysqli_query($dbObg, "INSERT INTO calc(value1, value2, operation, result) 
      VALUES('$val1', '$val2', '$op', '$calcResult')");
    mysqli_query($dbObg, $insertQuery);
  }  

  function dbGetLastRecord($dbObg) {
    $query = mysqli_query($dbObg, "SELECT * FROM calc ORDER BY id DESC LIMIT ".CNT_RECORD_DISPLAY);
    $queryResult = mysqli_fetch_assoc($query); // assoc - associated massive
    $i = 0;
    while (!empty($queryResult) && $i<CNT_RECORD_DISPLAY) {
      $resultString=$queryResult['value1']." ";
      $resultString.=$queryResult['operation']." ";
      $resultString.=$queryResult['value2']." ";
      $resultString.="= ";
      $resultString.=$queryResult['result'];
      $dbLastRecordsValues[$i][0] = $resultString;
      $dbLastRecordsValues[$i][1]=$queryResult['created'];
      $i++;
      $queryResult=mysqli_fetch_assoc($query);
    }
    return $dbLastRecordsValues;
  }

  function calc($val1, $val2, $operation) {
    $result=0;
      switch($operation) {
        case "+": $result = $val1 + $val2; break;
        case "-": $result = $val1 - $val2; break;
        case "*": $result = $val1 * $val2; break;
        case "/":
          if ($val2 != 0) {
              $result = $val1 / $val2;
            }
          else
            $result = "Not allow zero dizion!";
          break;
      } //switch($operation)
    return ($result);
  }

//----------- MAIN CODE START HERE ---------------
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $json_str = file_get_contents('php://input');
    $json_obj = json_decode($json_str);
    $requestText = $json_obj->request;
    $dbLastRecordsValues = array();

    $connection = dbSetConnect();
    if(!empty($connection)) {
      switch ($requestText) {
        case 'calculate': {
  	    $value1 = $json_obj->val1;
  	    $value2 = $json_obj->val2;
	    $operation = $json_obj->operation;
	    $calcResult = calc($value1, $value2, $operation);
	    dbAddRecord($connection, $value1, $value2, $operation, $calcResult);
	    $dbLastRecordsValues = dbGetLastRecord($connection);
	    $strResult = array (
	      "calcResult"=>$calcResult,
	      "sqlData"=>$dbLastRecordsValues
	    );
	    break;
      	}
      	case 'lastrecord': {
		$dbLastRecordsValues = dbGetLastRecord($connection);
		$strResult = array ("sqlData"=>$dbLastRecordsValues);
		break;
        }
      }
    }

    $jsonStr = json_encode($strResult);
    print_r($jsonStr);
    die;
  }
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
    <style>
        .value_inp {
            margin: 5px 0px;
            font-size:24px;
            width:180px;
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
            font-size:24px;
        }
        .lastOperationText {
            font-size:18px;
            margin: 10px;
	    width: 380px;
        }
        .dateCreated {
            font-size:14px;
            float: right;
        }
    </style>
    <script>
        function formDataUpdate(responseObj){
            let resultObj = document.getElementById("calcResult");
            resultObj.innerHTML = responseObj.calcResult;
            fillFormSqlData(responseObj);
        }

        function fillFormSqlData(serverResponse) {
            let sqlObj = document.getElementById("sqlData");
            let sqlObjDate = document.getElementById("sqlDataTime");
            sqlObj.innerHTML = "";
            for (let i = 0; i < serverResponse.sqlData.length; i++) {
                sqlObj.innerHTML +="<br>"+serverResponse.sqlData[i][0];
                sqlObj.innerHTML +="<span class='dateCreated'> - created: "+serverResponse.sqlData[i][1]+" - </span>";
            }
        }

        function serverRequest(requestArray, phpFile, doAfterRequest) {
            function status(response) {
                if (response.status >= 200 && response.status < 300) {
                    return Promise.resolve(response)
                } else {
                    return Promise.reject(new Error(response.statusText))
                }
            }

            function json(response) {
                return response.json()
            }
            fetch(phpFile, {
                method: "POST",
                body: JSON.stringify(requestArray)})
                .then(status)
                .then(json)
                .then(function(data) {
                    doAfterRequest(data);
                }).catch(function(error) {
                console.log('Request failed');
            });
        }

        function bCalculate(event) {
            let formObj = event.target.closest("form");
            for (let i = 0; i < formObj.elements.length-1; i++){ // - 1, button - last element, not need check
                el = formObj.elements[i];
                if (!el.value || !el.validity.valid) return false; // submit need to display setValidity, return needed
            }
            event.preventDefault();
            let requestArray={
                "request": "calculate",
                "val1": formObj.elements.value1.value,
                "val2": formObj.elements.value2.value,
                "operation": formObj.elements.operation.value,
            };
            serverRequest(requestArray, "/index.php", formDataUpdate);
        }

        function bdUpdate() {
            let requestArray={
                "request": "lastrecord",
            };
            serverRequest(requestArray, "/index.php", fillFormSqlData);
        }
    </script>
</head>

<body>
    <form>
        <div>
            <input type="text" maxlength=5 class="value_inp value1" name="value1" placeholder="First number" autofocus required>
            <select class="operationType" name="operation">
                <option value="+" selected>+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" maxlength=5 class="value_inp value2" name="value2"  placeholder="Second number" required>
            <a class="value_inp">  = </a><a class="result value_inp" id="calcResult"></a>
            <button class="value_inp" onclick="bCalculate(event)">Calculate</button>
        </div>

        <div class="lastOperationText">
            <a class="lastOperationText" id="sqlData"></a>
        </div>
    </form>
    <script>
	bdUpdate(); 
    </script>
</body>
</html>