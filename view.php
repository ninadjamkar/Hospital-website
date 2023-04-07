<?php
// Establishing a connection to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "wp_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Checking the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Executing the SELECT query
$sql = "SELECT * FROM patients";
$result = mysqli_query($conn, $sql);

// Checking if there are any results
if (mysqli_num_rows($result) > 0) {
    // Outputting the data in a table format
    echo "<table>";
    echo "</th><th>NAME</th><th>MESSAGE</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "</td><td>" . $row["name"] . $row["message"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Closing the connection
mysqli_close($conn);
?>
