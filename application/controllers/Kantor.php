<?php

class Kantor extends CI_Controller {

	public function index()
	{
        $data['title'] = "JasaPrima | Kantor";
        $data['location'] = "Kantor";
        $this->load->view('templates/head', $data);
		$this->load->view('kantor/index');
        $this->load->view('templates/foot');
	}

    public function ubah()
	{
        $data['title'] = "JasaPrima | Kantor";
        $data['location'] = "Kantor/ubah";
        $this->load->view('templates/head', $data);
		$this->load->view('kantor/ubah');
        $this->load->view('templates/foot');
	}

}
