<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    public function login($username, $password) {
        $query = $this->db->get_where('user_login', array('username'=>$username));
        if($query->num_rows()>0){
            foreach($query->result() as $row) {
                if(password_verify($password, $row->password)) {
                    $data = array(
                        'username'  => $row->username,
                        'name'      => $row->name,
                        'access'    => $row->access,
                        'logged_in' => TRUE
                    );
                } else {
                    return FALSE;
                }
            }
            $this->session->set_userdata($data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
