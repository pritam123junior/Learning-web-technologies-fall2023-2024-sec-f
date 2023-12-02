function search(){
   
    let username = document.getElementById('username').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'view/searchusers.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
       
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhttp.send('uname='+username);
}