function profilePictureValidation()
{
    let userId = document.getElementsByName('userId')[0].value;
    let picture = document.getElementsByName('picture')[0].value;

    if (userId == '' || isNaN(userId) || parseInt(userId) <= 0)
    {
        alert('Please enter a valid User Id (positive number)');
        return;
    }

    if (picture == '') {
        alert('Please select a profile picture');
        return;
    }

    alert('Validation successful!');
}
