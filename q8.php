<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="php_section1";
$conn=new mysqli($servername,$username,$pass,$dbname);
if(!$conn){
    echo "connectioin failed!";
}

