<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devices extends CI_Controller {

	//constructor
	public function __construct()
	{
		parent::__construct();

		//si el usuario no está logueado...
		//lo pateamos... :) como corresponde :)
		if(!isset($_SESSION['user_id'])){
			redirect(base_url('login'), 'refresh');
		}

		//cargamos el modelo
		$this->load->model('Devices_model');
	}


  public function index()
  {
		$user_id = $this->session->userdata('user_id');
		$data['devices'] = $this->Devices_model->get_devices($user_id);

		$this->load->view('head');
		$this->load->view('scripts');
		$this->load->view('open');
		$this->load->view('header',$data);
		$this->load->view('sidebar');
    	$this->load->view('contents/devices',$data);
		$this->load->view('close');
  }


	//llamamos esta función cuando se cambia el selector del dispositivo
	public function change_device(){
		$user_id = $this->session->userdata('user_id');
		$device_id = strip_tags($this->input->post('device_id'));
		$result = $this->Devices_model->change_device($user_id, $device_id);
	}


	// cuando agregamos un dispositivo nuevo
	public function add_device(){
		$user_id = $this->session->userdata('user_id');
		$device_alias = strip_tags($this->input->post('device_alias'));
		$device_serial_number = strip_tags($this->input->post('device_serial_number'));

		$result = $this->Devices_model->add_device($user_id, $device_alias, $device_serial_number);

		//estas variables de sesión las cargamos cuando necesitamos pasar una alerta a sweet alert
		if ($result == "empty alias"){
			$_SESSION['msg_type'] = "warning";
			$_SESSION['msg_title'] = "Alias empty!";
			$_SESSION['msg_body'] = "Alias empty, insert a correct alias";
			$_SESSION['msg_footer'] = "https://stlproyect.tk";
		}elseif ($result == "empty sn"){
			$_SESSION['msg_type'] = "warning";
			$_SESSION['msg_title'] = "Serial number empty!";
			$_SESSION['msg_body'] = "Serial number empty, insert a correct serial number";
			$_SESSION['msg_footer'] = "https://stlproyect.tk";
		}else if ($result == "exist"){
			$_SESSION['msg_type'] = "warning";
			$_SESSION['msg_title'] = "Warning!";
			$_SESSION['msg_body'] = "Serial number alreade exist!";
			$_SESSION['msg_footer'] = "https://stlproyect.tk";
		}elseif ($result == "success"){
			$_SESSION['msg_type'] = "success";
			$_SESSION['msg_title'] = "Success!";
			$_SESSION['msg_body'] = "Device added successfully";
			$_SESSION['msg_footer'] = "https://stlproyect.tk";
		}elseif($result == "fail"){
			$_SESSION['msg_type'] = "error";
			$_SESSION['msg_title'] = "Fail!";
			$_SESSION['msg_body'] = "Fail adding device";
			$_SESSION['msg_footer'] = "https://stlptoyect.tk";
		}
		redirect(base_url('devices'), 'refresh');
	}

	// cuando necesitamos borrar un dispositivo
	public function delete_device(){
		$user_id = $this->session->userdata('user_id');
		$device_id = strip_tags($this->input->post('device_id'));
		$result = $this->Devices_model->delete_device($user_id, $device_id);

		if ($result == True){
			echo "True";
		}else {
			echo "False";
		}
	}



}
