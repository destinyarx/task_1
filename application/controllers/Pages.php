<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}


		$this->load->helper('url');

		$data['title'] = 'Home Page';

		$this->load->view('template/header');
		$this->load->view('pages/'.$page,$data);
		$this->load->view('template/footer');
	}

	public function record(){
		$this->load->view('template/header');
		$this->load->view('record');
		$this->load->view('template/footer');
	}
}
