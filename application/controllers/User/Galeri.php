<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Galeri_model');
        
    }
    public function index()
    {
        $data['galeri'] = $this->Galeri_model->tampilGaleri();
        $this->load->view('User/galeri/index',$data);
    }
}
?>