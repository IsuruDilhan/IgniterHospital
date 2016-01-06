<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isuru 1
 * Date: 28/12/2015
 * Time: 10:32
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_model extends CI_Model
{
    var $id = '';
    var $name = '';
    var $nic = '';
    var $contact = '';
    var $date = '';
    var $dob = '';
    var $address = '';
    var $position = '';
    var $salary = '';


    function get_last_id()
    {
        $query = $this->db->query("SELECT id FROM staff ORDER BY id DESC LIMIT 1");
        return $query->result();
    }

    function insert_staff($data)
    {
        $this->name = $data['name']; // please read the below note
        $this->nic = $data['nic'];
        $this->dob = $data['dob'];
        $this->contact = $data['contact'];
        $this->address = $data['address'];
        $this->position = $data['position'];
        $this->salary = $data['salary'];
        $this->date = date("Y-m-d");
        $ID = $this->get_last_id();
        if ($ID) {
            foreach ($ID as $i) {
                $x = $i->id;
            }
            $x++;
            $this->id = $x;
        } else $this->id = 'GAM0001';

        $this->db->insert('staff', $this);
    }

    function insert_staffCat($data){
        $this->position=$data['position'];
        $this->salary=$data['salary'];
        $this->db->set('position', $this->position);
        $this->db->set('salary', $this->salary);
        $this->db->insert('staff_cat');
    }
    function get_all_positions()
    {
        $query = $this->db->get('staff_cat');
        return $query->result();
    }
    function get_all_staff()
    {
        $query = $this->db->get('staff');
        return $query->result();
    }
}