<?php

use LDAP\Result;

include("db.php");

if(isset($_POST['save_task'])){
    $title = $_POST["title"];
    $desc = $_POST["description"];

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$desc')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query fail");
    };

    $_SESSION['message'] = "Task Saved Successfully";
    $_SESSION['message_type'] = 'success';

    header("location: index.php");
};

?>