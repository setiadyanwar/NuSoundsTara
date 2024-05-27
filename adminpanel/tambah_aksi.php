<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    // Handling file upload
    $target_dir = '../images/events/'; // Directory for uploaded images
    $target_file = $target_dir . basename($image["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($image["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo '<div class="alert alert-danger" role="alert">File is not an image.</div>';
        $uploadOk = 0;
    }

    // Check file size
    if ($image["size"] > 5000000) { // 5MB maximum size
        echo '<div class="alert alert-danger" role="alert">Sorry, your file is too large.</div>';
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo '<div class="alert alert-danger" role="alert">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>';
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo '<div class="alert alert-danger" role="alert">Sorry, your file was not uploaded.</div>';
    } else {
        // Ensure the target directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true); // Create the directory if it does not exist
        }

        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            // Insert data into database
            $image_path_for_db = 'images/events/' . basename($image["name"]); // Save the relative path in the database
            $sql = "INSERT INTO festival (title, description, date, price, image) VALUES ('$title', '$description', '$date', '$price', '$image_path_for_db')";

            if ($conn->query($sql) === TRUE) {
                // Redirect to index.php
                header('Location: tampil_data.php');
                exit;
            } else {
                echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Sorry, there was an error uploading your file.</div>';
        }
    }
}

$conn->close();
?>
