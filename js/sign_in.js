function processForm(){
  var valid = true;
  var username = document.getElementById("loginForm").username.value;
  var password = document.getElementById("loginForm").password.value;
  if(username == "" || password == ""){
    valid = false
    alert("Error: Username/password field is empty")
  }
  var result = username + " has signed in.";
  if(valid){
    alert(result);
  }
}
