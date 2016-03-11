<?php

require_once('config.php');
require_once('function.php');

$id = $_GET['id'];

$dbh = connectDb();
$sql_delete = "delete from posts where id = :id";
$stmt_delete = $dbh->prepare($sql_delete);
$stmt_delete->bindParam(":id", $id);
$stmt_delete->execute();//削除実行

header('Location: index.php');
exit;