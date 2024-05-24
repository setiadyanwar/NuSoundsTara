<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Event</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { margin-top: 50px; }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Tambah Event</h2>
        <form action="add.php" method="post">
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Harga:</label>
                <input type="number" name="price" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="image">Poster URL:</label>
                <input type="text" name="image" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Event</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-4">Kembali</a>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        $sql = "INSERT INTO festival (title, description, date, price, image) VALUES ('$title', '$description', '$date', '$price', '$image')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to index.php
            header('Location: index.php');
            exit;
        } else {
            echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
