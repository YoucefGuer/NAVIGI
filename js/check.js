function validateForm() {
    
    let isValid = true;
    // Reset error messages
    document.getElementById('FirstNameError').textContent = '';
    document.getElementById('LastNameError').textContent = '';
    document.getElementById('AddressError').textContent = '';
    document.getElementById('WilayaError').textContent = '';
    document.getElementById('CityError').textContent = '';
    document.getElementById('CheckBoxError').textContent = '';
    
    // Get form inputs
    const FirstName = document.getElementById('FirstName');
    const LastName = document.getElementById('LastName');
    const Address = document.getElementById('Address');
    const Wilaya = document.getElementById('Wilaya');
    const City = document.getElementById('City');
    const CheckBox = document.getElementById('CheckBox');
  
    // Validate username
    if (FirstName.value == '') {
        document.getElementById('FirstNameError').textContent = 'First Name is required';
        isValid = false;
    }

    // Validate username
    if (LastName.value == '') {
        document.getElementById('LastNameError').textContent = 'Last Name is required';
        isValid = false;
    }
  
    // Validate Address
    if (Address.value == '') {
        document.getElementById('AddressError').textContent = 'Address is required';
        isValid= false;
    }
    // Validate Wilaya
    if (Wilaya.value == '') {
      document.getElementById('WilayaError').textContent = 'Wilaya is required';
      isValid = false;
    }
    // Validate Wilaya
    if (City.value == '') {
        document.getElementById('CityError').textContent = 'City is required';
        isValid = false;
    }

    if (!CheckBox.checked) {
        document.getElementById('CheckBoxError').textContent = 'You have to accept';
        isValid = false;
    }

    const FirstNameRegex = /^[a-zA-Z_]{3,50}$/;
    if (!FirstNameRegex.test(FirstName.value.trim())) {
        document.getElementById('FirstNameError').textContent = 'First Name is invalid';
        isValid = false;
    }
    const LastNameRegex = /^[a-zA-Z_]{3,50}$/;
    if (!LastNameRegex.test(LastName.value.trim())) {
        document.getElementById('LastNameError').textContent = 'Last Name is invalid';
        isValid = false;
    }
  
    
    return isValid;
  }