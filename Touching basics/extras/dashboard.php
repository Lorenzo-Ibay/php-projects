<?php
// check for session
session_start();
if(isset($_SESSION['username'])){
    echo 'welcome ' . $_SESSION['username'];

} else {
    echo 'welcome guest';
}