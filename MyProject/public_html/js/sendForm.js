(function () {
   'use strict';

   function sendForm(event) {
       event.preventDefault();

       let form_data = {
          email: this.email.value,
          pwd: this.pwd.value
       };



       let xhr = new XMLHttpRequest();
       xhr.open("POST", this.action, true);
       xhr.send(new FormData(this));
       xhr.form = this;

       xhr.onload = function (oEvent) {
           if (xhr.status == 200) {
               var result = JSON.parse(xhr.responseText);
               responseHandler(this.form.action, result);
           }
       }; 
       return false;
   }

   function responseHandler(action, response) {

      if(response.success) {
          window.location.href = "/user/account";
      } else {
          alert(response.error);
      }

       /*if (response === "USER_ADDED") {
            alert("Поздравляем с регистрацией!");
           window.location.href = "/user/account";
       } else if (response === "AUTH"){
          
       } else {
        
           console.log("вывод данных");
       }*/
   }

   /*function addFormListener() {
       console.log(document.forms);
       for (let i = 0; i < document.forms.length; i++) {
           document.forms[i].addEventListener('submit', sendForm);
       }
      
   }

   addFormListener();*/
   document.forms.authorization.addEventListener('submit', sendForm);
   document.forms.registration.addEventListener('submit', sendForm);
}());