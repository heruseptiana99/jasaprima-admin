<?php

class Wp extends CI_Controller {

	public function index()
	{
        $data['title'] = "JasaPrima | Wp";
		$data['location'] = "WP";
        $this->load->view('templates/head', $data);
		$this->load->view('wp/index');
        $this->load->view('templates/foot');
	}
    public function ubah()
	{
        $data['title'] = "JasaPrima | Wp";
		$data['location'] = "WP/ubah";
        $this->load->view('templates/head', $data);
		$this->load->view('wp/ubah');
        $this->load->view('templates/foot');
	}
}
