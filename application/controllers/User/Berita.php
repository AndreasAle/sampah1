<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('user/Berita_model');
        
    }
    public function index()
    {
        $data['berita'] = $this->Berita_model->tampilBerita();
        $this->load->view('User/berita/index',$data);
    }
}
?>