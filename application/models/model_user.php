<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isuru 1
 * Date: 18/12/2015
 * Time: 22:16
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_user extends CI_Model
{

    public function check_user($data){
        $query = $this->db->get_where('users',$data);
        return $query;
    }

    public function get_user($data){
        $query = $this->db->get_where('users',$data);
        return $query;
    }

}
