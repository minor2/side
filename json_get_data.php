
<?php
//get info from databasse as table and then encode in json
require "init.php";
$sql="select * from product_info;";


$result=mysqli_query($con,$sql);

$response=array();

while($row=mysqli_fetch_array($result))
{
	//make name value pair
	array_push($response,array("name"=>$row[0],"email"=>$row[1],"mobile"=>$row[2]));
	
}

//encode into json

echo json_encode(array("server_response"=>$response));

mysqli_close($con);

?>