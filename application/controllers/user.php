<?php
class user extends CI_Controller{
	public function form()
	{
		$this->load->view('v_user');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function add()
	{
		$this->input->post('username');
	}
}