<?php

require_once "../connect_db.php";

$id = $_POST["id"];
$name = $_POST["name"];
$debit = $_POST["debit"];
$credit = $_POST["credit"];

$query = "UPDATE balance SET self_name = '{$name}', self_debit = '{$debit}', self_credit = '{$credit}' WHERE self_id = '{$id}'";

$result = $db_connection->query($query);

echo json_encode($result);
