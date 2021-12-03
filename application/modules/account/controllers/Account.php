<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {


    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library("bladeview");
        $this->load->model('UserModel');
    }

	public function index()
	{
		redirect(base_url('account/login'));
	}

    public function login(){
        // $data['content'] = $this->load->view('login','',true);
        // $this->load->view('layout',$data);
        $this->bladeview->render("login");
    }
    public function forgot(){
       $d = array();
        dDebug($d);
    }

    public function do_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
        if($this->form_validation->run()){
            // dDebug($_POST);
            $this->UserModel->auth();                                                                                                                                                                                                                                                                                                                                          

        }
        // $data['content'] = $this->load->view('login','',true);
        $this->bladeview->render("login");
    }

    public function test(){
        $data = array(
            "foo" => "Hello",
            "bar" => "World",
        );
        $this->bladeview->render("test", $data);
    }
}
