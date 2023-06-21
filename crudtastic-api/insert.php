<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: *');

require_once('./database/database.php');
$tableName = 'Entries';
$path = './database.db';

if($_POST['entry']){
    $entry = $_POST['entry'];
    insertIntoDB($path,'
    INSERT INTO ' . $tableName . '(entry) VALUES("' . $entry . '");'
    );
}