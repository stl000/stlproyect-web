<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

  	public function index()
  	{
		// $result=$this->session->session_destroy();
		// if(!isset($_SESSION['user_id'])){
		// 	$result = true;
		// }else{
		//  	$result = false;
		// }
		$result=session_destroy();
		if ($result == true){
			echo "True";
		}else {
			echo "False";
		} 	}
}