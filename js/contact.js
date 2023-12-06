function submitContactForm(){
  var isValid = true;

  document.getElementById('FullNameError').textContent = '';
  document.getElementById('EmailError').textContent = '';
  document.getElementById('PhoneError').textContent = '';
  document.getElementById('MsgError').textContent = '';


  const FullName = document.getElementById('FullName');
  const Phone = document.getElementById('Phone');
  const Email = document.getElementById('Email');
  const Msg = document.getElementById('Msg');
  
  if (FullName.value == '') {
    document.getElementById('FullNameError').textContent = 'Full Name is required';
    isValid = false;
}
if (Phone.value == '' || Phone.value.length < 10 || Phone.value.length > 10) {
  document.getElementById('PhoneError').textContent = 'Phone is required';
  isValid = false;
}
if (Msg.value == '') {
  document.getElementById('MsgError').textContent = 'Msg is required';
  isValid = false;
}
if (Email.value == '') {
  document.getElementById('EmailError').textContent = 'Email is required';
  isValid = false;
}

const FullNameRegex = /^[a-zA-Z_]{3,50}$/;
if (!FullNameRegex.test(FullName.value.trim())) {
  document.getElementById('FullNameError').textContent = 'Full Name is not correct';
  isValid = false;
    }
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if (!emailRegex.test(Email.value.trim())) {
  document.getElementById('EmailError').textContent = 'Email is not correct';
  isValid = false;
  }

  const PhoneRegex = /^[0-9_]{3,50}$/;
  if (!PhoneRegex.test(Phone.value.trim())) {
    document.getElementById('PhoneError').textContent = 'Please enter 10 digits';
    isValid = false;
  }

if (isValid==true) {
  FullName.value = '';
  Phone.value = '';
  Msg.value ='';
  Email.value ='';
  alert('Need Backend');
  isValid=false;
}
return isValid;
}