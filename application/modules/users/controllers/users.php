<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class users extends MX_Controller
{

function __construct() {
parent::__construct();
	if(!($this->session->userdata('language')))
		{
			$this->session->set_userdata("language", "srpski");
		}
		
		$user_lagnguage = $this->session->userdata('language');

		$this->lang->load('login_'. $user_lagnguage,$user_lagnguage);
}

function index(){

$this->login();


}


function login(){
	

	$data['module'] = "users";
	$data['view_file'] = "users_login";
	
	echo Modules::run('template/javnaSekcija', $data);

}

function login_validation(){
	$user_lagnguage = $this->session->userdata('language');

	$this->lang->load('login_'. $user_lagnguage,$user_lagnguage);
	
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[4]|max_length[30]|xss_clean|trim');
	$this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean|min_length[4]|max_length[30]|alpha_numeric|callback_validate_pass');
	$this->form_validation->set_message('validate_pass' ,$this->lang->line('email_pass'));
	$this->form_validation->set_message('valid_email', $this->lang->line('valid_mail'));
	$this->form_validation->set_message('min_length', $this->lang->line('minimum'));
	$this->form_validation->set_message('max_length', $this->lang->line('max'));
	$this->form_validation->set_message('required', $this->lang->line('obavezno'));
	$this->form_validation->set_message('alpha_numeric', $this->lang->line('alpha_numeric'));

	if($this->form_validation->run($this) == FALSE){
			$data['module'] = "users";
			$data['view_file'] = "users_login";

			echo Modules::run('template/javnaSekcija', $data);
	}else{
		$this->_store_session($this->input->post('email',TRUE));
	}


}

public function validate_pass($password){
	$this->load->model('mdl_users');
	$email = $this->input->post('email');
	
	
	if($this->mdl_users->login($email, $password)){
		
		return true;
		
	}else{
		
		
		
		return false;
	}
}

function register(){



}

private function _store_session($email){
	$this->load->model('mdl_users');
	
	$query = $this->mdl_users->get_where_join($email);
	
	foreach($query->result() as $row){
		$userdata = array(
		'id'       => $row->id,
 		'username' => $row->ime,
		'email'    => $row->email,
		'role'     => $row->role
		
		
		
		);
		
	}
	
	$this->session->set_userdata($userdata);

	redirect('users/success');

}
function success(){
			$data['module'] = "users";
			$data['view_file'] = "users_success";
		
			echo Modules::run('template/javnaSekcija', $data);
}

function logout(){
	$this->session->sess_destroy();
	redirect('users/login');
}
function profile(){
	
	
			$data['module'] = "users";
			$data['view_file'] = "users_profile";
		
			echo Modules::run('template/javnaSekcija', $data);
}
function change_profil(){
	$data['user_lagnguage']= $this->session->userdata('language');

		
	if($this->input->is_ajax_request()){
		
	
	$id = $this->input->get('id_s', TRUE);
	$email = $this->input->get('email_s', TRUE);
	$this->load->model('mdl_users');
	$rezultat = $this->mdl_users->profil($id, $email);
	$rows = $rezultat->num_rows();
	if($rows == 1){
		$data['profil'] = $this->mdl_users->profil($id, $email);
		$this->load->view('users_change',$data);
	}else{
	die("User doesn't exist or you are not logged in");
	
	}
	}else{
		redirect('users/profile');
	}
}
function change_profil_base(){
    $this->form_validation->set_rules('ime', 'Ime', 'required|min_length[4]|max_length[20]|xss_clean|trim|alpha');
	$this->form_validation->set_rules('prezime', 'Prezime', 'required|trim|xss_clean|min_length[4]|max_length[20]|alpha');
    $this->form_validation->set_rules('adresa', 'Adresa', 'required|trim|xss_clean|min_length[5]|max_length[30]');
    $this->form_validation->set_rules('grad', 'Grad', 'required|trim|xss_clean|min_length[2]|max_length[30]|alpha');
    $this->form_validation->set_rules('drzava', 'Drzava', 'required|trim|xss_clean|min_length[2]|max_length[30]|alpha');
    $this->form_validation->set_rules('zip', 'Zip', 'required|trim|xss_clean|min_length[3]|max_length[10]|numeric');
    


	if($this->form_validation->run($this) == FALSE){
			$data['module'] = "users";
			$data['view_file'] = "users_error_profile";

			echo Modules::run('template/javnaSekcija', $data);
	}else{
		$id = $this->session->userdata('id');
		$data['ime'] = $this->input->post('ime', TRUE);
        $data['prezime'] = $this->input->post('prezime', TRUE);
        $data['adresa'] = $this->input->post('adresa', TRUE);
        $data['grad'] = $this->input->post('grad', TRUE);
        $data['drzava'] = $this->input->post('drzava', TRUE);
        $data['zip'] = $this->input->post('zip', TRUE);
        
        $this->load->model('mdl_users');
        
        $this->mdl_users->_update($id, $data);
        redirect('users/profile');
	}
}
function do_upload(){
	
	$config['upload_path'] = "./upload/";
	$config['allowed_types'] = 'jpg|png';
	$config['max_size']	= '1024';
	$config['max_width']  = '100';
	$config['max_height']  = '100';
	$config['file_name'] = $this->session->userdata('id');
	$config['overwrite'] = TRUE;
	
	$this->load->library('upload', $config);
	
	if ( ! $this->upload->do_upload())
	{
		$error = array('error' => $this->upload->display_errors());
	
		print_r($error);
	}
	else
	{
		$data = array('upload_data' => $this->upload->data());
	
		$this->load->view('upload_success', $data);
	}
	}
function changePass(){
	$this->form_validation->set_rules('old_pass', 'Old_pass', 'required|min_length[4]|max_length[20]|xss_clean|trim|alpha_numeric|callback_check_pass');
	$this->form_validation->set_rules('new_pass', 'New_pass', 'required|trim|xss_clean|min_length[4]|max_length[20]|alpha_numeric');
	$this->form_validation->set_rules('conf_pass', 'Conf_pass', 'required|trim|xss_clean|min_length[5]|max_length[30]|alpha_numeric|callback_check_passwords');
	
	
	
	if($this->form_validation->run($this) == FALSE){
		$data['module'] = "users";
		$data['view_file'] = "users_error_profile";
	
		echo Modules::run('template/javnaSekcija', $data);
	}else{
		$id = $this->session->userdata('id');
		
		$pass = $this->input->post('new_pass', TRUE);
		
		
	
		$this->load->model('mdl_users');
		$data['password'] = $this->mdl_users->salt($pass);
		$this->mdl_users->_update($id, $data);
		redirect('users/profile');
	}
	
}
function check_pass(){
	$id = $this->session->userdata('id');
	$old = $this->input->post('old_pass', TRUE);
	$this->load->model('mdl_users');
	if($this->mdl_users->check_pass($id , $old)){
		return TRUE;
	}else{
		return FALSE;
	}
}
function check_passwords(){
	$pass1 = $this->input->post('new_pass');
	$pass2 = $this->input->post('conf_pass');
	
	if($pass1 == $pass2){
		return TRUE;
	}else{
		return FALSE;
	}
}
}
