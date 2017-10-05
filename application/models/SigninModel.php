<?php

	class SigninModel extends CI_Model{


		public function addStudent($data){

			$this->db->insert("students", $data);

		}

		public function createTeam(){
			$this->db->insert("teams", array("school_id" => null));
			return $this->db->insert_id();
		}



	}