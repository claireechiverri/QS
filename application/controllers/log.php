<?php
class Log extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('log_model');
		$this->load->model('utility_model');
		$this->load->helper('url');
	}
	
	public function viewEmployeeLogs()
	{
		$this->utility_model->viewHeaderAdmin();
		$data['employee_logs'] = $this->log_model->getEmployeeLogs();
		$this->load->view('logs/employee_logs', $data);
		$this->utility_model->viewFooterInternal();
	}
	
	public function viewQueueLogs()
	{
		$this->utility_model->viewHeaderAdmin();
		$data['queue_logs'] = $this->log_model->getQueueLogs();
		$this->load->view('logs/queue_logs', $data);
		$this->utility_model->viewFooterInternal();
	}
	
	public function viewAdminLogs()
	{
		$this->utility_model->viewHeaderAdmin();
		$data['admin_logs'] = $this->log_model->getAdminLogs();
		$this->load->view('logs/admin_logs', $data);
		$this->utility_model->viewFooterInternal();
	}

}