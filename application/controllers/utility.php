<?php
class Utility extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function isValidIP(){
		$ip = $this->input->post('ipad');
		$data = array();
		$data['isValid'] = $this->input->valid_ip($ip);
		$data['ipval'] = $this->input->post('ip');
		//$data['isValid'] = false;
		echo json_encode($data);
	}
}

?>