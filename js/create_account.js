function validateEmail(address){
  var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
  if (p == 0)
  return true;
  else
  {
  alert("Error: Invalid e-mail address.");
  return false;
  }
}

function validatePassword(password, confirm){

  if (password == confirm){
    return true;
  }
  else{
    alert("Error: Password and Confirm Password don't match.")
    return false;
  }
}

function checkPassword(){
  var match_color = "#6c6"
  var not_match_color = "#f66"
  var pass1 = document.getElementById("userForm").password;
  var pass2 = document.getElementById("userForm").confirm_password;

  if (pass1.value == pass2.value){
    //Passwords match
    pass2.style.backgroundColor = match_color;
  }
  else{
    //Passwords do not match
    pass2.style.backgroundColor = not_match_color;
  }
}

function processForm(){
  var valid = true;
  var first_name = document.getElementById("userForm").first_name.value;
  var last_name = document.getElementById("userForm").last_name.value;
  var email = document.getElementById("userForm").email.value;
  var username = document.getElementById("userForm").username.value;
  var password = document.getElementById("userForm").password.value;
  var confirm_password = document.getElementById("userForm").confirm_password.value;
  valid = validateEmail(email);

  var result = "Account Created with following info: Username: " + username + " Password: " + password + " Email: " + email;
  if(valid){
    valid = validatePassword(password, confirm_password)
    if(valid){
      alert(result);
    }
  }
}
