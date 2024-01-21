<?php
function inverse($x){
    if(!$x){
        throw new Exception('Division by zero');
    }
    return 1/$x;

}
// echo inverse (.0);
try{
    echo inverse(0);
    echo inverse(4);
}catch(Exception $e){
    echo 'caught one! ', $e->getMessage(), '';
}
