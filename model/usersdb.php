<?php
include("connection.php");

function insert_user(){
    //insert info in the users table
    global $db;
    
    $query = "INSERT INTO users(username, password, user_type) VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['password']."')";
    $result = $db->query($query);
}

function get_users(){
    //read the users info from the users table
}

function get_user_by_username_password(){
    //this will grab user based on username and password
    global $db;
    $query = "SELECT id FROM users WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'";
    
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function update_user(){
    //uddae info of users from the users table
}

function delete_user(){
    //remove a row of user from the users table
}

/*TESTING
insert_user();*/
?>