<?php  
 $connect = mysqli_connect("localhost", "root", "", "jerbo");  
 $query = "SELECT country, count(*) as number FROM infousuarios GROUP BY country";  
 $result = mysqli_query($connect, $query);  
 ?>  