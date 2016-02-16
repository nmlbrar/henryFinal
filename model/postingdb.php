<?php
include("connection.php");

function post_order(){
    //insert info in the users table
    global $db;    
    $query = "INSERT INTO postings(description, destination, currentPlace, user_id) VALUES ('".$_POST['description']."','".$_POST['destination']."','".$_POST['currentPlace']."','".$_POST['user_id']."')";
    echo $query;
    $result = $db->query($query);
}

function get_orders(){
    global $db;
    $query = "SELECT postings.description, postings.destination, postings.currentPlace, postings.user_id FROM postings
                LEFT JOIN users ON users.id = postings.user_id";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

?>