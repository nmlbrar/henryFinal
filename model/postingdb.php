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
    $query = "SELECT postings.description, postings.destination, postings.currentPlace, postings.id FROM postings
              LEFT JOIN users ON users.id = postings.user_id WHERE user_id =".$_POST['user_id']."";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_allorders(){
    global $db;
    $query = "SELECT postings.description, postings.destination, postings.currentPlace, postings.id, users.username FROM postings
              LEFT JOIN users ON users.id = postings.user_id";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function update_order(){
    global $db;
    $query = "UPDATE postings SET description = '".$_POST['description']."' WHERE id =".$_POST['id']."";
    echo $query;
    $result = $db->query($query);
}


?>