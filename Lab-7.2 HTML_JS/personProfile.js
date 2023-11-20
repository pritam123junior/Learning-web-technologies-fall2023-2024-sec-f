function validateForm()
{
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let genderOptions = document.getElementsByName('gender');
    let dobDay = parseInt(document.getElementsByName('day')[0].value);
    let dobMonth = parseInt(document.getElementsByName('month')[0].value);
    let dobYear = parseInt(document.getElementsByName('year')[0].value);
    let bloodGroup = document.getElementsByName('bloodGroup')[0].value;
    let degreeOptions = document.getElementsByName('degree');
    let photo = document.getElementsByName('photo')[0].value;

    if (name === '')
    {
        alert('Please enter a name');
        return false;
    }

    if (email === '')
    {
        alert('Please enter an email');
        return false;
    }

    let isGenderSelected = Array.from(genderOptions).some(option => option.checked);
    if (!isGenderSelected)
    {
        alert('Please select a gender');
        return false;
    }

    if (isNaN(dobDay) || isNaN(dobMonth) || isNaN(dobYear) || dobDay <= 0 || dobMonth <= 0 || dobYear <= 0)
    {
        alert('Please enter a valid date of birth (dd/mm/yyyy)');
        return false;
    }

    if (bloodGroup === '')
    {
        alert('Please select a blood group');
        return false;
    }

    let isDegreeSelected = Array.from(degreeOptions).some(option => option.checked);
    if (!isDegreeSelected)
    {
        alert('Please select at least one degree');
        return false;
    }

    if (photo === '')
    {
        alert('Please upload a photo');
        return false;
    }

    alert('Form validated successfully!');
    return true;
}
