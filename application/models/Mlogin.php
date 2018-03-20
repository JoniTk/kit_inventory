<?php
class Mlogin extends CI_Model
{
    public function loginCheck($username,$password)
    {
        $query = $this->db
                            ->where(['username'=> $username, 'user_pass'=> $password])
                            ->from('tbl_login')
                            ->get();
        if($query->num_rows())
        {
            return $query->row();
        }else{
            return false;
        }
    }
}