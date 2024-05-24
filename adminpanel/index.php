?php
    require "session.php";

?>

<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuSoundTara - Event List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { margin-top: 50px; }
        .table th, .table td { text-align: center; }
        .table img { width: 100px; height: auto; }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Daftar Event</h2>
        <a href="add.php" class="btn btn-primary mb-4">+ Tambah Event</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Poster</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM festival";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $imagePath = '../' . $row['image']; // Adjust the path accordingly
                        echo '<tr>';
                        echo '<td><img src="'.$imagePath.'" alt="'.$row['title'].'"></td>';
                        echo '<td>'.$row['title'].'</td>';
                        echo '<td>'.$row['description'].'</td>';
                        echo '<td>'.$row['date'].'</td>';
                        echo '<td>Rp'.number_format($row['price'], 2, ',', '.').'</td>';
                        echo '<td>';
                        echo '<a href="edit.php?id='.$row['id'].'" class="btn btn-warning btn-sm">Ubah</a> ';
                        echo '<a href="delete.php?id='.$row['id'].'" class="btn btn-danger btn-sm">Hapus</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo "<tr><td colspan='6'>No results</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
