const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const rpassword = document.getElementById('rpassword');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
})

function checkInputs() {
    // get the values from the inputs
    const usernameValue = username.value.trim(); 
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const rpasswordValue = rpassword.value.trim();

    if(usernameValue === '') {
        //show error
        //add error
        setErrorFor(username, 'Username cannot be blank');
    } else {
        //add success class
        setSuccessFor(username);
    }

    function setErrorFor(input, message) {
        const formControl = input.parentElement; // .form-control
        const small = formControl.querySelector('small');
    }

    //add error message inside small
    small.innerText = message;

    //add error class
    formControl.className = 'form-control error';
}