function AddBook()
{
    
    let Bookid = document.getElementById('id').value;
e;
  
   
    let xhttp = new XMLHttpRequest();
  
    xhttp.open('POST', './Controller/AddbookCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    xhttp.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }
    xhttp.send('id=' +Bookid);
}