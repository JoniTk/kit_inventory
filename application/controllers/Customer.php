<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller
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
        $data['content'] = "admin/addCustomer_view";
        $this->load->view('admin/adminView', $data);
    }
    public function addCustomer()
    {
        $data = $this->input->post();
        $this->load->model('Mcustomer');
        if($this->Mcustomer->addCustomer($data))
        {
            $this->session->set_flashdata('feedback', "Customer Added Sucessfully");
            $this->session->set_flashdata('feedback_class', 'alert-success');
        }else{
            $this->session->set_flashdata('feedback', "Customer Failed to add, Try again");
            $this->session->set_flashdata('feedback_class', 'alert-danger');
        }
        return redirect('customer/listCustomer');
    }
    public function listCustomer()
    {
        $data['content'] = "admin/listCustomer_view";
        $this->load->model('Mcustomer');
        $data['customerList'] = $this->Mcustomer->customerList();
        $this->load->view('admin/adminView', $data);
    }
    public function editCustomer($id)
    {
        $customer_id = $id;
        $data['content'] = 'admin/editCustomer_view';
        if($customer_id){
            $this->load->model('Mcustomer');
            $data['customer'] = $this->Mcustomer->findCustomer($customer_id);
            $this->load->view('admin/adminView',$data);
        }else {
            echo "No Customer to be edited.";
        }
    }
    public function updateCustomer($customer_id)
    {
        $data = $this->input->post();
        if($data['update'])
        {
            unset($data['update']);
            $this->load->model('Mcustomer');
            //$this->expense->updateExpenseCategory($expense_id,$data);
            if($this->Mcustomer->updateCustomer($customer_id,$data))
            {
                $this->session->set_flashdata('feedback','Customer updated successfully.');
                $this->session->set_flashdata('feedback_class','alert-success');
            }else
            {
                $this->session->set_flashdata('feedback','Customer update failed, please try again.');
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('customer/listCustomer');

        }elseif($data['cancel'])
        {
            return redirect('customer/listCustomer');
        }
    }
    public function deleteCustomer($id)
    {
        $customer_id = $id;
        $this->load->model('Mcustomer');
        if($this->Mcustomer->deleteCustomer($customer_id))
        {//delete successful
            $this->session->set_flashdata('feedback','Customer deleted successfully.');
            $this->session->set_flashdata('feedback_class','alert-success');
        }else
        {//delete failed
            $this->session->set_flashdata('feedback','Customer failed, please try again.');
            $this->session->set_flashdata('feedback_class','alert-danger');
        }
        return redirect('customer/listCustomer');
    }
}