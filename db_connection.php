<?php
$host = 'localhost';
$port = 3306;
$dbName = 'awepproject';
$username = 'root';
<<<<<<< HEAD
$password = 'Llaman0tdrama';
=======
$password = '';
>>>>>>> e5f1ce85bb48d571036495481c32189b66ecd1bc

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit();
}
