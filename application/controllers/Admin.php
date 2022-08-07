<?php

class Admin extends CI_Controller {

	public function index()
	{
        $data['title'] = "JasaPrima | Admin";
        $data['location'] = "Admin";
        $this->load->view('templates/head', $data);
		$this->load->view('admin/index');
        $this->load->view('templates/foot');
	}

    public function aksi()
	{
        $data['title'] = "JasaPrima | Admin";
        $data['location'] = "Admin/aksi";
        $this->load->view('templates/head', $data);
		$this->load->view('admin/aksi');
        $this->load->view('templates/foot');
	}
}
