<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('user_id'))
        {
            return redirect('login');
        }
    }
    public function index()
    {
        $data['content'] = "index";
        $this->load->view('admin/adminView',$data);
    }
}
