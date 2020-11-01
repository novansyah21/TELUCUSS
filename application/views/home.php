<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_partials/header.php") ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/data_controllers/css/daleman.css') ?>">
</head>

<body id="page-top">
  <?php $this->load->view("_partials/js.php") ?>
  <?php $this->load->view("_partials/navbar.php", $this->data) ?>


  <div id="wrapper">
    <?php $this->load->view("_partials/sidebar.php") ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        Hallo
      </div>
    </div>
  </div>
  <?php $this->load->view("_partials/footer.php") ?>
</body>

</html>