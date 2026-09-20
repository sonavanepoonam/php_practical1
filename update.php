<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
Employee name:
<input type="text" name="name">
<br>

Salary:
<input type="number" name="salary">
<br>
<button type="Submit">Submit</button>


</form>
</body>
</html>
<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
   
    $Salary=$_POST["salary"];
    $sql =$conn->prepare("update employee set salary=? where emp_name=?");
    $sql->bind_param("ds",$Salary,$name);
    if($sql->execute()){
        echo "updated successfully";
    }else{
        echo "not updated";
    }}
    ?>