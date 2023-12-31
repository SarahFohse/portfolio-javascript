/////// form validation

const form = document.getElementById('form-content');
const firstName = document.getElementById('firstname');
const lastName = document.getElementById('lastname');
const email = document.getElementById('email');

// document.getElementById("submit").addEventListener("click", function(event){
//   validateInputs();
//   allSubmitted();
// });

$( "#form" ).on( "submit", function( event ) {
  validateInputs();
  allSubmitted();

  if (validationPass == 3) {
    validationPass = 0;
    return true;
  } else {
    successful.classList.add('success-hide');
    validationPass = 0;
    return false;
  }
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidName = firstName => {
  const reg = /^[A-Za-z\s\-]+$/;
  return reg.test(String(firstName).toLowerCase());
}
const isValidName2 = lastName => {
  const reg = /^[A-Za-z\s\-]+$/;
  return reg.test(String(lastName).toLowerCase());
}

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();
    const emailValue = email.value.trim();

    if(firstNameValue === '') {
        setError(firstName, 'First Name is required');
    } else if (!isValidName(firstNameValue)) {
      setError(firstName, 'Provide a valid name');
    } else {
        setSuccess(firstName);
    }


    if(lastNameValue === '') {
      setError(lastName, 'Last Name is required');
    } else if (!isValidName2(lastNameValue)) {
      setError(lastName, 'Provide a valid name');
    } else {
      setSuccess(lastName);
    }


    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }
};


const successful = document.getElementById('form-success');
const submitted = document.querySelectorAll('.input-control');
let validationPass = 0;

const allSubmitted = (e) => {
  for (let i = 0; i < submitted.length; i++) {
    if(submitted[i].classList.contains('success')) {
      validationPass++;
    }
  }

  return validationPass;
}

if (window.location.href.indexOf('?submitted') > -1) {
  successful.classList.remove('success-hide');
}