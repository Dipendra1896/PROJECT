
function validateForm(){//emailaddress validation
  let email = document.getElementById("email").value;
  let emailError = document.getElementById("email-error");
  if (email === "") {
    emailError.textContent = "Email address is required.";
    return false;
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    emailError.textContent = "Please enter a valid email address.";
    return false;
  } else {
    emailError.textContent = "";
  }

  
let password = document.getElementById("password").value;
let passwordError= document.getElementById("password-error");
if (password===""){
  passwordError.textContent = "password is required.";
  return false;
}
else{
  passwordError.textContent = "";
}
}