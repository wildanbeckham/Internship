<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
    {
        $this->load->view('tamplates/header');
        $this->load->view('welcome/home');
        $this->load->view('welcome/modal');
        $this->load->view('tamplates/footer');
	}

	function jalan()
    {
        $this->load->view('tamplates/header');
        $this->load->view('welcome/jalan');
        $this->load->view('tamplates/footer');
	}

	function jembatan()
    {
        $this->load->view('tamplates/header');
        $this->load->view('welcome/jembatan');
        $this->load->view('tamplates/footer');
	}
	function under()
    {
        $this->load->view('tamplates/header');
        $this->load->view('welcome/under');
        $this->load->view('tamplates/footer');
	}
}