<?php

require_once "../connect_db.php";

$id = $_GET["id"];

$query = "DELETE FROM balance WHERE self_id = '{$id}'";
$result = $db_connection->query($query);

echo json_encode($result);
