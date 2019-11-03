<?php

require_once "../connect_db.php";

$query = "SELECT * FROM balance";
$result = $db_connection->query($query);

$table = [];

while ($row = $result->fetch_assoc()) array_push($table, $row);

echo json_encode($table);
