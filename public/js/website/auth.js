var isValid;

function validateForm() {

    isValid = true;
    $('.spn-error').css('display', 'none');

    validateField('email', 'error-email');
    validateField('password', 'error-password');

    return isValid;
}

function validateRegister() {

    isValid = true;
    $('.spn-error').css('display', 'none');

    validateField('first_name', 'error-fname');
    validateField('last_name', 'error-lname');
    validateField('email', 'error-email');
    validateField('password', 'error-password');

    return isValid;
}

function validateField(elementID, errorID) {

    if ($(`#${elementID}`).val().trim() === '') {

        isValid = false;
        $(`#${errorID}`).css('display', 'block');
    }
}