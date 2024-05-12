<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validation
    $errors = [];
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    if (empty($password)) {
        $errors[] = 'Password is required';
    }
    if ($password !== $confirmPassword) {
        $errors[] = 'Passwords do not match';
    }

    // If there are no errors, proceed with registration
    if (empty($errors)) {
        // Here you can write code to store user information in the database
        // For example:
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
        // Execute SQL query
        // Redirect user to success page or login page
        header('Location: success.php');
        exit;
    }
}
