<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="connect.php" method="POST">
        <h1>Connexion</h1>
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter your username" name="username" required>
        <br>
        <label><b>password</b></label>
        <input type="password" placeholder="Submit password" name="password" required>
        <br>
        <input type="submit" id='submit' value='Connexion' >
        <a href="signup.php">Register</a>
    </form>
    
</body>
</html>