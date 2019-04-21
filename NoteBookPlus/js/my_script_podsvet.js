function podsvet_name(user_name, id) {
      let lenght_user_name=user_name.length;
      let symbol_massiv="1234567890QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm._-";
      let length_symbol_massiv=symbol_massiv.length;
      let m;
      let n;
      let sootv_name=0;
        if(lenght_user_name>2) {
          for(m=0; m<lenght_user_name; m++) {
            for(n=0; n<length_symbol_massiv; n++) {
              if(user_name.charAt(m)==symbol_massiv.charAt(n)) {
                sootv_name=sootv_name+1;
              }
            }
          }
        }
      if(lenght_user_name>2 && lenght_user_name<33 && sootv_name==lenght_user_name) {
        document.getElementById(id).classList.remove('podsvet_bad');
        document.getElementById(id).classList.add('podsvet_good');
      }
      else {
        document.getElementById(id).classList.remove('podsvet_good');
        document.getElementById(id).classList.add('podsvet_bad');
      }
  }



function podsvet_email(email, id) {
  let lenght_email=email.length;
  let m;
  let sobaka;
    for(m=0; m<lenght_email; m++) {
      if(email.charAt(m)=="@") {
      sobaka=1;
      }
    }
  if(lenght_email>2 && sobaka==1) {
    document.getElementById(id).classList.remove('podsvet_bad');
    document.getElementById(id).classList.add('podsvet_good');
  }
  else {
    document.getElementById(id).classList.remove('podsvet_good');
    document.getElementById(id).classList.add('podsvet_bad');
  }
}



function podsvet_password(password, id) {
  let lenght_password=password.length;
  let symbol_massiv_pass="1234567890QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm";
  let length_symbol_massiv_pass=symbol_massiv_pass.length;
  let m;
  let n;
  let sootv_password=0;
  if(lenght_password>5) {
    for(m=0; m<lenght_password; m++) {
      for(n=0; n<length_symbol_massiv_pass; n++) {
        if(password.charAt(m)==symbol_massiv_pass.charAt(n)) {
          sootv_password=sootv_password+1;
        }
      }
    }
  }
  if(lenght_password>5 && lenght_password<33 && sootv_password==lenght_password) {
    document.getElementById(id).classList.remove('podsvet_bad');
    document.getElementById(id).classList.add('podsvet_good');
  }
  else {
    document.getElementById(id).classList.remove('podsvet_good');
    document.getElementById(id).classList.add('podsvet_bad');
  }
}



function podsvet_confirm_password(password, confirm_password, id) {
  if(password==confirm_password) {
    document.getElementById(id).classList.remove('podsvet_bad');
    document.getElementById(id).classList.add('podsvet_good');
  }
  else {
    document.getElementById(id).classList.remove('podsvet_good');
    document.getElementById(id).classList.add('podsvet_bad');
  }
}
