<?php
require 'db.php';
// Check if the user is logged in and has the admin role
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] === 'admin') {
  // User is authorized, show the dashboard content
  // ...
} else {
  // User is not authorized, redirect to the login page
  header("location: login.php");
  exit;
}

// Check if the user ID was provided
if (!isset($_POST['id'])) {
  die("User ID not provided.");
}

$id = $_POST['id'];

// Delete the user from the database
$query = "DELETE FROM tb_user WHERE id = id";
$result = mysqli_query($conn, $query);

if ($result) {
  echo "User deleted successfully.";
} else {
  echo "Error deleting user: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
