<?php include '../config.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM festival WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Event Berhasil Terhapus</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }
}
?>

<a href="index.php" class="btn btn-secondary mt-4">Kembali</a>

<?php $conn->close(); ?>
