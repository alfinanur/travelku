<?php
class user extends CI_Controller{
	public function index()
	{
		$this->load->view('v_user');
	}
	public function add()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
		);
		var_dump($data);
		$this->load->model('m_user');
		$this->m_user->tambah($data);
		$this->load->view('v_user');
	}
}
?>