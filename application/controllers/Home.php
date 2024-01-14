<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
	public function index()
	{
		$data['title'] = "Web Portofolio | Hamm";
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/index');
		$this->load->view('user/templates/footer');
	}
}
