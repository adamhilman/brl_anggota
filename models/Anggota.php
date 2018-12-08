<?php 
 
class Anggota extends CI_Model{
	function ambil_data(){
		return $this->db->get('data_anggota');
	}
}