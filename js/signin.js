function inputcheck() {
  var id = document.getElementById('id');
  var password = document.getElementById('password');
  var password = document.getElementById('name');
  var msg = document.getElementById('msg');


  if(id.value.length < 4) {
    msg.innerHTML = "<h1>아이디는 4글자 이상입니다.</h1>";
    return false;
  }

  if(password.value.length < 4) {
    msg.innerHTML = "<h1>패스워드는 4글자 이상입니다.</h1>";
    return false;
  }

  if(name.value.length < 4) {
    msg.innerHTML = "<h1>아이디는 4글자 이상입니다.</h1>";
    return false;
  }


  return true;


}
