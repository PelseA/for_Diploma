(function () {
   'use strict';

   function sendQuestion(event) {
       event.preventDefault();

       let form_data = {
          category: this.category.value,
          text: this.text.value,
          right_answer: this.right_answer.value,
          wrong1: this.wrong1.value,
          wrong2: this.wrong2.value,
          tip: this.tip.value,
          source: this.source.value
       };

       console.log(form_data);

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
    console.log(response);
      if(response.success) {
           alert("Спасибо за вопрос. Ваш вопрос отправлен на проверку");
          window.location.href = "/user/account";
      } else {
          alert(response.error);
      }

       /*if (response === "QUESTION_ADDED") {
            alert("Спасибо за вопрос. Ваш вопрос отправлен на проверку");
           window.location.href = "/user/account";
       
          
       } else {
        
           console.log("вывод данных");
       
   }*/
 }

   /*function addFormListener() {
       for (let i = 0; i < document.forms.length; i++) {
           document.forms[i].addEventListener('submit', sendQuestion);
       }
   }*/

   //addFormListener();
   document.forms.add_question.addEventListener('submit', sendQuestion);
}());