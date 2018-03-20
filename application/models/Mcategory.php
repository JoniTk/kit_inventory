 <?php

class Mcategory extends CI_Model
{
    public function all_category()
    {
        $user_id= $this->session->userdata('user_id');
            $query=$this->db
                                ->select('*')
                                ->from('tbl_category')
                                //->limit($limit,$offset)
                                ->get();
       

            return $query->result();
    }

    public function add_category($array)
    {
        
        return $this->db->insert('tbl_category',$array);
    }

    public function find_category($array_id)
    {
        $q = $this->db  
                    ->select('*')
                    ->where('id',$array_id)
                    ->get('tbl_category');

                   
        return $q->row();

    }

    public function update_category($category_id, Array $category)
    {
        
       $q= $this->db->where('id',$category_id)
                        ->update('tbl_category',$category);

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

    public function delete_category($category_id)
    {
        $q = $this->db->delete('tbl_category',['id'=>$category_id]);
        

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
