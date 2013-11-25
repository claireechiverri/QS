<?php
class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		/* testing purposes; to be changed */
		$data['teachers'] = $this->admin_model->get_teachers();
		$data['title'] = 'List of teachers';

	    $this->load->view('templates/header', $data);
		$this->load->view('teachers/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function view($user_ID)
	{
		$data['teachers_item'] = $this->admin_model->get_teachers($user_ID);
		
		if (empty($data['teachers_item']))
		{
			show_404();
		}

		$data['title'] = $data['teachers_item']['email'];

		$this->load->view('templates/header', $data);
		$this->load->view('teachers/view', $data);
		$this->load->view('templates/footer');
	}
	
	
}