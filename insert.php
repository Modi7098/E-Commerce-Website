<?php 
session_start();

	include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
    $id = random_num(20);
    $user_id=$user_data['id'];
    $productName=$_POST['productName'];
    $price=$_POST['price'];
    preg_match('{(\d+\.\d+)}', $price, $m);
    $price=$m[0];
    // $price = preg_replace('/[^0-9.]/','',$price);
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
    $query="INSERT INTO product (id, Product_Name, price , user_id) VALUES ('$id', '$productName', '$price', '$user_id')";
    mysqli_query($con, $query);
    }
?>