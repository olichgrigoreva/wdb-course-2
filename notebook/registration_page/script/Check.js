function check_form() {
  event.preventDefault();
    if (document.querySelector(".username").value == '' || document.querySelector(".password").value == '' || document.querySelector(".confirm_password").value == '' || document.querySelector(".email").value == ''){
      let myalert = document.createElement("div");
      myalert.className = "alert alert-warning alert-dismissible fade show";
      myalert.role = "alert";
      myalert.innerHTML ='<strong>You cal fill all fields!</strong><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>';
      document.querySelector(".container").append(myalert);
    }
      else {
        if (document.querySelector(".password").value !== document.querySelector(".confirm_password").value) {
            let myalert = document.createElement("div");
            myalert.className="alert alert-warning alert-dismissible fade show";
            myalert.role = "alert";
            myalert.innerHTML='<strong>Passwords d\'not match!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
           document.querySelector(".container").append(myalert);
      }
        else {
          let mailformat = /.+@.+\..+/i;
              if (mailformat.test(document.querySelector(".email").value) == false) {
                let myalert = document.createElement("div");
                myalert.className="alert alert-warning alert-dismissible fade show";
                myalert.role = "alert";
                myalert.innerHTML='<strong>Wrong email format!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
               document.querySelector(".container").append(myalert);
              }
                else {
                  send_data(event);
                }
            }
}
window.setTimeout(function(){
        $(".alert").alert('close');
    },10000);

}

function send_data(event) {
        event.preventDefault();
        let input_data = document.querySelector("form");
        fetch("way....", {
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

        if (text == "User has created"){
            window.location.href = "way....";
        }

        });
}
