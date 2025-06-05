<?php
// Start session and include database connection (update with your DB credentials)
session_start();
$user="root";
$pass="";
$server="localhost";
$dbname="bdylli";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$errors = [];
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    // Check if username or email exists
    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT id FROM users WHERE username=? OR email=?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $errors[] = "Username or email already exists.";
        }
        $stmt->close();
    }

    // Register user
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);
        if ($stmt->execute()) {
            $success = "Registration successful! <a href='login.php'>Login here</a>.";
        } else {
            $errors[] = "Registration failed. Please try again.";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | SkillFocus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {background: #f4f6f8; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
        .container {max-width: 400px; margin: 60px auto; background: #fff; padding: 32px 28px; border-radius: 10px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);}
        h2 {text-align: center; margin-bottom: 24px; color: #22223b;}
        .form-group {margin-bottom: 18px;}
        label {display: block; margin-bottom: 6px; color: #4a4e69;}
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%; padding: 12px 10px; border: 1px solid #c9c9c9; border-radius: 6px; font-size: 1rem; background: #f8f9fa; transition: border-color 0.2s;
        }
        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            border-color: #5f6dfa; outline: none;
        }
        .btn {width: 100%; padding: 12px 0; background: linear-gradient(90deg, #5f6dfa 0%, #4a4e69 100%); color: #fff; border: none; border-radius: 6px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: background 0.2s;}
        .btn:hover {background: linear-gradient(90deg, #4a4e69 0%, #5f6dfa 100%);}
        .error {background: #ffe0e0; color: #c00; padding: 10px; border-radius: 5px; margin-bottom: 15px;}
        .success {background: #e0ffe0; color: #080; padding: 10px; border-radius: 5px; margin-bottom: 15px;}
        .login-link {text-align: center; margin-top: 18px;}
        @media (max-width: 500px) {.container {padding: 18px 8px;}}
    </style>
</head>
<body>
    <div class="container">
        <h2>Create Your Account</h2>
        <?php if ($errors): ?>
            <div class="error">
                <?php foreach ($errors as $error) echo htmlspecialchars($error) . "<br>"; ?>
            </div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>
        <form method="post" autocomplete="off">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            </div>
            <div class="form-group">
                <label for="password">Password <small>(min 6 chars)</small></label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
        <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>