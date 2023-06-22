<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_users_model extends CI_Model {

	public function __construct(){
		parent::__construct();

	}
 
	public function authenticate($email){
			$query = $this->db->query("SELECT * FROM `admin` where email='$email' " );
			if ($query->num_rows() > 0) {
				return $query->result();
			}
				return 0;
		}
		
		function fetch_all($table){

			$query = $this->db->query("SELECT * FROM `$table`   " );
			return $query->result();

		}	

		function get_info($id){
			$query = $this->db->select('*')
								->from('admin')
								->where('id', $id)
								->get();

			return $query->result();

		}

		function fetch_info()
		{
			$query 	= $this->db->query("SELECT * FROM `web_info` " );
			return $query->result();
		}
		
       //insert new admin in dashboard
		function insert_data($table,$data)
		{
			$this->db->insert($table, $data);
			$afftectedRows = $this->db->affected_rows();
	        if ($afftectedRows > 0) {
	            return TRUE;
	        } else {
	            return FALSE;
	        }
		}

		public function set_update($table, $data)
		{
			$this->db->set($data);
			$this->db->where('id', "1");
			$this->db->update($table);
			$affectedRows = $this->db->affected_rows();
			if ($affectedRows > 0) {
				return true;
			} else {
				return false;
			}
		}
			
}
?>