<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Example: Simple static credentials (replace with database check)
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
       /* Body styling */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #1e3a8a, #3b82f6);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Login box */
.login-box {
    background-color: #ffffff;
    padding: 40px 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(30, 58, 138, 0.3);
    width: 300px;
    text-align: center;
}

.login-box h2 {
    margin-bottom: 25px;
    color: #1e3a8a;
}

/* Input fields */
.login-box input[type="text"],
.login-box input[type="password"] {
    width: 100%;
    padding: 12px 10px;
    margin: 10px 0;
    border: 1px solid #93c5fd;
    border-radius: 5px;
    font-size: 14px;
}

/* Submit button */
.login-box input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #2563eb;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-box input[type="submit"]:hover {
    background-color: #1e40af;
}

/* Error message */
.error {
    background-color: #fee2e2;
    color: #b91c1c;
    padding: 10px;
    border-left: 5px solid #dc2626;
    margin-bottom: 15px;
    border-radius: 5px;
}

    </style>
</head>
<body>
    <div class="login-box">
        <h2>Admin Login</h2>
        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="submit" value="Login" />
        </form>
    </div>
</body>
</html>
