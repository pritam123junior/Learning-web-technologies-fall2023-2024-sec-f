function bloodGroupValidation()
{
    let selectedBloodGroup = document.getElementsByName('bloodGroup').value;

    if (selectedBloodGroup == '') {
        alert('Please select a blood group');
        return;
    }

    alert('Validation successful!');
}
