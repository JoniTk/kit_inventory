<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends MY_Controller
{
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
        $data['content'] = "admin/addUnit_view";
        $this->load->view('admin/adminView', $data);
    }

    public function addUnit()
    {
        $post= $this->input->post();
        unset($post['submit']);

        $this->load->model('Munit');
        if(isset($post))
        {
            $this->load->model('Munit');

            $this->Munit->add_unit($post);

            $this->session->set_flashdata('feedback', "Unit Added Sucessfully");
            $this->session->set_flashdata('feedback_class', 'alert-success');   
        }

        else
        {
            $this->session->set_flashdata('feedback', "Unit Failed to add, Try again");
            $this->session->set_flashdata('feedback_class', 'alert-danger');
        }
        return redirect('unit/listUnit');
    }

    public function listUnit()
    {
        $this->load->model('Munit');

        $data['unit_list']=$this->Munit->all_unit();

        $data['content'] = "admin/listUnit_view";
        $this->load->view('admin/adminView', $data);
    }


    public function editUnit($unit_id)
    {
        $this->load->model('Munit');
        $data['editunit_list']=$this->Munit->find_unit($unit_id);

        $data['content'] = "admin/editUnit_view";
        $this->load->view('admin/adminView', $data);
    }

    public function updateUnit($unit_id)
    {
        $post=$this->input->post();

        unset($post['submit']);
 
        $this->load->model('Munit');
        if($this->Munit->update_Unit($unit_id,$post))
        {
            
            $this->session->set_flashdata('feedback', "Unit Updated Sucessfully");
            $this->session->set_flashdata('feedback_class', 'alert-success');
                        
        }
        else
        {
            $this->session->set_flashdata('feedback', "Unit not Updated, Try again");
            $this->session->set_flashdata('feedback_class', 'alert-danger');
        }
       return redirect('unit/listUnit');

    }

    public function deleteUnit($unit_id)
    {

        $this->load->model('Munit');
        if($this->Munit->delete_Unit($unit_id))
        {
           $this->session->set_flashdata('feedback', "Unit Delete Sucessfully");
           $this->session->set_flashdata('feedback_class', 'alert-success');
                        
        }
        
        return redirect('unit/listUnit');
    }    
}
