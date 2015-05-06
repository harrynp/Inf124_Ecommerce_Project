function validateName(name){
  var p = name.search(/^[-'\w\s]+$/);
  if (p == 0){
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

function validateCreditCard(credit_card){
  var p = credit_card.search(/^\d+$/);
  if(p == 0 && credit_card.length == 16){
    return true;
  }
  else{
    if (p != 0){
      alert("Error: Credit Card can only have numbers")
      return false;
    }
    else if(credit_card.length != 16){
      alert("Error: Credit Card must be 16 digits")
      return false;
    }
  }
}

function validateCVC(cvc){
  var p = cvc.search(/^\d+$/);
  if(p == 0 && cvc.length == 3){
    return true;
  }
  else{
    if (p != 0){
      alert("Error: CVC can only have numbers");
      return false;
    }
    else if(cvc.length != 3){
      alert("Error: CVC must be 3 digits");
      return false;
    }
  }
}

function validateQuantity(quantity){
  var p = quantity.search(/^\d+$/);
  if(p == 0 && parseInt(quantity) > 0 && parseInt(quantity) < 11){
    return true;
  }
  else{
    alert("Error: Quantity must be a number between 1-10");
    return false;
  }
}

function validateForm(first_name, last_name, email, credit_card, cvc){
  return validateName(first_name) && validateName(last_name) && validateEmail(email)
        && validateCreditCard(credit_card) && validateCVC(cvc);
}

function processForm(){
  var product1 = document.getElementById("orderForm").product1.checked;
  if(product1){
    var product1_quantity = document.getElementById('orderForm').product1_quantity.value
    valid = validateQuantity(product1_quantity);
  }
  var product2 = document.getElementById("orderForm").product2.checked;
  if(product2){
    var product2_quantity = document.getElementById('orderForm').product2_quantity.value
    valid = validateQuantity(product2_quantity);
  }
  var first_name = document.getElementById("orderForm").first_name.value;
  var last_name = document.getElementById("orderForm").last_name.value;
  var email = document.getElementById("orderForm").email.value;
  var address = document.getElementById("orderForm").address.value;
  var credit_card = document.getElementById("orderForm").credit_card.value;
  var cvc = document.getElementById("orderForm").cvc.value;

  var result = "Order has been made with following info:\n";
  result += "Name: " + first_name + " " + last_name + "\n";
  result += "Email: " + email + "\n";
  result += "Address: " + address + "\n";
  result += "Credit Card: " + credit_card + "\n";
  result += "CVC: " + cvc + "\n";
  var total_product1_cost = 0;
  var total_product2_cost = 0;
  if(product1){
    total_product1_cost = 49.99 * parseInt(quantity);
    result += "Fire Emblem IF: Black Night Kingdom" + " x" + product1_quantity + "\n" + "Cost: " + total_product1_cost.toString();
  }
  if(product2){
    total_product2_cost = 39.99 * parseInt(quantity);
    result += "Fire Emblem IF: White Night Kingdom" + " x" + product2_quantity + "\n" + "Cost: " + total_product2_cost.toString();
  }
  result += "Total Cost: " + (total_product1_cost + total_product2_cost).toString();
  if(validateForm(first_name, last_name, email, credit_card, cvc)){
    alert(result);
  }

}
