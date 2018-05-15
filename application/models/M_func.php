
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_func extends CI_Model {

	function encode_pass($pass){
		return md5('tridzvd'.$pass);
	}
	function get_info_user($id){
		$this->db->where('id', $id);
		$get = $this->db->get('member');
		if($get->num_rows() > 0){
			return $get->result_array()[0];
		}else{
			session_destroy();
			return false;
		}
	}
}

/* End of file M_func.php */
/* Location: ./application/models/M_func.php */