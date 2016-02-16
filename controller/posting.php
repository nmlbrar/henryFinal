<?php
include("../model/postingdb.php");

if($_POST['method'] == "postall"){
    post_order();
}

if($_POST['method'] == "getall"){
    get_orders();
}
?>