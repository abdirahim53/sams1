<?php

$conn = mysqli_connect("localhost", "root", "", "sams");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>