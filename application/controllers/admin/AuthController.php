<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function login()
	{

        if(@$_SESSION['is_login'] == true){

            if($_SESSION['type'] == 'admin'){
                redirect(base_url()."admin/dashboard");
            }

            redirect(base_url()."student/dashboard");

        }

        return $this->slice->view('admin.auth.form');
    }
    
    public function auth()
    {


        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $admin = AdminModel::where('username', $username)->get()->first();


        if(!$admin){
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(403)
            ->set_output(json_encode(array(
                    'text' => 'Username not found.'
            )));

        }

        if(!password_verify($password, $admin->password)){
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(403)
            ->set_output(json_encode(array(
                    'text' => 'Wrong password.'
            )));
        }

        $_SESSION['user'] = $admin->toArray();
        $_SESSION['is_login'] = true;
        $_SESSION['type'] = 'admin';

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                    'text' => 'Login success'
            )));
       
    }

    public function logout()
    {
        $_SESSION = [];
        redirect(base_url()."admin/login");
    }
}
