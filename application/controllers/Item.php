<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends MY_Controller
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
        $this->load->model('Mcategory');
        $this->load->model('Munit');
        $data['category']=$this->Mcategory->all_category();
        $data['unit']=$this->Munit->all_unit();

       // $data['category']= json_encode($data_category);
        //echo json_encode($data_unit);

        $data['content'] = "admin/addItem_view";
        $this->load->view('admin/adminView', $data);
    }

    public function addItem()
    {
        $post= $this->input->post();
        unset($post['submit']);

        $this->load->model('Mitem');
        if(isset($post))
        {
            $this->load->model('Mitem');

            $this->Mitem->add_item($post);

            $this->session->set_flashdata('feedback', "Item Added Sucessfully");
            $this->session->set_flashdata('feedback_class', 'alert-success');   
        }

        else
        {
            $this->session->set_flashdata('feedback', "Item Failed to add, Try again");
            $this->session->set_flashdata('feedback_class', 'alert-danger');
        }
         return redirect('item/listItem');
    }

    public function listItem()
    {
        $this->load->model('Mitem');

        $data['item_list']=$this->Mitem->all_item();

        $data['content'] = "admin/listItem_view";
        $this->load->view('admin/adminView', $data);
    }


    public function editItem($item_id)
    {
        $this->load->model('Mcategory');
        $this->load->model('Munit');
        $data['category']=$this->Mcategory->all_category();
        $data['unit']=$this->Munit->all_unit();

        $this->load->model('Mitem');
        $data['edititem_list']= $this->Mitem->find_item($item_id);

        $data['content'] = "admin/editItem_view";
        $this->load->view('admin/adminView', $data);
    }

    public function updateItem($item_id)
    {
        $post=$this->input->post();

        unset($post['submit']);
 
        $this->load->model('Mitem');
        if($this->Mitem->update_Item($item_id,$post))
        {
            
            $this->session->set_flashdata('feedback', "Item Updated Sucessfully");
            $this->session->set_flashdata('feedback_class', 'alert-success');
                        
        }
        else
        {
            $this->session->set_flashdata('feedback', "Item not Updated, Try again");
            $this->session->set_flashdata('feedback_class', 'alert-danger');
        }
       return redirect('item/listItem');

    }

    public function deleteItem($item_id)
    {

        $this->load->model('Mitem');
        if($this->Mitem->delete_Item($item_id))
        {
           $this->session->set_flashdata('feedback', "Item Delete Sucessfully");
           $this->session->set_flashdata('feedback_class', 'alert-success');
                        
        }
        
        return redirect('item/listItem');
    }    
}
