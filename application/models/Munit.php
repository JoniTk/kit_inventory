 <?php

class Munit extends CI_Model
{
    public function all_unit()
    {
        $user_id= $this->session->userdata('user_id');
            $query=$this->db
                                ->select('*')
                                ->from('tbl_unit')
                                //->limit($limit,$offset)
                                ->get();
       

            return $query->result();
    }

    public function add_unit($array)
    {
        
        return $this->db->insert('tbl_unit',$array);
    }

    public function find_unit($array_id)
    {
        $q = $this->db  
                    ->select('*')
                    ->where('id',$array_id)
                    ->get('tbl_unit');

                   
        return $q->row();

    }

    public function update_Unit($unit_id, Array $unit)
    {
        
       $q= $this->db->where('id',$unit_id)
                        ->update('tbl_unit',$unit);

           //print_r();
          
        if($this->db->affected_rows()==1)
        {
            return True;
        }
        else
        {
            return False;
        }

          
    }

    public function delete_Unit($unit_id)
    {
        $q = $this->db->delete('tbl_unit',['id'=>$unit_id]);
        

        if ($q)
        {
            return True;
        }
        else
        {
            return False;
        }
    }
}
