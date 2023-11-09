function genderValidation()
{
    let genderOptions = document.getElementsByName('gender');
    
    let isAnySelected = Array.from(genderOptions).some(option => option.checked);

    if (!isAnySelected) {
        alert('Please select a gender');
        return;
    }

    alert('Validation successful!');
}
