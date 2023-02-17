<?php
session_start();
$dbh = new PDO('sqlite:database');
$password = $_POST['password'];
$username = $_POST['username']; 
echo $password;
echo $username;
$query = $dbh->prepare("SELECT count(*) FROM `connexion` where 
user = '".$username."' and password = '".$password."' ");
$query->execute();
$data = $query->fetchAll();
$count = $data[0]['count(*)'];
print_r($count);
if($count!=0) {
    $_SESSION['username'] = $username;
    header('Location: index.php');
} else {
    header('Location: login.php');
}
?>