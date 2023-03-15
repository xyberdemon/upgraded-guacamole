<?php
// Database credentials
$servername = "mysql";
$username = "example-user";
$password = "my_cool_secret";
$dbname = "samplevideo_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from table
$sql = "SELECT user_id, first_name, last_name FROM user_details";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "user_id: " . $row["user_id"]. " - First Name: " . $row["first_name"]. " - Last Name: " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
