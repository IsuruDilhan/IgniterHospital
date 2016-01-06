<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isuru 1
 * Date: 20/12/2015
 * Time: 22:04
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patients_model extends CI_Model
{
    var $id='';
    var $name = '';
    var $age = '';
    var $contact = '';
    var $date = '';
    var $address = '';
    var $occupation = '';
    var $gender = '';

    function get_last_id(){
        $query=$this->db->query("SELECT id FROM patients ORDER BY id DESC LIMIT 1");
        return $query->result();
    }

    function get_all_patients()
    {
        $query = $this->db->get('patients');
        return $query->result();
    }

    function insert_patient($data)
    {
        $this->name = $data['name']; // please read the below note
        $this->age = $data['age'];
        $this->gender = $data['gender'];
        $this->contact = $data['contact'];
        $this->address = $data['address'];
        $this->occupation = $data['occupation'];
        $this->date = date("Y/m/d");
        $ID=$this->get_last_id();
        if($ID) {
            foreach ($ID as $i) {
                $x = $i->id;
            }
            $x++;
            $this->id = $x;
        }
        else $this->id='AA0001';

        $this->db->insert('patients', $this);
    }

    function edit_patient($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name']; // please read the below note
        $this->age = $data['age'];
        $this->gender = $data['gender'];
        $this->contact = $data['contact'];
        $this->address = $data['address'];
        $this->occupation = $data['occupation'];
        $this->date = $data['date'];
        $this->db->where('id', $this->id);
        $this->db->update('patients', $this);
    }

    function delete_patient($id)
    {

        $this->db->delete('patients', array('id' => $id));
    }

    function get_entry($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('patients', 1);
        return $query->result();
    }
}