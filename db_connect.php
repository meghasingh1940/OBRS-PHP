<?php
$conn= new mysqli('localhost','root','','obrs');

if (!$conn)
{
    error_reporting(0);
    die("Could not connect to mysql".mysqli_error($conn));
}

?>