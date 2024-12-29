<?php
require 'connection.php';
session_start();

$item_id = $_GET['id'];
$user_id = $_SESSION['id'];

// Fetch user details based on user_id
$user_details_query = "SELECT name, city, address, contact FROM users WHERE id = '$user_id'";
$user_details_result = mysqli_query($con, $user_details_query) or die(mysqli_error($con));

if ($user_details_row = mysqli_fetch_assoc($user_details_result)) {
    $name = mysqli_real_escape_string($con, $user_details_row['name']);
    $city = mysqli_real_escape_string($con, $user_details_row['city']);
    $address = mysqli_real_escape_string($con, $user_details_row['address']);
    $contact = mysqli_real_escape_string($con, $user_details_row['contact']);

    // Insert into users_items table
    $add_to_cart_query = "INSERT INTO users_itemss (user_id, item_id, status, name, city, address, contact) 
                         VALUES ('$user_id', '$item_id', 'Added to cart', '$name', '$city', '$address', '$contact')";
    $add_to_cart_result = mysqli_query($con, $add_to_cart_query) or die(mysqli_error($con));
    
    header('location: shop.php');
} else {
    echo "User details not found.";
}
?>
