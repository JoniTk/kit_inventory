 <?php

class Mitem extends CI_Model
{
    public function all_item()
    {
        $user_id= $this->session->userdata('user_id');
            $query=$this->db
                                ->select('*')
                                ->from('tbl_item')
                                //->limit($limit,$offset)
                                ->get();
       

            return $query->result();
    }

    public function add_item($array)
    {
        
        return $this->db->insert('tbl_item',$array);
    }

    public function find_item($array_id)
    {
        $q = $this->db  
                    ->select('*')
                    ->where('id',$array_id)
                    ->get('tbl_item');

                   
        return $q->row();

    }

    public function update_Item($item_id, Array $item)
    {
        
       $q= $this->db->where('id',$item_id)
                        ->update('tbl_item',$item);
          
        if($this->db->affected_rows()==1)
        {
            return True;
        }
        else
        {
            return False;
        }

          
    }

    public function delete_Item($item_id)
    {
        $q = $this->db->delete('tbl_item',['id'=>$item_id]);
        

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
