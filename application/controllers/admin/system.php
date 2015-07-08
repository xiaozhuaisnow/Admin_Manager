<?php
class System extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('admin/index');
    }

    public function test(){
        $this->load->view('admin/test1');
    }
}