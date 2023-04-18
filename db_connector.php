<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "blog_db";

$connect = mysqli_connect($hostname, $username, $password, $database);
if ($connect) {
    echo "connected";
} else {
    echo "Not connected";
}
$query = "SELECT * from blogs";

// //Fetch Info
$fetch_details_result = mysqli_query($connect, $query);
$allUsers_fetch_result = mysqli_query($connect, "SELECT * FROM users");
$allBlogs_fetch_result = mysqli_query($connect, "SELECT * FROM users");
$allUsers = mysqli_fetch_all($allUsers_fetch_result, MYSQLI_ASSOC);
$blogs = mysqli_fetch_all($allBlogs_fetch_result, MYSQLI_ASSOC);
// print_r($allUsers[2]);

// $blogs = mysqli_fetch_all($fetch_details_result, MYSQLI_ASSOC);
// print_r($blogs);




?>
