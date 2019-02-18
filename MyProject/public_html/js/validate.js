console.log('Проверка подключения validate');
var form = document.forms.registration;//получили форму
var reg = form.querySelector('.reg');//кнопку
var userName = form.querySelector('.userName');
var userEmail = form.querySelector('.userEmail');
var password = form.querySelector('.password');
var passwordAgain = form.querySelector('.passwordAgain');
var fields = form.querySelectorAll('.field'); //получили массив всех полей

var generateError = function(text) {
  var error = document.createElement('div');
      error.className = 'error';
      error.style.color = 'red';
      error.innerHTML = text;
      return error;
}

var removeErrors = function() { //очищаем ошибки валидации чтобы не дублировались
  var errors = document.querySelectorAll('.error');
  for(var i = 0; i < errors.length; i++) {
    errors[i].remove()
  }
}

var checkFieldsPresence = function() {//проверка полей на пустоту

  for (var i = 0; i < fields.length; i++) {
    if(!fields[i].value) {
      var error = generateError('Поле не может быть пустым');
      fields[i].parentElement.insertBefore(error, fields[i]); //отобразится перед незаполненными полями
      return false;
    }
  }
  return true;
}

var checkPasswordMatch = function() {//соответствие паролей
  if(password.value !== passwordAgain.value) {
      var error = generateError('Пароли не совпадают');
      password.parentElement.insertBefore(error, password);
      return false;
  }
  return true;
}

document.forms.registration.addEventListener('submit', function (event) {
  event.preventDefault();
  
  removeErrors();

  if (checkFieldsPresence() && checkPasswordMatch()); {

    return false;//отправляем форму submit отправляет форму
  }
  return true;
});


  

