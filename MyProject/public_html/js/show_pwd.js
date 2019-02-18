console.log('Проверка подключения');
var togglePassword = document.getElementById("togglePassword");
var showOrHidePassword = () => {
//function showOrHidePassword(){
  var password = document.getElementById('pwd');
  if (password.type === 'password') {
    password.type = 'text';
  } else {
    password.type = 'password';
  }
};
togglePassword.addEventListener("change", showOrHidePassword);
