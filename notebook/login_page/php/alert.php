<?php
  class alert {

    function alert($message) {
	    echo "<script type='text/javascript'>
	    	document.addEventListener('DOMContentLoaded', loaded);
	    		function loaded(event){

						let myalert = document.createElement('div')
	    			myalert.className='alert alert-warning alert-dismissible fade show';
	    			myalert.role = 'alert';
	    			myalert.innerHTML = '<strong>'+'$message'+'</strong>';

	        	let myalert_close_btn = document.createElement('button');
	        	myalert_close_btn.type = 'button';
		        myalert_close_btn.className='close';
	        	myalert_close_btn.setAttribute('data-dismiss', 'alert');
		        myalert_close_btn.setAttribute('aria-label', 'Close');

	            let cross = document.createElement('span');
	            cross.setAttribute('aria-hidden', 'true');
	            cross.innerHTML = '&times;';

	        		myalert_close_btn.appendChild(cross);
	    				myalert.appendChild(myalert_close_btn);
	    document.querySelector('.container').append(myalert);
	    }
	    </script>";
	}
	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	if ($username !== "" && $password !== "") {
	    $add_new_user_connect = new database("localhost", "root", "virtual", "levashov");
	    $check_query = "SELECT * FROM users WHERE username = '$username'";
	    $check_results = $add_new_user_connect->check_in_database($check_query);
	    if ($check_results["username"] == $username && $check_results["password"] == $password) {
	      exit;
	    }
	    	else {
	        alert("Wrong password or username");
	    	}
	}
		else {
	   alert("You left a few fields blank");
	}
}
