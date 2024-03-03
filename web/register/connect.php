<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is on a different server
$username = "root"; // Change this if you have a different username
$password = ""; // Change this if you have set a password for your database
$database = "register"; // Change this to your actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $Age = $_POST['Age'];
    $regn = $_POST['regNumber'];
    $contact = $_POST['contact'];
    $Email = $_POST['Email'];
    $gender = $_POST['gender'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $address = $_POST['address'];
    $Degree = $_POST['Degree'];
    $Department = $_POST['Department'];
    $year = $_POST['year'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (firstname, lastname, Birth, regNumber, contact, Email, gender, password, address, Degree, Department, Year) 
    VALUES ('$firstname', '$lastname', '$Age', '$regn', '$contact', '$Email', '$gender', '$password', '$address', '$Degree', '$Department', '$year')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: registered.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
