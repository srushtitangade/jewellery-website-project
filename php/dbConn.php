<?php

$db = mysqli_connect("localhost","root","","jewellers");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>