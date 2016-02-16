<?php
include("../model/usersdb.php");

if($_POST['method'] == "insert"){
    insert_user();
}
?>