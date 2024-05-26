<?php
session_start();
// if ($_SESSION['status'] != "login") {
//     header("location:../tampil_data.php?pesan=belum_login");
// }
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Event Nusoundstara</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
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
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </div>
    <!-- End of Page Wrapper -->