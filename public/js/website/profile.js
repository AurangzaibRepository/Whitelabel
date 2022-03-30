var isValid;

function validateForm() {
    
    isValid = true;
    $('.spn-error').css('display', 'none');

    validateField('first_name', 'error-fname');
    validateField('last_name', 'error-lname');
    validateField('email', 'error-email');

    return isValid;
}

function validateField(elementID, errorID) {

    if ($(`#${elementID}`).val().trim() === '') {

        isValid = false;
        $(`#${errorID}`).css('display', 'block');
    }
}

function confirmDelete() {

    let message = "Are you sure you want to delete your account?";

    if (confirm(message) === true) {
        
        window.location = '/home/delete';
    } 
}