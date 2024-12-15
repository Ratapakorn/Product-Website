<?php
// Debugging and error handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ob_clean(); // Clear any output buffers
    header('Content-Type: application/json'); // Ensure JSON response

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';

    // Input validation
    if (empty($username) || empty($password) || empty($email)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // File path and directory setup
    $filePath = 'D:\xampp\htdocs\WebTechnologiesPractical\private\data.json';
    if (!file_exists('private')) {
        mkdir('private', 0777, true);
    }
    if (!file_exists($filePath)) {
        file_put_contents($filePath, json_encode([]));
    }

    // Load the existing data
    $users = json_decode(file_get_contents($filePath), true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['status' => 'error', 'message' => 'Error reading user data: ' . json_last_error_msg()]);
        exit;
    }

    // Check if the username or email is already registered
    foreach ($users as $user) {
        if ($user['username'] === $username || $user['email'] === $email) {
            echo json_encode(['status' => 'error', 'message' => 'Username or email already exists.']);
            exit;
        }
    }

    // Save the new user
    $users[] = [
        'username' => $username,
        'password' => $hashedPassword,
        'email' => $email
    ];

    // Write to file
    $result = file_put_contents($filePath, json_encode($users, JSON_PRETTY_PRINT));
    if ($result === false) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to save user data.']);
        exit;
    }

    echo json_encode(['status' => 'success', 'message' => 'Registration successful.']);
}
?>
