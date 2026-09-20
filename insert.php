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
Email:
<input type="text" name="email">
<br>
Phone_no:
<input type="number" name="phone">
<br>
department:
<input type="text" name ="dept">
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
    $email=$_POST["email"];
    $phone_no=$_POST["phone"];
    $dept=$_POST["dept"];
    $Salary=$_POST["salary"];
    $sql =$conn->prepare("insert into employee values(?,?,?,?,?)");
    $sql->bind_param("ssisd",$name,$email,$phone_no,$dept,$Salary);
    if($sql->execute()){
        echo "inserted successfully";
    }else{
        echo "not inserted";
    }}
    ?>