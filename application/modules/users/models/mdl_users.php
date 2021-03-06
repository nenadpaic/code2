<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_users extends CI_Model {

function __construct() {
parent::__construct();
}

function get_table() {
$table = 'users';
return $table;
}
function profil($id, $email){
	$this->db->where('id', $id);
	$this->db->where('email', $email);
	$table = $this->get_table();
	$query = $this->db->get($table);
	
	return $query;
		
	
	
}
function check_pass($id, $pass){
	$password = $this->salt($pass);
	$this->db->where('id', $id);
	$this->db->where('password', $password);
	$query = $this->db->get('users');
	if($query->num_rows() == 1){
		return TRUE;
	}else{
		return FALSE;
	}
	
}
function get_where_join($email){
	$this->db->where('email', $email);
	$this->db->join('role', 'role.id = users.role');
	
	$query = $this->db->get('users');
	
	
	return $query;
}
function login($email , $password){
	$active = 1;
	
	$this->db->where('email', $email);
	$this->db->where('password', $this->salt($password));
	$this->db->where('active', $active);
	
	$query = $this->db->get('users');
	
	if($query->num_rows() == 1){
		return TRUE;
	}else{
		return FALSE;
	}
	
}
function salt($pass){
	$salt1 = md5('nemesisDevelopment');
	$salt2 = sha1('nenadpaic89');
	
	$new_pass = sha1($salt1.$pass.$salt2);
	
	return $new_pass;
}

function get($order_by){
$table = $this-get_table();
$this-db-order_by($order_by);
$query=$this-db-get($table);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$table = $this-get_table();
$this-db-limit($limit, $offset);
$this-db-order_by($order_by);
$query=$this-db-get($table);
return $query;
}

function get_where($id){
$table = $this-get_table();
$this-db-where('id', $id);
$query=$this-db-get($table);
return $query;
}

function get_where_custom($col, $value) {
$table = $this-get_table();
$this-db-where($col, $value);
$query=$this-db-get($table);
return $query;
}

function _insert($data){
$table = $this-get_table();
$this-db-insert($table, $data);
}

function _update($id, $data){
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->update($table, $data);
}
function _update_pass($id, $data){
	$table = $this->get_table();
	$this->db->where('id', $id);
	$this->db->update($table, $data);
}

function _delete($id){
$table = $this-get_table();
$this-db-where('id', $id);
$this-db-delete($table);
}

function count_where($column, $value) {
$table = $this-get_table();
$this-db-where($column, $value);
$query=$this-db-get($table);
$num_rows = $query-num_rows();
return $num_rows;
}

function count_all() {
$table = $this-get_table();
$query=$this-db-get($table);
$num_rows = $query-num_rows();
return $num_rows;
}

function get_max() {
$table = $this-get_table();
$this-db-select_max('id');
$query = $this-db-get($table);
$row=$query-row();
$id=$row-id;
return $id;
}

function _custom_query($mysql_query) {
$query = $this-db-query($mysql_query);
return $query;
}

}