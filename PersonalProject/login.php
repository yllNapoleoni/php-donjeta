

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Personal Project</title>
    <style>
        body {
            background: #f4f6f8;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .login-container {
            background: #fff;
            max-width: 400px;
            margin: 60px auto;
            padding: 40px 32px 32px 32px;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        .login-container h1 {
            margin-bottom: 28px;
            font-size: 2rem;
            color: #22223b;
            text-align: center;
            font-weight: 600;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #4a4e69;
            font-size: 1rem;
            font-weight: 500;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 10px;
            margin-bottom: 20px;
            border: 1px solid #c9c9c9;
            border-radius: 6px;
            font-size: 1rem;
            background: #f8f9fa;
            transition: border-color 0.2s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #5f6dfa;
            outline: none;
        }
        .login-btn {
            width: 100%;
            padding: 12px 0;
            background: linear-gradient(90deg, #5f6dfa 0%, #4a4e69 100%);
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .login-btn:hover {
            background: linear-gradient(90deg, #4a4e69 0%, #5f6dfa 100%);
        }
        .success-message {
            margin-top: 18px;
            color: #2dce89;
            background: #e6fcf5;
            border: 1px solid #b7f7d8;
            border-radius: 4px;
            padding: 10px;
            text-align: center;
            font-weight: 500;
            display: none;
        }
        .register-link {
            margin-top: 24px;
            text-align: center;
        }
        .register-link a {
            color: #5f6dfa;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        .register-link a:hover {
            color: #22223b;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Sign In</h1>
        <form id="loginForm" method="POST" action="process_login.php" autocomplete="off">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required autofocus>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="login-btn">Login</button>
            <div class="success-message" id="successMessage">Login Successful!</div>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Optionally show the success message for a brief moment
            document.getElementById('successMessage').style.display = 'block';
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 1000); // Redirect after 1 second
        });
    </script>
</body>
</html>