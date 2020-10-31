<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('excel_import_model');
        $this->load->library('excel');
    }

    function index()
    {
        $this->load->view('excel_import');
    }
}
