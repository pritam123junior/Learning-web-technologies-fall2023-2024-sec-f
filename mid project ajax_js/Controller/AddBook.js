function AddBook()
{
    let query = document.getElementById('Input').value;
    let xhttp = new XMLHttpRequest();
  
    xhttp.open('POST', 'AddbookCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    xhttp.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById('AddBookOUT').innerHTML = this.responseText;
        }
    }
  
    xhttp.send('query=' + query);
}