<?php

// Replace these values with your own database information
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "booking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve input values from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database to retrieve user information for the entered username
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

// Check if the query returned a result
if (mysqli_num_rows($result) > 0) {
    // Retrieve the stored password for the user
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];

    // Compare the entered password with the stored password
    if (password_verify($password, $stored_password)) {
        // Passwords match, allow the user to log in
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        // Passwords don't match, display an error message
        echo "Invalid username or password";
    }
} else {
    // No user found with the entered username, display an error message
    echo "Invalid username or password";
}

mysqli_close($conn);
?>
