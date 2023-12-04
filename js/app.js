const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container1");

sign_up_btn.addEventListener('click', () =>{
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click', () =>{
    container.classList.remove("sign-up-mode");
});
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission for now

    var formData = new FormData(this);

    fetch("../php/login.php", {
        method: "POST",
        body: formData,
    })
    .then(response => {
        if (response.status === 200) {
            // Password is correct, you can handle the redirection here
            window.location.href = "../index.html"; // Redirect to a success page
        } else if (response.status === 403) {
            showPasswordError();
        }
    })
    .catch(error => {
        console.error(error);
    });
});

function showPasswordError() {
    var passwordErrorElement = document.getElementById("passwordError");
    passwordErrorElement.style.display = "block";
}
function showPasswordLength() {
    var passwordLengthElement = document.getElementById("passwordLength");
    passwordLengthElement.style.display = "block";
}
function emailnotvalid () {
    var emailNotValidElement = document.getElementById("emailNotValid");
    emailNotValidElement.style.display = "block"
}
function validatesignupForm(event) {
    event.preventDefault(); // Prevent the form from submitting by default

    // Fetching form elements by their IDs
    const username = document.getElementById('username');
    const email = document.getElementById('email1');
    const password = document.getElementById('password1');
    var emptyfield1 = document.getElementById("emptyfield1");


    // Simple validation - Check if fields are empty
    if ( email.value == "" || password.value == "" || username.value == "") {
        emptyfield1.style.display = "block";
        return false;
    }
    else { 
        emptyfield1.style.display = "none";
        console.log("ggg");
    }

    const usernameRegex = /^[a-zA-Z0-9_]{3,50}$/;

    if (usernameRegex.test(username)) {
        var usernameNotValidElement = document.getElementById("usernameNotValid");
        usernameNotValidElement.style.display = "none";
    } else {
        var usernameNotValidElement = document.getElementById("usernameNotValid");
        usernameNotValidElement.style.display = "block";
        return false; // Prevent form submission
    }

    // Validation for email format using a regular expression
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        emailnotvalid();
        return false; // Prevent form submission
    }
    else {
        var emailNotValidElement = document.getElementById("emailNotValid");
        emailNotValidElement.style.display = "none" ;
    }

    // Password length validation
    if (password.length < 8) {
        showPasswordLength();
        return false; // Prevent form submission
    }
    else {
   
    }
    return true; // Allow form submission
}
function validatesigninForm(event) {
    event.preventDefault(); // Prevent the form from submitting by default

    // Fetching form elements by their IDs
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    var emptyfield = document.getElementById("emptyfield");

    // Simple validation - Check if fields are empty
    if ( email == "" || password == "") {
        emptyfield.style.display = "block";
        return false;
    }
    else {
         emptyfield.style.display = "none";
    }

    // Validation for email format using a regular expression
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        emailnotvalid();
        return false; // Prevent form submission
    }
    else {
        var emailNotValidElement = document.getElementById("emailNotValid");
        emailNotValidElement.style.display = "none" ;
    }

    // Password length validation
    if (password.length < 8) {
        showPasswordLength();
        return false; // Prevent form submission
    }
    else {
        var passwordLengthElement = document.getElementById("passwordLength");
    passwordLengthElement.style.display = "none";
    }
    return true; // Allow form submission
}