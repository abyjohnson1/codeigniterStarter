<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {



	public function index()
	{
		// $d =$this->load->view('welcome_message','',true);
		$data = array(1=>"sdjhgasjkd",2=>"asdsadkjh");
		dDebug($data);
	}
}
