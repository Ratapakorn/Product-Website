<?php
// File: login.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Input validation
    if (empty($username) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    // Load the user data
    $filePath = 'D:\xampp\htdocs\WebTechnologiesPractical\private\data.json';
    if (!file_exists($filePath)) {
        echo json_encode(['status' => 'error', 'message' => 'No users found.']);
        exit;
    }
    $users = json_decode(file_get_contents($filePath), true);

    // Check credentials
    foreach ($users as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            echo json_encode(['status' => 'success', 'message' => 'Login successful.']);
            exit;
        }
    }

    echo json_encode(['status' => 'error', 'message' => 'Invalid username or password.']);
}
?>
