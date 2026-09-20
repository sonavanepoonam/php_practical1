<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>



<form method="POST">

    Name:
    <input type="text" name="name"><br><br>

    Age:
    <input type="number" name="age"><br><br>

    Gender:
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>

    <input type="submit" value="Submit">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    echo "Hello, $name. You are $age years old and identify as $gender.";
}

?>

</body>
</html>