<?php
class m_user extends CI_model
{
	function tambah($data)
	{
		$this->db->insert('user',$data);
	}
}
?>