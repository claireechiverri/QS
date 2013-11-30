<?php
class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('utility_model');
		$this->load->helper('url');
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
	
	public function configure()
	{
		$this->utility_model->viewHeaderAdmin();
		$this->load->view('admin/configure');
		$this->utility_model->viewFooterInternal();
	}
	
	/** used for editable dropdown
	 **/
	public function getCountersJsonArray()
	{
		$counters = $this->admin_model->getCompanyInfo();
		$counters = $counters['company_num_of_counters'];
		for($i = 1; $i <= $counters; $i++)
		{
		 	$array[$i] =  $i; 
		}
		 print json_encode($array);
	}
	public function myinfo()
	{
		$info['row']= $this->admin_model->getMyinfo();
		$this->utility_model->viewHeaderAdmin();
		$this->load->view('admin/myinfo',$info);
		$this->utility_model->viewFooterInternal();
	}
	
	
}