<?php
session_start();
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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Event Musik</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                        </div>
                        <div class="card-body">

                            <!-- Main content -->
                            <form class="form-horizontal style-form" style="margin-top: 10px;" action="tambah_aksi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Event</label>
                                    <div class="col-sm-6">
                                        <input name="title" type="text" class="form-control" placeholder="Tuliskan nama event" required />
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Deskripsi</label>
                                    <div class="col-sm-6">
                                        <textarea name="description" class="form-control" placeholder="Deskripsi" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input name="date" class="form-control" type="date" placeholder="Isikan tanggal" required />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Harga Tiket</label>
                                    <div class="col-sm-6">
                                        <input name="price" class="form-control" type="number" step="0.01" placeholder="Harga Tiket" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Poster</label>
                                    <div class="col-sm-6">
                                        <input name="image" class="form-control" type="file" required />
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-8">
                                        <input type="submit" value="Simpan" class="btn btn-sm btn-primary" style="background-color: #ee5007; border-color:#f8cb2e;" />
                                    </div>
                                </div>
                                <div style="margin-top: 20px;"></div>
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                $title = $_POST['title'];
                                $description = $_POST['description'];
                                $date = $_POST['date'];
                                $price = $_POST['price'];
                                $image = $_FILES['image'];

                                // Handling file upload
                                $target_dir = "../uploads/";
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
                                if ($image["size"] > 5000000) {
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
                                // if everything is ok, try to upload file
                                } else {
                                    if (move_uploaded_file($image["tmp_name"], $target_file)) {
                                        $sql = "INSERT INTO festival (title, description, date, price, image) VALUES ('$title', '$description', '$date', '$price', '$target_file')";

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
                            ?>

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

<!-- <?php $conn->close(); ?> -->
