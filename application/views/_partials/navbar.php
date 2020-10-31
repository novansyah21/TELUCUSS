<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Tel-U CUSS.</a>

    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" id="navbarTogglerDemo03">
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <center>
                <img src="<?= base_url('assets/img/user-icon.png') ?>" alt="" style="border-radius:100px; height:100px; margin:20px;">
                <b><?= $this->session->userdata('username') ?></b>
                <div class="dropdown-divider"></div>
                <?php
                if ($this->session->userdata('user_role') == 4) {
                } else { ?>
                    <a class="dropdown-item" href="<?= base_url('/Pengaturan') ?>">Pengaturan</a>
                <?php
                }
                ?>
                <a class="dropdown-item" href="<?= base_url('login/logout') ?>">Keluar</a>
            </center>
        </div>
    </div>
</nav>