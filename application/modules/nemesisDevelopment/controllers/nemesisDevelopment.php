<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nemesisDevelopment extends MX_Controller {


	public function __construct() {
		parent::__construct();

		if(!($this->session->userdata('language')))
		{
			$this->session->set_userdata("language", "srpski");
		}
	}



	public function index(){
		$user_lagnguage = $this->session->userdata('language');
		$this->lang->load('http_info_'. $user_lagnguage,$user_lagnguage);

		$data['active_link'] = 'active';
		$data['title'] = $this->lang->line('pocetna');
		$data['description'] = $this->lang->line('pocetna_opis');
		$data['module'] = 'nemesisDevelopment';
		$data['view_file'] = 'pocetna';


		echo Modules::run('template/javnaSekcija', $data);
		
	
	}
}
