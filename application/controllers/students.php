<?php

class Students extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('sms_model');
    }

	public function index()
	{
        $data['student_records'] = $this->sms_model->get_records();
        $data['title'] = 'List of all students';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/index', $data);
        $this->load->view('templates/footer');		
	}

	public function add()
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Add New Student Record';

	    $this->form_validation->set_rules('name', 'Full Name', 'required');
	    $this->form_validation->set_rules('address', 'Address', 'required');
	    $this->form_validation->set_rules('gender', 'Gender', 'required');
	    $this->form_validation->set_rules('eyop', 'Expected Year of Passing', 'required');
	    $this->form_validation->set_rules('interests[]', 'interests', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/add');
	        $this->load->view('templates/footer');

	    }
	    else
	    {
	        $this->sms_model->add_student();
	        $data['title'] = 'New Student added';
	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/success');
	        $this->load->view('templates/footer');
	    }
	}

	public function edited($id)
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Edit Record';

	    $this->form_validation->set_rules('name', 'Full Name', 'required');
	    $this->form_validation->set_rules('address', 'Address', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/edit');
	        $this->load->view('templates/footer');

	    }
	    else
	    {
	        $this->sms_model->edit_student($id);
	        $data['title'] = 'REcord updated.';
	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/success');
	        $this->load->view('templates/footer');
	    }
	}

	public function delete($id){

		$this->sms_model->delete($id);
		$data['title'] = 'Student deleted';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/success');
        $this->load->view('templates/footer');
	}

	public function edit($id){

		$this->load->helper('form');
	    $this->load->library('form_validation');

		$data['student'] = $this->sms_model->get_records($id);
        if (empty($data['student']))
        {
                show_404();
        }

        $data['title'] = "Edit Student Record";

        $this->load->view('templates/header', $data);
        $this->load->view('pages/edit', $data);
        $this->load->view('templates/footer');
	}
}