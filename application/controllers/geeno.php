<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class geeno extends CI_Controller {


	public function index()
	{
		$this->load->view('mycss');
		$this->load->view('geeno_view');
	}
}
