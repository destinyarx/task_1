<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view()
	{
		$this->load->helper('url');

		$data['title'] = 'Home Page';

		$this->load->view('template/header');
		$this->load->view('home',$data);
		$this->load->view('template/footer');
	}
}
