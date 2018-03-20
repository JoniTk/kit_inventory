<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function index()
    {
        if ($this->session->userdata('user_id')) {
            return redirect('welcome');
        }
        $data['content'] = "login";
        $this->load->view('public/temp_login', $data);
    }
    public function admin_login()
    {
        $this->load->library('form_validation');
        if($this->input->post())
        {
            //$this->form_validation->set_rules('username','username','required|trim');
            //$this->form_validation->set_rules('password','password','required');
           // $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //print_r($password);
                //exit();
                $this->load->model('Mlogin');
                $login = $this->Mlogin->loginCheck($username,$password);
                //echo "<pre>";
                //print_r($login);exit();
                //$this->loginmodel->loginCheck($username,$password);
                if($login){
                    $this->session->set_userdata('user_id', $login->id);
                    $this->session->set_userdata('username',$login->username);
                    $this->session->set_userdata('userimage',$login->user_image);
                    return redirect('welcome');
                }else{
                    //echo "log in failed";
                    return redirect('login');
                }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('user_id');
        return redirect('login');
    }
}