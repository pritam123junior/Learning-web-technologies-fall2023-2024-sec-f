function degreeValidation()
{
    let degreeCheckboxes = document.getElementsByName('degree');

    let isAnySelected = Array.from(degreeCheckboxes).some(checkbox => checkbox.checked);

    if (!isAnySelected) {
        alert('Please select at least one degree');
        return;
    }

    alert('Validation successful!');
}
