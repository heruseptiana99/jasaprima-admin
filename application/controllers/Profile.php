<?php

class Profile extends CI_Controller {

	public function index()
	{
        $data['title'] = "JasaPrima | Profile";
		$data['location'] = "Profile";
        $this->load->view('templates/head', $data);
		$this->load->view('profile/index');
        $this->load->view('templates/foot');
	}

}
