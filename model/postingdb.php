<?php
include("connection.php");

function post_order(){
    //insert info in the users table
    global $db;    
    $query = "INSERT INTO postings(description, destination, currentPlace) VALUES ('".$_POST['description']."','".$_POST['destination']."','".$_POST['currentPlace']."')";
    $result = $db->query($query);
}

function get_orders(){
    global $db;
    $query = "SELECT postings.description, postings.destination, postings.currentPlace FROM postings
                LEFT JOIN users ON users.id = postings.user_id";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

?>