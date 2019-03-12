<?php
	header('Access-Control-Allow-Origin:*');
    global $conn;//to node
	$conn = mysqli_connect("127.0.0.1","root","root","jianshu",3306);
	$sql = "set names utf8";
    mysqli_query($conn,$sql);
    // var_dump(mysqli_query($conn,$sql));
?>