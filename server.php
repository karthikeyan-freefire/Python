<?php
$HOSTNAME='localhost';
$USERNAME='mal23';
$PASSWORD='mla23';
$DATABASE='mla23';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con){
    echo "Connection Succesful";
}
else{
    die(mysqli_error($con));
}
?>