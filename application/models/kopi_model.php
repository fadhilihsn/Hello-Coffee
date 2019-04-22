<?php

class kopi_model extends CI_Model{

	public function getKopi(){
		$query = $this->db->get('menu');
		return $query->result_array();
	}
	public function getKopiById($id_menu){
		$this->db->from('menu');
		$this->db->where('id_menu',$id_menu);
        return $this->db->get();
        //return as object array
	}

	public function tambahMenu($data){
		return $this->db->insert('menu',$data);
	}

	public function getMenuToko($id){
		$this->db->from('menu');
		$this->db->where('id_toko',$id);
		return $this->db->get();
	}

	public function editMenu($id,$data){
		$this->db->where('id_menu',$id);
		return $this->db->update('menu',$data);
	}

	public function deleteMenu($id){
		$this->db->where('id_menu',$id);
		return $this->db->delete('menu');
	}
}
?>