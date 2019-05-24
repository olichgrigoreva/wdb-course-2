function send_data(event) {
  event.preventDefault();
    let input_data = document.querySelector("form");
      //fetch("", {
      method: "POST",
      body: new FormData(input_data)
      })
      .then(response => {
      return response.text();
      })
      .then(text => {

        let myalert = document.createElement("div");
          myalert.className="alert alert-success alert-dismissible fade show";
          myalert.role = "alert";
          myalert.innerHTML='<strong>'+text+'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
          document.querySelector(".container").append(myalert);

        window.setTimeout(function(){
            $(".alert").alert('close');
        },10000);

        if (text == "User created"){
            window.location.href = "/www/index.php";
        }

        });
}
