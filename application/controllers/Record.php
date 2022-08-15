<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Controller {

	public function view()
	{
		$data['title'] = 'Data Records';

        $data['record'] = $this->Data_model->get_record();

		$this->load->view('template/header');
		$this->load->view('pages/record',$data);
		$this->load->view('template/footer');
	}

	
}
