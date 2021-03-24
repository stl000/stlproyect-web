<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model');
		$this->load->model('Devices_model');

		if(!isset($_SESSION['user_id'])){
			redirect(base_url('login'), 'refresh');
		}
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
    	$this->load->view('contents/profile',$data);
		$this->load->view('close');
  }

	public function change(){
	
		$user_id = $this->session->userdata('user_id');
		
		$username = strip_tags($this->input->post('user_name'));
		$email= strip_tags($this->input->post('email'));

		$password1= strip_tags($this->input->post('password1'));
		$password2= strip_tags($this->input->post('password2'));
		$result = $this->Profile_model->verify_password($password1, $password2);

		if ($result == "success"){
			$_SESSION['msg_type'] = "success";
			$_SESSION['msg_title'] = "Success!";
			$_SESSION['msg_body'] = "Profile saved successfully";
			$_SESSION['msg_footer'] = "https://stlproyect.tk";
		}else if ($result == "error"){
			$_SESSION['msg_type'] = "error";
			$_SESSION['msg_title'] = "Fail!";
			$_SESSION['msg_body'] = "Fail saving profile";
			$_SESSION['msg_footer'] = "https://stlptoyect.tk";
			redirect(base_url('profile') , 'refresh');
		}

		$password= sha1(strip_tags($this->input->post('password1')));

		
	// $config['upload_path']          = '../images';
	// $config['allowed_types']        = 'jpg|png|jpeg';
	// $config['max_size']             = 3000000;
	// $config['max_width']            = 5000;
	// $config['max_height']           = 5000;

	//$this->load->library('upload', $config);

	//$file_ext1 = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

	//$file_name1 = $_FILES['image']['name'];

	//$file_name1 = "https://stlproyect.tk/images/".$file_name1;
	//$upload_data =  $this->upload->do_upload('image');


	$this->session->set_userdata(array(
			'user_name' => $username,
			'user_email' => $email,
			//'user_image' => $file_name1
	));

	$this->db->set('user_name', $username);
	$this->db->set('user_password', $password);
	$this->db->set('user_email', $email);
	//$this->db->set('user_image', $file_name1);
	$this->db->where('user_id', $user_id);
	$this->db->update('users');


	redirect(base_url('profile') , 'refresh');

	}
}
