<?php

class Pengurusan extends CI_Controller {

	public function index()
	{
        $data['title'] = "JasaPrima | Pengurusan";
		$data['location'] = "Pengurusan";
        $this->load->view('templates/head', $data);
		$this->load->view('pengurusan/index');
        $this->load->view('templates/foot');
	}

    public function ubah()
	{
        $data['title'] = "JasaPrima | Pengurusan";
		$data['location'] = "Pengurusan/ubah";
        $this->load->view('templates/head', $data);
		$this->load->view('pengurusan/ubah');
        $this->load->view('templates/foot');
	}

    public function area()
	{
        $data['title'] = "JasaPrima | Pengurusan";
		$data['location'] = "Pengurusan/area";
        $this->load->view('templates/head', $data);
		$this->load->view('pengurusan/area');
        $this->load->view('templates/foot');
	}
}
