<?php
if (!class_exists('database')){
    class database extends SQLite3
    {
        function __construct($path)
        {
            $this->open($path);
        }
    }
}

//Create Table
function createTable($path, $tableData){
    $db = new database($path);
    if(!$db){
        echo 'ERROR: Database does not exist';
        exit();
    }
    $sql = "CREATE TABLE " . $tableData . ";";
    $response = $db->exec($sql);
    if ($response == false){
        echo "Table Creation Failed";
        die();
    } else {
        echo "Sql : " . $sql . "\n has been run successfully";
    }
}
// Create Entry
function insertIntoDB($path , $sql){
    $db = new database($path);
    if(!$db){
        echo 'ERROR: Database does not exist';
        exit();
    }
    $response = $db->exec($sql);
    if ($response == false){
        echo "Insert Statement Failed!";
        die();
    } else{
        echo "SQL : " . $sql . "\n has been run successfully";
    }
}
// Read Entry
function selectFromDB($path , $sql){
    $db = new database($path);
    if(!$db){
        echo 'ERROR: Database does not exist';
        exit();
    }
    $response = $db->exec($sql);
    if($response == false){
        echo "Error! Select Failed";
        die();
    }
    $data = [];
    while ($row = $response->fetchArray(SQLITE3_ASSOC))
    array_push($data, $row);
    return $data;
}
// Delete Entry
function deleteFromDB($path , $sql){
    $db = new database($path);
    if(!$db){
        echo 'ERROR: Database does not exist';
        exit();
    }
    $response = $db->exec($sql);
    if ($response == false ){
        echo "Error Delete Failed";
        die();
    } else {
        echo "Sql : " . $sql . " \n has been run successfully";
    }
}