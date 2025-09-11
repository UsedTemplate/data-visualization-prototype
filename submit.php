<?php
$db = new SQLite3('data.db');

$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    age INTEGER,
    height INTEGER,
    weight INTEGER,
    gender TEXT,
    depression INTEGER,
    burnout INTEGER,
    alcohol_intake INTEGER
)");

$stmt = $db->prepare("INSERT INTO users (age, height, weight, gender, depression, burnout, alcohol_intake)
                      VALUES (:age, :height, :weight, :gender, :depression, :burnout, :alcohol)");

$stmt->bindValue(':age', (int)$_POST['Leeftijd'], SQLITE3_INTEGER);
$stmt->bindValue(':height', (int)$_POST['Lengte'], SQLITE3_INTEGER);
$stmt->bindValue(':weight', (int)$_POST['Gewicht'], SQLITE3_INTEGER);
$stmt->bindValue(':gender', $_POST['Gender'], SQLITE3_TEXT);
$stmt->bindValue(':depression', (int)$_POST['Depressief'], SQLITE3_INTEGER);
$stmt->bindValue(':burnout', (int)$_POST['Burnout'], SQLITE3_INTEGER);
$stmt->bindValue(':alcohol', (int)$_POST['Alcohol'], SQLITE3_INTEGER);

$stmt->execute();

header("Location: index.php");
exit;
?>
