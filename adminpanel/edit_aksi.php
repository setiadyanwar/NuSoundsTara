<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "UPDATE festival SET 
            title='$title', 
            description='$description', 
            date='$date', 
            price='$price', 
            image='$image' 
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header('Location: tampil_data.php');
        exit;
    } else {
       
        echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }
}

$conn->close();
?>
