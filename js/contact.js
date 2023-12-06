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
if (Phone.value == '') {
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