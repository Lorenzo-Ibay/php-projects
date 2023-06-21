<?php
header('Access-Control-ALlow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

require_once('./database/database.php');
$tableName = 'entries';
$path = './database.db';

if ($_POST['id']) {
    $id = intval($_POST['id']);
    deleteFromDB($path, '
    DELETE FROM ' . $tableName . ' WHERE id = ' . $id . ';
    ');
}