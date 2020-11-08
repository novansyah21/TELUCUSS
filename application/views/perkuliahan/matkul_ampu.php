<!DOCTYPE html>
<html lang="en">

<head>
    <title>TA Mahasiswa - Dashboard</title>
    <?php $this->load->view("_partials/header.php") ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/data_controllers/css/daleman.css') ?>">
</head>

<body id="page-top">
    <?php $this->load->view("_partials/js.php") ?>
    <?php $this->load->view("_partials/navbar.php") ?>
    <div class="datadata">
        <div id="wrapper">

            <!-- Sidebar -->
            <?php $this->load->view("_partials/sidebar.php") ?>
            <div id="content-wrapper">
                <div class="container-fluid">

                    <!-- DataTables Example -->
                    <div class="col-sm-6">
                        <div class="card-body">
                            <h5 class="card-title"><?= $my_profile['nama_depan'] . " " . $my_profile['nama_belakang'] ?></h5>
                            <!-- <p class="card-text"></p> -->
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $my_profile['nip'] ?></li>
                            <li class="list-group-item"><?= $my_profile['kode_dosen'] ?></li>
                        </ul>
                    </div>
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="" method="post">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">NAMA MATKUL</th>
                                                <th scope="col">KODE MATKUL</th>
                                                <th scope="col">SKS</th>
                                                <th scope="col">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($list_matkul)) { ?>
                                                <?php foreach ($list_matkul as $row => $value) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $value['nama_matkul']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $value['kode_matkul']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $value['sks']; ?>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="id_matkul[]" value="<?= $value['id_matkul']; ?>">
                                                                <!-- <?php echo $value['nama_matkul']; ?> -->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-dark float-right" name="ambilMatkul">Ambil Matkul</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/mahasiswa/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>