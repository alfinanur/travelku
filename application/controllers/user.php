<?php if( ! defined('BASEPATH'))exit('no direct script access allowed');
class User extends CI_Controller{
	public function __construct(){
		parent:: __construct();

		$this->load->model('m_user');
	}
	public function index(){
		$data = $this->m_user->GetData();
		$this->load->view('tabel',array('data'=>$data));
	}
	public function add_data(){
		$this->load->view('v_user');
	}
	public function do_insert(){
		$Id_user = $_POST['Id_user'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		$level = $_POST['level'];
		$data_insert = array(
			'Id_user' => $Id_user,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
		);
		$res = $this->m_user->InsertData('user',$data_insert);
		if($res>=1){
			redirect('user/index');
		}else{
			echo "<h2>Insert Data Gagal</h2>";
		}
	}
	public function do_delete($Id_user){
		$where = array('Id_user' => $Id_user);
		$res = $this->m_user->DeleteData('user',$where);
		if($res>=1){
			redirect('user/index');
		}
	}
}