<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $emp_name = $_POST["emp_name"];
    $cont_no = $_POST["cont_no"];
    $emp_uname = $_POST["emp_uname"];
    $emp_pass = $_POST["emp_pass"];

   
    if (empty($emp_name) || empty($cont_no) || empty($emp_uname) || empty($emp_pass)) {
        echo "All fields are required";
    } else {
       
        $conn = new mysqli("your_db_host", "your_db_username", "your_db_password", "your_db_name");

    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

     
        $sql = "INSERT INTO employers (emp_name, cont_no, emp_uname, emp_pass) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $emp_name, $cont_no, $emp_uname, $emp_pass);
        
        if ($stmt->execute()) {
            echo "Registration successful";
        } else {
            echo "Error: " . $stmt->error;
        }

        
        $stmt->close();
        $conn->close();
    }
}


<script>
function updateValidation() 
{
    let empname = document.getElementById("emp_name").value;
    let emp_cno = document.getElementById("cont_no").value;
    let empuname = document.getElementById("emp_uname").value;
    let emppass = document.getElementById("emp_pass").value;

    
    if (empname === "") 
    {
        alert("Employer Name cannot be empty.");
        return false;
    }

   
    if (emp_cno === "") 
    {
        alert("Contact no cannot be empty.");
        return 
    }

   
    if (empuname === "") 
    {
        alert("Please enter a username."); 
    } 
    else if (empuname.length > 8) 
    {
       alert("Username maximum 8 characters.");
    }

    
    if (emppass === "") 
    {
       alert("Password fields must be filled.");  
    }


}
</script>
?>
