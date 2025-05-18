<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter your Email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter your Password" required><br>

        <button type="submit">Login</button>
    </form>

    <br><hr><br>

    <h1>Register</h1>
    <form action="register.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter your Email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter your Password" required><br>

        <button type="submit">Register</button>
    </form>

</body>
</html>