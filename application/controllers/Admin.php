<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {	
	function __constructor(){
		parent::__constructor();

		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Origin: <origin>");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
		header('Access-Control-Request-Method: OPTIONS, POST, GET, PUT, DELETE');
	}

	public function dashboard(){
        $data['content'] = 'admin/dashboard';
        
		$this->load->view('templates/admin/content', $data);
	}
	
	public function companies() {
		$data['content'] = 'admin/company';
        
		$this->load->view('templates/admin/content', $data);
	}

	public function pending_companies() {
		$data['content'] = 'admin/pending_company';
        
		$this->load->view('templates/admin/content', $data);
	}

	public function applicants() {
		$data['content'] = 'admin/applicants';
        
		$this->load->view('templates/admin/content', $data);
	}

	public function pending_applicants() {
		$data['content'] = 'admin/pending_applicants';
        
		$this->load->view('templates/admin/content', $data);
	}

	public function hirings() {
		$data['content'] = 'admin/hirings';
        
		$this->load->view('templates/admin/content', $data);
	}

	public function pending_hirings() {
		$data['content'] = 'admin/pending_hirings';
        
		$this->load->view('templates/admin/content', $data);
	}

	public function user_settings() {
		$data['content'] = 'user_settings';
        
		$this->load->view('templates/admin/content', $data);
	}
	public function employment() {
		$data['content'] = 'admin/employment';
        
		$this->load->view('templates/admin/content', $data);
	}
	public function unemployment() {
		$data['content'] = 'admin/unemployment';
        
		$this->load->view('templates/admin/content', $data);
	}

	//Functionals

	public function show_company() {
		$result = $this->admin->show_company();
		$msg['success'] = false;
		if($result[0]){
			$msg['success'] = true;
			$msg['data'] = $result[1];
		}
		echo json_encode($msg);
	}

	public function show_applicant() {
		$result = $this->admin->show_applicant();
		$msg['success'] = false;
		if($result[0]){
			$msg['success'] = true;
			$msg['data'] = $result[1];
		}
		echo json_encode($msg);
	}

	public function show_pending_company() {
		$result = $this->admin->show_pending_company();
		$msg['success'] = false;
		if($result[0]){
			$msg['success'] = true;
			$msg['data'] = $result[1];
		}
		echo json_encode($msg);
	}

	public function show_pending_applicant() {
		$result = $this->admin->show_pending_applicant();
		$msg['success'] = false;
		if($result[0]){
			$msg['success'] = true;
			$msg['data'] = $result[1];
		}
		echo json_encode($msg);
	}


	public function notification() {
		$result = $this->admin->notification();
		$msg['success'] = false;
		if($result[0]){
			$msg['success'] = true;
			$msg['count_applicant'] = $result[1];
			$msg['count_company'] = $result[2];
			$msg['count_p_applicant'] = $result[3];
			$msg['count_p_company'] = $result[4];
			$msg['count_employed'] = $result[5];
			$msg['count_unemployed'] = $result[6];
			$msg['count_employed_per_year'] = $result[7];
			$msg['count_unemployed_per_year'] = $result[8];
		}
		echo json_encode($msg);
	}

	public function show_app_user() {
		$result = $this->admin->show_app_user();
		$msg['success'] = false;
		if($result[0]){
			$msg['success'] = true;
			$msg['data'] = $result[1];
		}
		echo json_encode($msg);
	}

	public function show_comp_user() {
		$result = $this->admin->show_comp_user();
		$msg['success'] = false;
		if($result[0]){
			$msg['success'] = true;
			$msg['data'] = $result[1];
		}
		echo json_encode($msg);
	}

	public function change_user_status() {
		$result = $this->admin->change_user_status();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
			$msg['status'] = 'success';
		}
		echo json_encode($msg);
	}

	public function show_employed_graduates() {
		$result = $this->admin->show_employed_graduates();
		$msg['success'] = false;
		if($result[0]){
			$msg['success'] = true;
			$msg['data'] = $result[1];
		}
		echo json_encode($msg);
	}
	public function show_unemployed_graduates() {
		$result = $this->admin->show_unemployed_graduates();
		$msg['success'] = false;
		if($result[0]){
			$msg['success'] = true;
			$msg['data'] = $result[1];
		}
		echo json_encode($msg);
	}
}