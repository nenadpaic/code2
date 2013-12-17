<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller
{

	public function javnaSekcija($data){

		$this->load->view('template', $data);
	}

	public function englishVersion(){

		$this->session->set_userdata('language', "english");

		redirect('nemesisDevelopment/index');
		die();
	}
	public function serbianVersion(){

		$this->session->set_userdata('language', "srpski");

		redirect('nemesisDevelopment/index');
		die();
	}


}