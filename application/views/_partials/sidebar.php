<?php
if ($this->session->userdata("user_role") == 1) {
    $this->load->view("_partials/sidebar_admin.php");
} elseif ($this->session->userdata("user_role") == 2) {
    $this->load->view("_partials/sidebar_dsn.php");
}
