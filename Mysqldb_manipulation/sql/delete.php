<?php
include('db.php');
$id=$_GET['id'];
$sql="delete from studentrecord where id='$id'";
$stmt=$con->prepare($sql);
$stmt->execute();
header('location:index.php');
die();
?>