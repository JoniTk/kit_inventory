<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller
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
        $data['content'] = "admin/addCategory_view";
        $this->load->view('admin/adminView', $data);
    }

    public function addCategory()
    {
        $post= $this->input->post();
        unset($post['submit']);
  
        if(isset($post))
        {
            $this->load->model('Mcategory');

            $this->Mcategory->add_category($post);

            $this->session->set_flashdata('feedback', "Category Added Sucessfully");
            $this->session->set_flashdata('feedback_class', 'alert-success');   
        }

        else
        {
            $this->session->set_flashdata('feedback', "Category Failed to add, Try again");
            $this->session->set_flashdata('feedback_class', 'alert-danger');
        }
        return redirect('category/listCategory');
    }

    public function listCategory()
    {
        $this->load->model('Mcategory');

        $data['category_list']=$this->Mcategory->all_category();

        $data['content'] = "admin/listCategory_view";
        $this->load->view('admin/adminView', $data);
    }


    public function editCategory($category_id)
    {
        $this->load->model('Mcategory');
        $data['editcategory_list']=$this->Mcategory->find_category($category_id);

        $data['content'] = "admin/editCategory_view";
        $this->load->view('admin/adminView', $data);
    }

    public function updateCategory($category_id)
    {
        $post=$this->input->post();

        unset($post['submit']);
 
        $this->load->model('Mcategory');
        if($this->Mcategory->update_Category($category_id,$post))
        {
            
            $this->session->set_flashdata('feedback', "Category Updated Sucessfully");
            $this->session->set_flashdata('feedback_class', 'alert-success');
                        
        }
        else
        {
            $this->session->set_flashdata('feedback', "Category not Updated, Try again");
            $this->session->set_flashdata('feedback_class', 'alert-danger');
        }
       return redirect('category/listCategory');

    }

    public function deleteCategory($category_id)
    {

        $this->load->model('Mcategory');
        if($this->Mcategory->delete_Category($category_id))
        {
           $this->session->set_flashdata('feedback', "Category Delete Sucessfully");
           $this->session->set_flashdata('feedback_class', 'alert-success');
                        
        }
        
        return redirect('category/listCategory');
    }    
}
