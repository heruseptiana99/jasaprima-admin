<?php

class Home extends CI_Controller {

	public function index()
	{
        $data['title'] = "JasaPrima | Beranda";
		$data['location'] = "";
        $this->load->view('templates/head', $data);
		$this->load->view('home/index');
        $this->load->view('templates/foot');
	}

	public function laporan()
	{
        $data['title'] = "JasaPrima | laporan";
		$data['location'] = "Laporan";
        $this->load->view('templates/head', $data);
		$this->load->view('home/laporan');
        $this->load->view('templates/foot');
	}

	public function login()
	{
        $data['title'] = "JasaPrima | Akses Masuk";
		$this->load->view('home/login', $data);
	}
}
