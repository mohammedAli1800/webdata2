<?php

class Profile extends Controller {
	
    public function index() {
    	$user=$this->model('Profile');
        if(isset($_POST['add'])){
		$firstname=$_POST$['firstname'];
		$lastname=$_POST$['lastname'];
		$email=$_POST['email'];
		$phonenumber$_POST['$phonenumber'];
		$birthdate=$_POST['birthdate'];
        	$user->personalDetails($firstname,$lastname,$email,$phonenumber,$birthdate);
       
        }else{
	$this->view('profile/index');
	}
    }
}
