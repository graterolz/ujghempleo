<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Vacante_model');
	}

	public function index(){
		$data['vacante'] = $this->Vacante_model->getVacantes(NULL);

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('vacante/list_vacante',$data);
		$this->load->view('template/footer');
	}

	public function view($var){
		$data['vacante'] = $this->Vacante_model->getVacantes($var);

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('vacante/view_vacante',$data);
		$this->load->view('template/footer');		

	}
}