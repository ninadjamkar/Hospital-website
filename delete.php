<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "wp_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the name from the form
$id = $_POST['id'];

// Prepare the SQL query
$sql = "DELETE FROM patients WHERE ID = '$id'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?>