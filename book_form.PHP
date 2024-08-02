<?php
// Database connection
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check if connection was successful
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Check if form was submitted
if (isset($_POST['send'])) {
    // Sanitize and validate input data
    $name = mysqli_real_escape_string($connection, trim($_POST['name']));
    $email = mysqli_real_escape_string($connection, trim($_POST['email']));
    $phone = mysqli_real_escape_string($connection, trim($_POST['phone']));
    $address = mysqli_real_escape_string($connection, trim($_POST['address']));
    $location = mysqli_real_escape_string($connection, trim($_POST['location']));
    $guests = mysqli_real_escape_string($connection, trim($_POST['guests']));
    $arrivals = mysqli_real_escape_string($connection, trim($_POST['arrivals']));
    $leaving = mysqli_real_escape_string($connection, trim($_POST['leaving']));

    // Prepare SQL query
    $query = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Initialize prepared statement
    $stmt = mysqli_prepare($connection, $query);

    // Check if statement preparation was successful
    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'ssssssss', $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

        // Execute statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect on success
            header('Location: book.php');
            exit();
        } else {
            // Handle query execution error
            echo 'Error executing query: ' . mysqli_error($connection);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        // Handle statement preparation error
        echo 'Error preparing statement: ' . mysqli_error($connection);
    }
} else {
    echo 'Form not submitted correctly.';
}

// Close database connection
mysqli_close($connection);
?>