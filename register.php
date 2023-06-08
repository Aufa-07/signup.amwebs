<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform validation on the form data as needed

    // Connect to the database
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute an SQL statement to insert the user data into a table
    $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful
        echo "Registration successful!";
    } else {
        // Error in registration
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
