<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class OpenAccess extends Default_Controler
{
    public function index()
    {
        $this->load->view('home');
    }

    public function product_page()
    {
        $this->load->view('product');
    }
}
