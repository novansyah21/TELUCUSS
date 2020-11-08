<?php
defined('BASEPATH') or exit('No direct script access allowed');

class preferensi extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_preferensi');
    }

    public function index()
    {

        $data['jadwal'] = $this->M_preferensi->bacaJadwal();

        $this->load->view('v_preferensi/preferensi_jadwal', $data);
    }
}
