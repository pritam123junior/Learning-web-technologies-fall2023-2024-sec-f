function dobValidation()
{
    let dayInput = document.querySelector('input[name="day"]').value;
    let monthInput = document.querySelector('input[name="month"]').value;
    let yearInput = document.querySelector('input[name="year"]').value;

    if (dayInput == '' || monthInput == '' || yearInput == '')
    {
        alert('Date of Birth cannot be empty');
        return;
    }

    if (dayInput < 0 || dayInput > 31 || monthInput < 1 || monthInput > 12 || yearInput < 1900 || yearInput > 2016)
    {
        alert('Please enter a valid Date of Birth (dd: 0-31, mm: 1-12, yyyy: 1900-2016)');
        return;
    }
    
    alert('Validation successful!');
}
