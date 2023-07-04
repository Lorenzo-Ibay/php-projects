<?php
header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Origin: <insert URL here>');
require_once('./database/database.php');
$tableName = 'entries';
$path = "./database.db";
//Table Creation. Run only Once
// createTable('./database.db' , "
//     $tableName( id integer primary key , entry);
// ");
// insertIntoDB(
//     $path,
//     '
// INSERT INTO ' . $tableName . '(entry) VALUES("' . $entry . '");'
// );

$rows = selectFromDB($path, "SELECT * FROM $tableName");
$entries= [];
if (count($rows)>0){
    foreach($rows as $row => $value){
        array_push($entries, $value);
    }
    echo json_encode($entries);
}