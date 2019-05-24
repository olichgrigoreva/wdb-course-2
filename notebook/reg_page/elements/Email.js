export default class Email {
  static open(pageNode) {
    let e_mail = document.createElement("input");
    e_mail.type = "e_mail";
    e_mail.classList.add("e_mail");
    e_mail.className = "form-control";
    e_mail.placeholder = "Email";
    e_mail.id = "e_mail";
    e_mail.name = "e_mail";
    //e_mail.value = "Email";
    document.querySelector("div4").append(e_mail);
  }
}
