<?php

//to add info to database

//call first file first to establish connection
require "init.php";
//our database has 3 fields
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];

//for sql query

//to add
$sql_query="insert into product_info values('$name','$email','$mobile');";
//to insert
//connection variable and query
if(mysqli_query($con,$sql_query)) 
{
	echo "<br><h3>one row inserted</h3>";
}
else
{
		echo "data insertion error".mysqli_error($con); 
}
?>