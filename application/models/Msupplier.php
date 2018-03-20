<?php
class Msupplier extends CI_Model
{
    public function addSupplier($temp)
    {
        $data = [
            'supplier_code'     => $temp['supplier_code'],
            'supplier_name'     => $temp['supplier_name'],
            'supplier_address'  => $temp['supplier_address'],
            'contact_person'    => $temp['contact_person'],
            'supplier_phone'    => $temp['supplier_phone'],
            'supplier_notes'    => $temp['supplier_notes'],
            'supplier_status'   => $temp['supplier_status'],
            'login_id'          => $this->session->userdata('user_id')
        ];
        $q = $this->db
            ->insert('tbl_supplier', $data);
        return $q;
    }
    public function supplierList()
    {
        $user_id = $this->session->userdata('user_id');
        $query = $this->db
                            ->select('*')
                            ->from('tbl_supplier')
                            ->where('login_id',$user_id)
                            ->get();
        return $query->result();
    }
    public function findSupplier($supplier_id)
    {
        $q = $this->db->select('*')
                                    ->where('id',$supplier_id)
                                    ->get('tbl_supplier');
        return $q->row();
    }
    public function updateSupplier($supplier_id,$temp)
    {
        $data = [
            'supplier_code'     => $temp['supplier_code'],
            'supplier_name'     => $temp['supplier_name'],
            'supplier_address'  => $temp['supplier_address'],
            'contact_person'    => $temp['contact_person'],
            'supplier_phone'    => $temp['supplier_phone'],
            'supplier_notes'    => $temp['supplier_notes'],
            'supplier_status'   => $temp['supplier_status'],
            'login_id'          => $this->session->userdata('user_id')
        ];
        $q = $this->db
            ->where('id',$supplier_id)
            ->update('tbl_supplier',$data);
        if($this->db->affected_rows()=='1')
        {
            return $q;
        }else{
            return FALSE;
        }
    }
    public function deleteSupplier($supplier_id)
    {
        return  $this->db->delete('tbl_supplier',['id'=>$supplier_id]);
    }
}