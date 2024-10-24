<?php
$host="localhost";
$user="root";
$password="";
$db="project_1";

$con=mysqli_connect($host,$user,$password,$db);

if($con){
    echo "";
}
    else{
        echo "database connection failed";
    }

?>