<?php
header('Content-Type: application/json');

$db = new SQLite3('data.db');
$results = $db->query('SELECT * FROM users');

$users = [];
while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    $users[] = $row;
}

echo json_encode($users);
?>