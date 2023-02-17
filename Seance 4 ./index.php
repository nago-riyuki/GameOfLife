<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
</head>
<body>
    <h1>User page</h1>
   
<?php
 if(isset($_GET['logout']) && $_GET['logout']==true){
    session_unset();
    header("location:login.php");
}
if($_SESSION['username'] !== ""){
    $user = $_SESSION['username'];
    echo "Congrats $user, you're connected";
}
?>
<br>
<a href='home.php?deconnexion=true'><span>Logout</span></a>
</body>
</html>