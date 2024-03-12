<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Studi extends CI_Controller {

    public function index()
    {
        $this->load->view('User/studi/index');
    }
}
?>