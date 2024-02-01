function validateoffer(){
    let offer = document.getElementById('offer').value;
    let isValid = true;
    if (offer == '') {
        document.getElementById('offerError').textContent = 'Offer is required';
        isValid = false;
    }

}