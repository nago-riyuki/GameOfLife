<?php
try {
    $PDOConnectionDatabase = new PDO(
        "mysql:host=localhost;dbname=Cour4",
        "root",
        ""
    );
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}