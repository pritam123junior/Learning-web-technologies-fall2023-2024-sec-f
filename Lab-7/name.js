function nameValidation()
{
    let nameInput = document.getElementById('name').value;

    if (nameInput == '')
    {
        alert('Name cannot be empty');
        return;
    }

    let words = nameInput.split(' ');
    if (words.length < 2) {
        alert('Name must contain at least two words');
        return;
    }

    for (let i = 0; i < nameInput.length; i++) {
        let currentChar = nameInput.charAt(i);

        if (!(isLetter(currentChar) || currentChar === '.' || currentChar === '-')) {
            alert('Name can only contain letters (a-z, A-Z), dot (.), or dash (-)');
            return;
        }
    }

    let firstChar = nameInput.charAt(0);
    if (!(firstChar >= 'a' && firstChar <= 'z' || firstChar >= 'A' && firstChar <= 'Z'))
    {
        alert('Name must start with a letter');
        return;
    }

    alert('Validation successful!');
}

function isLetter(char)
{
    return (char >= 'a' && char <= 'z') || (char >= 'A' && char <= 'Z');
}
