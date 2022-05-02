<?php
include('database.php');

if(isset($_POST) && (!empty($_POST['name']) && !empty($_POST['description']))){
    $name = $_POST['name'];
    $description = $_POST['description'];

    $query = "INSERT INTO task VALUES(null, '$name', '$description')";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed');
    } else {
        echo 'Task Added Successfully';
    }
} else {
    echo "Error";
}