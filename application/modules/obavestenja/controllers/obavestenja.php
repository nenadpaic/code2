<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Obavestenja extends MX_Controller
{

function __construct() {
parent::__construct();
}
function get_obavestenja(){
	
	if($this->input->is_ajax_request()){
		$data['lang'] = $this->input->get('language', TRUE);
	
	$this->load->model('mdl_obavestenja');
	$data['obavestenja'] = $this->mdl_obavestenja->_custom_query('SELECT * FROM obavestenja ORDER BY id LIMIT 3');
	
	$this->load->view('obavestenja', $data);
	}else{
		redirect('users/profile');
	}
}

}