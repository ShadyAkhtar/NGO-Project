<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$phone=$_POST['Phone']
$message=$_POST['Suggestions'];
$servername = "localhost";
$username = "root";
$password = "";
$db="feedback";
$conn=mysqli_connect($servername,$username,$password);
$query="create database $db";
mysqli_query($conn,$query);
$query1="use $db";
$query2="create table contact(name varchar(35),email varchar(45),message varchar(5000))";
mysqli_query($conn,$query1);
mysqli_query($conn,$query2);
$query3="insert into contact (name,email,message) values('$name','$email','$message')";
mysqli_query($conn,$query3);
echo "Thanks For Your Valuable Words";
?>