function validateForm()
{
    var Bookid = document.getElementById('Bookid').value;
    var BookName = document.getElementById('Bookname').value;
    var Author= document.getElementById('Author').value;
    var Genre = document.getElementById('Genre').value;
    var Quantity = document.getElementById('Quantity').value;
  
    if (Bookid.length < 5)
    {
        alert("Bookid must be at least 5 characters long!");
        return false;
    }


    if (Bookid=== "" || BookName === "" || Author === "" || Genre === "" || Quantity === "")
    {
        alert("Null Bookid or Bookname or Author or Genre or Ouantity!");
        return false;
    }

    return true;
}