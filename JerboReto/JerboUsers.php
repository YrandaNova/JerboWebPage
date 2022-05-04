//codigo para poder hacer el metodo post de los usuarios registrados
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="jerbo";


$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$FechaInicio= date("Y-m-d H:i:s");

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn-> connect_error){
    die ("connection failed: ". $conn->connect_error);
}

$usernamecheckquery = "  SELECT username FROM registerusers WHERE username = '".$usuario."' ; " ; 
$usernamecheck =mysqli_query($con, $usernamecheckquery) or die ();



$result= $conn->query($sql);

if (mysqli_num_rows($usernamecheck) !=1){
    echo "Username  already taken.";
    exit();

}
else{
    echo "Creating user...";
    $sql="INSERT INTO registerusers(username, password ,fecha ) VALUES ('".$usuario."', '".$contraseña."', '".$FechaInicio."')";
    
    
    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
      }
      
}
$conn->close();

?>