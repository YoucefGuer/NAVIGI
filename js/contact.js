function submitContactForm(event) {
    event.preventDefault(); // Prevent form submission for now
  
    // Fetching form elements by their IDs
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const message = document.getElementById('msg');
    const emptyField = document.getElementById("emptyField");
    const usernameNotValid = document.getElementById("usernameNotValid");
    const emailNotValid = document.getElementById("emailNotValid");
    const phoneNotValid = document.getElementById("phoneNotValid");
    const messageNotValid = document.getElementById("messageNotValid");
  
    // Regular expressions for validation
    const usernameRegex = /^[a-zA-Z0-9_]{3,50}$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phoneRegex = /^\d{10}$/; // Assumes a 10-digit phone number
    const messageRegex = /^.{10,}$/; // Message should be at least 10 characters long
  
    // Simple validation - Check if fields are empty
    if (
      username.value.trim() === "" ||
      email.value.trim() === "" ||
      phone.value.trim() === "" ||
      message.value.trim() === ""
    ) {
      emptyField.style.display = "block";
      return false; // Stop form submission
    } else {
      emptyField.style.display = "none";
    }
  
    // Validate username using regex
    if (!usernameRegex.test(username.value.trim())) {
      usernameNotValid.style.display = "block";
      return false; // Stop form submission
    } else {
      usernameNotValid.style.display = "none";
    }
  
    // Validate email using regex
    if (!emailRegex.test(email.value.trim())) {
      emailNotValid.style.display = "block";
      return false; // Stop form submission
    } else {
      emailNotValid.style.display = "none";
    }
  
    // Validate phone number using regex
    if (!phoneRegex.test(phone.value.trim())) {
      phoneNotValid.style.display = "block";
      return false; // Stop form submission
    } else {
      phoneNotValid.style.display = "none";
    }
  
    // Validate message using regex
    if (!messageRegex.test(message.value.trim())) {
      messageNotValid.style.display = "block";
      return false; // Stop form submission
    } else {
      messageNotValid.style.display = "none";
    }
  
    // Show success message or perform other actions
    const successMessage = document.getElementById("successMessage");
    successMessage.style.display = "block";
  
    // Optionally, reset the form after successful submission
    document.getElementById('contactForm').reset();
  }
  
  // Event listener for form submission
  document.getElementById("contactForm").addEventListener("submit", submitContactForm);
  