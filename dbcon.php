
<?php
$con=mysqli_connect("localhost","root","");

$db="create database lecture";
$query=mysqli_query($con,$db);

mysqli_select_db($con,"lecture");
$tab="create table users(
id int PRIMARY KEY auto_increment,
name varchar(250),
pass varchar(250),
address varchar(250),
contact int(250),
email varchar(250) )";
$query2=mysqli_query($con,$tab);


$civil="create table civileng(
id int PRIMARY KEY auto_increment,
sem varchar(50),
subject varchar(100),
)";
$query3=mysqli_query($con,$civil);

$comp="create table computereng(
id int PRIMARY KEY auto_increment,
sem varchar(50),
subject varchar(100),
)";
$query4=mysqli_query($con,$comp);

/*
$query5=mysqli_query($con,$acc);

$bill="create table bill(
id int PRIMARY KEY auto_increment,
Name varchar(250),
Address varchar(250),
Phone varchar(250),
Item varchar(250),
Quantity varchar(250),
Price varchar(250)
)";
$query6=mysqli_query($con,$bill);*/

?>