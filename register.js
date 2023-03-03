function validateForm(){
  //validation for fisrt name
let firstName = document.getElementById("first-name").value;
let firstNameError = document.getElementById("first-name-error");

if (firstName === "") {
  firstNameError.textContent = "First name is required.";
  return false;
} else if (!/^[A-Za-z]+([\s]?[A-Za-z]+)*$/.test(firstName)) {
  firstNameError.textContent = "First name should only contain alphabetic characters.";
  return false;
} else {
  firstNameError.textContent = "";
}

//validation for middle name
let middleName = document.getElementById("middle-name").value;
let middleNameError = document.getElementById("middle-name-error");

if (middleName === "") {
  middleNameError.textContent = "middle name is required.";
  return false;
}
 else if (!/^[A-Za-z]+([\s]?[A-Za-z]+)*$/.test(middleName)) {
  middleNameError.textContent = "Middle name should only contain alphabetic characters.";
  return false;
} 
else {
  middleNameError.textContent = "";
}

//last name validation
let lastName = document.getElementById("last-name").value;
let lastNameError = document.getElementById("last-name-error");

if (lastName === "") {
  lastNameError.textContent = "Last name is required.";
  return false;
} else if (!/^[A-Za-z]+([\s]?[A-Za-z]+)*$/.test(lastName)) {
  lastNameError.textContent = "Last name should only contain alphabetic characters.";
  return false;
} else {
  lastNameError.textContent = "";
}

//nationality validation
const nationalitySelect = document.getElementById("nationality");
const nationalityError = document.getElementById("nationality-error");

if (nationalitySelect.value === "") {
  nationalityError.textContent = "Please select a country name.";
  nationalitySelect.classList.add("invalid");
  return false;
} else {
  nationalityError.textContent = "";
  nationalitySelect.classList.remove("invalid");

}


//address validation
let address = document.getElementById("address").value;
let addressError = document.getElementById("address-error");
if (address === "") {
  addressError.textContent = " address is required.";
  return false;
} else if (!/^[A-Za-z]+([\s]?[A-Za-z]+)*$/.test(address)) {
  addressError.textContent = "Address should only contain alphabetic characters.";
  return false;
}
else {
  addressError.textContent = "";
}


  //emailaddress validation
  let email = document.getElementById("email").value;
  let emailError = document.getElementById("email-error");
  if (email === "") {
    emailError.textContent = "Email address is required.";
    return false;
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    emailError.textContent = "Please enter a valid email address (e.g. dipendra@gmail.com).";
    return false;
  } else {
    emailError.textContent = "";
  }
  
//validate password

let password = document.getElementById("password").value;
let passwordError= document.getElementById("password-error");
if (password===""){
  passwordError.textContent = "password is required.";
  return false;
}
else if(password.length<8){
  passwordError.textContent = "password length is too short";
}
else{
  passwordError.textContent = "";
}

  
//validate confirm password
let confirmPassword= document.getElementById("confirm-password").value;
let confirmPasswordError = document.getElementById("password-confirm-error");
if (confirmPassword === "") {
  confirmPasswordError.textContent = " confirm your password.";
  return false;
} else if (confirmPassword !== password) {
  confirmPasswordError.textContent = "Password does not matched.";
  return false;
}
else {
  confirmPasswordError.textContent = "";
}

//gender validation
const genderInputs = document.getElementsByName("gender");
const genderError = document.getElementById("gender-error");
  let isChecked = false;
  for (let i = 0; i < genderInputs.length; i++) {
    if (genderInputs[i].checked) {
      isChecked = true;
      break;
    }
  }
  if (!isChecked) {
    genderError.innerHTML = "Please select a gender.";
    return false;
  } else {
    genderError.innerHTML = "";
  }

//validate profession
const professionSelect = document.getElementById("profession");
const professionError = document.getElementById("profession-error");

if (professionSelect.value === "") {
  professionError.textContent = "Please select a profession.";
  professionSelect.classList.add("invalid");
  return false;
} else {
  professionError.textContent = "";
  professionSelect.classList.remove("invalid");

}
 return true; 
}
