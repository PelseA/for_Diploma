function validate() {
      var email = document.getElementById("email");
      var pwd = document.getElementById("pwd");
      var userName = document.getElementById("userName");
      var pwd2 = document.getElementById("pwd");

      event.preventDefault();
      if(!email.value) {
        email.style.border = "2px solid red";
        return false;
      }
      if(email.value == '%', "+") {
        alert('Недопустимые символы в электронном адресе');
        email.style.border = "2px solid red";
        return false;
      }
      if(!pwd.value) {
        pwd.style.border = "2px solid red";
        return false;
      }
      if(!pwd2.value) {
        pwd2.style.border = "2px solid red";
        return false;
      }
      if(!userName.value) {
        userName.style.border = "2px solid red";
        return false;
      }
      return true;
    };


  

