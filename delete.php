<?php
require "connect.php";
$id = $_GET['id'];
$delete = mysqli_query ($conn, "DELETE FROM mhs WHERE id=$id");
if($delete) {
    header("location: read.php");
}
?>