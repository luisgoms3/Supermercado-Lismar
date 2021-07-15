<?php
// Create connection
$mysqli = mysqli_connect("localhost", "root", "", "supermercadolismar");

if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
}
?>