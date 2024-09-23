<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: lightblue;
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            font-size: 18px;
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: darkgreen;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>
    <div class="error" id="error-message"></div>
    <form onsubmit="return validateLogin()">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter Admin Username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Admin Password" required>

        <button type="submit">Login</button>
    </form>
</div>

<script>
    // Predefined admin credentials
    const adminUsername = 'admin';
    const adminPassword = '12345';

    function validateLogin() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const errorMessage = document.getElementById('error-message');

        // Check if the username and password match the predefined values
        if (username === adminUsername && password === adminPassword) {
            // Redirect to the Admin Dashboard
            window.location.href = 'dashboard.php';
            return false; // Prevent default form submission
        } else {
            errorMessage.textContent = 'Invalid Username or Password!';
            return false; // Prevent form submission if invalid
        }
    }
</script>

</body>
</html>
