<?php
include_once "db.php";

$table = $_POST['table'];
$db = ${ucfirst($table)};
unset($_POST['table']);
$db->save($_POST);

to("../backend.php?do=$table");

?>