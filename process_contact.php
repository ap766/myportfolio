<?php

$servername = "localhost";  // Replace with your MySQL server hostname
$username = "root";         // Replace with your MySQL username
$password = "KLqq]TgbdwywTNK!"; // Replace with your MySQL passwor
$dbname = "blog_1"; // Replace with your database name

// Create a connection
$conn2 = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; // Add this line for debugging

// Check if the form was submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Debugging: Output the received data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";

    // Rest of your code to insert data into the database...


    // SQL query to insert data into a table (assuming you have a 'contact' table)
    $sql = "INSERT INTO contact(name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn2->query($sql) === TRUE) {
        header("Location: success.html");
    exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn2->close();
?>
