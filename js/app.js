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

    fetch("http://localhost/NAVIGI-FINAL/php/signin.php", {
        method: "POST",
        body: formData,
    })
    .then(response => {
        if (response.status === 200) {
            console.log(response);
            // Password is correct, you can handle the redirection here
            window.location.href = "http://localhost/NAVIGI-FINAL/index.php"; // Redirect to a success page
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
    var usernameNotValidElement = document.getElementById("usernameNotValid");
    var emailNotValidElement1 = document.getElementById("emailNotValid1");
    var passwordLengthElement1 = document.getElementById("passwordLength1");

    // Simple validation - Check if fields are empty
    if (email.value.trim() === "" || password.value.trim() === "" || username.value.trim() === "") {
        emptyfield1.style.display = "block";
        return false;
    } else {
        emptyfield1.style.display = "none";
    }

    // Username validation with a regex pattern
    const usernameRegex = /^[a-zA-Z0-9_]{3,50}$/;
    if (!usernameRegex.test(username.value.trim())) {
        usernameNotValidElement.style.display = "block";
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
        emailNotValidElement1.style.display = "block";
        // Password length validation
    if (password.value.trim().length < 8) {
        passwordLengthElement1.style.display = "block";
        return false; // Prevent form submission
    } else {
        passwordLengthElement1.style.display = "none";
    }
        return false; // Prevent form submission
    } else {
        emailNotValidElement1.style.display = "none";
    }
        return false; // Prevent form submission
    } else {
        usernameNotValidElement.style.display = "none";
    }

    // Validation for email format using a regular expression
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
        emailNotValidElement1.style.display = "block";
        // Password length validation
    if (password.value.trim().length < 8) {
        passwordLengthElement1.style.display = "block";
        return false; // Prevent form submission
    } else {
        passwordLengthElement1.style.display = "none";
    }
        return false; // Prevent form submission
    } else {
        emailNotValidElement1.style.display = "none";
    }

    // Password length validation
    if (password.value.trim().length < 8) {
        passwordLengthElement1.style.display = "block";
        return false; // Prevent form submission
    } else {
        passwordLengthElement1.style.display = "none";
    }

    //If all validations pass, allow form submission
    return true;
}

function validatesigninForm(event) {
    event.preventDefault(); // Prevent the form from submitting by default

    // Fetching form elements by their IDs
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    var emptyfield = document.getElementById("emptyfield");

    // Simple validation - Check if fields are empty
    if ( email.value == "" || password.value == "") {
        emptyfield.style.display = "block";
        return false;
    }
    else {
         emptyfield.style.display = "none";
    }

    // Validation for email format using a regular expression
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value)) {
        emailnotvalid();
        if (password.length < 8) {
            showPasswordLength();
            return false; // Prevent form submission
        }
        else {
            var passwordLengthElement = document.getElementById("passwordLength");
        passwordLengthElement.style.display = "none";
        }
        return false; // Prevent form submission
    }
    else {
        var emailNotValidElement = document.getElementById("emailNotValid");
        emailNotValidElement.style.display = "none" ;
    }

    // Password length validation
    if (password.value.length < 8) {
        showPasswordLength();
        return false; // Prevent form submission
    }
    else {
        var passwordLengthElement = document.getElementById("passwordLength");
    passwordLengthElement.style.display = "none";

    }
    
    return true; // Allow form submission
}