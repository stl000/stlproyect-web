<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
  public function verify_password($password1, $password2)
  {
    if($password1==$password2){
      return "success";
    }else{
      return "error";
    }
  }


}
