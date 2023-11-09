function emailValidation()
{
    let emailInput = document.getElementById('email').value;

    if (emailInput == '') {
        alert('Email cannot be empty');
        return;
    }

    let atIndex = emailInput.indexOf('@');
    let dotIndex = emailInput.lastIndexOf('.');

    if (atIndex == -1 || dotIndex == -1 || dotIndex <= atIndex) {
        alert('Please enter a valid email address (e.g., anything@example.com)');
        return;
    }

    alert('Validation successful!');
}
