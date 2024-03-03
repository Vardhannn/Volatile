<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials against the database
$sql = "SELECT * FROM regNumber WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Display retrieved data in a form
    echo '<form>';
    echo '<label for="username">Username:</label>';
    echo '<input type="text" id="username" name="username" value="' . $row['username'] . '" disabled>';

    echo '<label for="email">Email:</label>';
    echo '<input type="text" id="email" name="email" value="' . $row['email'] . '" disabled>';
    // Add more fields as needed

    echo '</form>';
} else {
    // Invalid credentials
    echo "Login failed. Please check your username and password.";
}

$stmt->close();
$conn->close();
?>
