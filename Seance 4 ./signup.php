<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form method="post" action="addId.php">
        <h1>Register</h1>
        
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter your username" name="username" required>
        <br>
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Submit your password" name="password" required>
        <br>
        <input type="submit" value="Inscription">
        <a href="login.php">Login</a>
    </form>
</body>
</html>