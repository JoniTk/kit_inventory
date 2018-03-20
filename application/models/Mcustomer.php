<?php
class Mcustomer extends CI_Model
{
    public function addCustomer($temp)
    {
        $data = [
            'customer_code'             => $temp['customer_code'],
            'customer_name'             => $temp['customer_name'],
            'customer_address'          => $temp['customer_address'],
            'customer_phone'            => $temp['customer_phone'],
            'customer_email'            => $temp['customer_email'],
            'customer_notes'            => $temp['customer_notes'],
            'customer_status'           => $temp['customer_status'],
            'login_id'                  => $this->session->userdata('user_id')
        ];
        $q = $this->db
            ->insert('tbl_customer',$data);
        return $q;
    }
    public function customerList()
    {
        $user_id = $this->session->userdata('user_id');
        $query = $this->db
            ->select('*')
            ->from('tbl_customer')
            ->where('login_id',$user_id)
            ->get();
        return $query->result();
    }
    public function findCustomer($customer_id)
    {
        $q = $this->db->select('*')
                                    ->where('id',$customer_id)
                                    ->get('tbl_customer');
        return $q->row();
    }
    public function updateCustomer($customer_id,$temp)
    {
        $data = [
            'customer_code'             => $temp['customer_code'],
            'customer_name'             => $temp['customer_name'],
            'customer_address'          => $temp['customer_address'],
            'customer_phone'            => $temp['customer_phone'],
            'customer_email'            => $temp['customer_email'],
            'customer_notes'            => $temp['customer_notes'],
            'customer_status'           => $temp['customer_status'],
            'login_id'                  => $this->session->userdata('user_id')
        ];

        $q = $this->db
            ->where('id',$customer_id)
            ->update('tbl_customer',$data);
        if($this->db->affected_rows()=='1')
        {
            return $q;
        }else{
            return FALSE;
        }
    }
    public function deleteCustomer($customer_id)
    {
        return  $this->db->delete('tbl_customer',['id'=>$customer_id]);
    }
}