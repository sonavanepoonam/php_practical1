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


<button type="Submit">Submit</button>


</form>
</body>
</html>
<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
   
  
    $sql =$conn->prepare("delete from employee where emp_name=?");
    $sql->bind_param("s",$name);
    if($sql->execute()){
        echo "deleted successfully";
    }else{
        echo "not deleted";
    }}
    ?>