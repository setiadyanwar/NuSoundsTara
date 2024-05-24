<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { margin-top: 50px; }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Ubah Event</h2>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM festival WHERE id = $id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }

        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $price = $_POST['price'];
            $image = $_POST['image'];

            $sql = "UPDATE festival SET title='$title', description='$description', date='$date', price='$price', image='$image' WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                // Redirect ke index.php setelah event berhasil diperbarui
                header("Location: index.php");
                exit(); // Pastikan tidak ada output HTML sebelum header
            } else {
                echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
            }
        }
        ?>

        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea name="description" class="form-control" required><?php echo $row['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" name="date" class="form-control" value="<?php echo $row['date']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Harga:</label>
                <input type="number" name="price" class="form-control" value="<?php echo $row['price']; ?>" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="image">Poster URL:</label>
                <input type="text" name="image" class="form-control" value="<?php echo $row['image']; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Ubah Event</button>
        </form>

        <a href="index.php" class="btn btn-secondary mt-4">Kembali</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
