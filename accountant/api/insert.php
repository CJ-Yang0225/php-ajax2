<?php

require_once "../connect_db.php";

$name = $_POST["name"];
$debit = $_POST["debit"];
$credit = $_POST["credit"];

$query = "INSERT INTO balance (`self_name`, `self_debit`, `self_credit`) VALUES ('{$name}', {$debit}, {$credit})";
$result = $db_connection->query($query);

echo json_encode($db_connection->insert_id);
