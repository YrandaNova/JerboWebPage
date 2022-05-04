<?php

$servername="localhost";
$username="root";
$password="";
$dbname="jerbo";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn-> connect_error){
    die ("connection failed: ". $conn->connect_error);
}


$query=sprintf("SELECT * from infousuarios");

$result= $conn->query($query);

$data=array();
foreach ($result as $row){
    $data[]=$row;
}
$result->close();
print json_encode($data);



?>