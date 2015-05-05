function validateName(name){
  var p = name.search(/^[-'\w\s]+$/);
  if (p == 0){
    return true;
  }
  else{
    return false;
  }
}

function validatePhone(phone){
  var p1 = phone.search(/^\d{3}[-\s]{0,1}\d{3}[-\s]{0,1}\d{4}$/);
  var p2 = phone.search(/^\d{3}[-\s]{0,1}\d{4}$/);
  if(p1 == 0 || p2 == 0){
    return true;
  }
  else{
    return false;
  }
}

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

function validateFeedBackForm()
{
  var feedbackFormObj = document.getElementById("feedbackForm");
  var firstName = feedbackForm.firstName.value;
  var lastName = feedbackForm.lastName.value;
  var email = feedbackForm.email.value;
  var phone = feedbackForm.phone.value;
  var valid = true;

  if(!validateName(firstName)){
    alert("Error: Invalid first name.");
    valid = false;
  }

  if(!validateName(lastName)){
    alert("Error: Invalid last name.");
    valid = false;
  }

  if(!validatePhone(phone)){
    alert("Error: Invalid phone number.");
    valid = false;
  }

  if(!validateEmail(email)){
    alert("Error: Invalid email address.");
    valid = false;
  }

  if(valid){
    alert("Thank you for the feedback!");
  }
  return valid;
}
