<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('demoModel');
		$this->load->helper('url');
		$this->load->library('form_validation');
		if (json_decode((file_get_contents('php://input')), true) != null) {
			$_POST = json_decode(file_get_contents('php://input'), true);
		}
	}

	public function Add()
	{
		if ($this->input->post()) {	
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('email', 'email', 'trim|required');
			$this->form_validation->set_rules('mobile_no', 'mobile_no', 'trim|required|min_length[10]|max_length[12]');
			$this->form_validation->set_rules('message', 'message', 'trim|required|min_length[1]|max_length[10000]');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('HTML_Design/index');
			} else {
				$result = $this->demoModel->Add();
				if ($result) {
					$this->load->view('HTML_Design/thanks');
				}
			}
		} else {
			$this->load->view('HTML_Design/index');
		}
	}

	public function registrationform()
	{

		if ($this->input->post()) {
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('date', 'date', 'required');
			$this->form_validation->set_rules('age', 'age', 'required');
			$this->form_validation->set_rules('parents_fullname', 'parents_fullname', 'trim|required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('mobile_code', 'mobile_code', 'trim|required|min_length[10]|max_length[12]');
			$this->form_validation->set_rules('mobile_code1', 'mobile_code1', 'trim|required|min_length[10]|max_length[12]');
			$this->form_validation->set_rules('email', 'email', 'trim|required');
			if ($this->form_validation->run() == False) {

				$this->load->view('HTML_Design/registration-form');
			} else {
				$result =  $this->demoModel->registrationform();
				if ($result) {
					$this->load->view('HTML_Design/thanks');
				}
			}
		} else {
			$this->load->view('HTML_Design/registration-form');
		}
	}

	public function thanks()
	{
		$this->load->view('HTML_Design/thanks');
	}

	public function event()
	{
		if ($this->input->post()) {
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('email', 'email', 'trime|required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('mobile_code', 'mobile_code', 'trim|required|min_length[10]|max_length[12]');
			$this->form_validation->set_rules('age', 'age', 'trim|required');
			$this->form_validation->set_rules('city', 'city', 'trim|required');
			$this->form_validation->set_rules('gender', 'gender', 'trim|required');
			if ($this->form_validation->run() == False) {
				// echo validation_errors();die;
				$data['Ages'] = $this->demoModel->ageandgender();
				$data['state'] = $this->demoModel->state();
				$this->load->view('HTML_Design/event', $data);
			} else {
				$result =  $this->demoModel->event_data();
				if ($result) {
					$this->load->view('HTML_Design/thanks');
				}
			}
		} else {
			$data['Ages'] = $this->demoModel->ageandgender();
			$data['state'] = $this->demoModel->state();
			$this->load->view('HTML_Design/event', $data);
		}
	}


	public function test(){
		$this->load->view('HTML_Design/layout.php');
	}
}
