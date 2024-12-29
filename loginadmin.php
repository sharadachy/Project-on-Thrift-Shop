<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: papayawhip; /* Dark blue background color */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-container {
            background-color: floralwhite;
            height: 300px; /* Blue background color with less opacity */
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(9, 9, 10, 0.1);
            width: 300px;
            text-align: center;
            opacity: 1;
            backdrop-filter: blur(10px); /* Blur effect */
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container button {
            background-color: #4CAF50; /* Button background color */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container a {
            text-decoration: none;
            color: #007BFF; /* Signup link color */
        }
        
    </style>    
</head>
<body>

    <div class="login-container">
        <h2 style="color: black;">Admin Login</h2>
        <form action="login_check.php" method="post">
            <input type="email" placeholder="Enter email address" name="email" required>
            <br>
            <input type="password" placeholder="Enter password" name="password" required>
            <br>
            <button type="submit" value="login">Login</button>
        </form>
        
    </div>

</body>
</html>