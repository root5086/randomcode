<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase1");


if (!$conn)
{
    die("Connection failed".mysqli_connect_error());

}
?>