<?php

class Transaksi extends CI_Controller {

	public function index()
	{
        $data['title'] = "JasaPrima | Transaksi";
		$data['location'] = "Transaksi";
        $this->load->view('templates/head', $data);
		$this->load->view('transaksi/index');
        $this->load->view('templates/foot');
	}

	public function tambah()
	{
        $data['title'] = "JasaPrima | Transaksi";
		$data['location'] = "Transaksi/tambah";
        $this->load->view('templates/head', $data);
		$this->load->view('transaksi/tambah');
        $this->load->view('templates/foot');
	}

	public function detail()
	{
        $data['title'] = "JasaPrima | Transaksi";
		$data['location'] = "Transaksi/detail";
        $this->load->view('templates/head', $data);
		$this->load->view('transaksi/detail');
        $this->load->view('templates/foot');
	}
}
