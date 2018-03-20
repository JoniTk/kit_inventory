<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends MY_Controller
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
        $data['content'] = "admin/addSupplier_view";
        $this->load->view('admin/adminView', $data);
    }
    public function addSupplier()
    {
        $data = $this->input->post();
        $this->load->model('Msupplier');
        if($this->Msupplier->addSupplier($data))
        {
            $this->session->set_flashdata('feedback', "Supplier Added Sucessfully");
            $this->session->set_flashdata('feedback_class', 'alert-success');
        }else{
            $this->session->set_flashdata('feedback', "Supplier Failed to add, Try again");
            $this->session->set_flashdata('feedback_class', 'alert-danger');
        }
        return redirect('supplier/listSupplier');
    }
    public function listSupplier()
    {
        $data['content'] = "admin/listSupplier_view";
        $this->load->model('Msupplier');
        $data['supplierList'] = $this->Msupplier->supplierList();
        $this->load->view('admin/adminView', $data);
    }
    public function editSupplier($id)
    {
        $supplier_id = $id;
        $data['content'] = 'admin/editSupplier_view';
        if($supplier_id){
            $this->load->model('Msupplier');
            $data['supplier'] = $this->Msupplier->findSupplier($supplier_id);
            $this->load->view('admin/adminView',$data);
        }else {
            echo "No Supplier to be edited.";
        }
    }
    public function updateSupplier($supplier_id)
    {
        $data = $this->input->post();
        if($data['update'])
        {
            unset($data['update']);
            $this->load->model('Msupplier');
            //$this->expense->updateExpenseCategory($expense_id,$data);
            if($this->Msupplier->updateSupplier($supplier_id,$data))
            {
                $this->session->set_flashdata('feedback','Supplier updated successfully.');
                $this->session->set_flashdata('feedback_class','alert-success');
            }else
            {
                $this->session->set_flashdata('feedback','Supplier update failed, please try again.');
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('supplier/listSupplier');

        }elseif($data['cancel'])
        {
            return redirect('supplier/listSupplier');
        }
    }
    public function deleteSupplier($id)
    {
        $supplier_id = $id;
        $this->load->model('Msupplier');
        if($this->Msupplier->deleteSupplier($supplier_id))
        {//delete successful
            $this->session->set_flashdata('feedback','Supplier deleted successfully.');
            $this->session->set_flashdata('feedback_class','alert-success');
        }else
        {//delete failed
            $this->session->set_flashdata('feedback','Supplier failed, please try again.');
            $this->session->set_flashdata('feedback_class','alert-danger');
        }
        return redirect('supplier/listSupplier');
    }
}