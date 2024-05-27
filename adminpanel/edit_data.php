<?php
session_start();

// Cek apakah pengguna sudah login
// if (!isset($_SESSION['username'])) {
//     // Pengguna belum login, arahkan ke halaman login atau tampilkan pesan kesalahan
//     header("Location: login.php");
//     exit(); // Pastikan untuk keluar dari skrip setelah mengarahkan pengguna
// }

include '../config.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM festival WHERE id='$id'");
$data  = mysqli_fetch_array($query);
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
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Event</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="edit_aksi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                        <div class="col-sm-8">
                                            <input name="title" type="text" class="form-control" value="<?php echo $data['title']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea name="description" class="form-control" required><?php echo $data['description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Date</label>
                                        <div class="col-sm-8">
                                            <input name="date" class="form-control" type="date" value="<?php echo $data['date']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Price</label>
                                        <div class="col-sm-8">
                                            <input name="price" class="form-control" type="number" value="<?php echo $data['price']; ?>" step="0.01" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Image URL</label>
                                        <div class="col-sm-8">
                                            <input name="image" class="form-control" type="text" value="<?php echo $data['image']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-8">
                                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary" style="background-color: #ee5007; border-color:#f8cb2e;" />
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php include "footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>
</html>
