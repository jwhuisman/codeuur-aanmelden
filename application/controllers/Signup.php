<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct()
   {
   		parent::__construct();
        $this->load->database();
   }


	public function index()
	{
		$this->load->view('signup');
	}

	public function create(){
		try{
			$json_post = json_decode(file_get_contents('php://input'), false);		
			if($json_post){
				$this->load->model("SigninModel", "signin");
				$team_id = $this->signin->createTeam(); 
				foreach($json_post as $student){
					$data = array(
						"student_id" => $student->student_id,
						"first_name" =>   $student->first_name,
						"last_name" =>  $student->last_name,
						"email" =>  $student->email,
						"phone" =>  $student->phone,
						"contact_to_school" =>   $student->contact_to_school,
						"about" =>   $student->about,
						"study" =>  $student->study,
						"team_id" => $team_id
					);
					$this->signin->addStudent($data);
				}
			}
		}
	 catch (Exception $e){
		 	echo $e;
		}
	}
	
}
