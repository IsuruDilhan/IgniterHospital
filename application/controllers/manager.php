<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends CI_Controller {
	public function index()
	{
        if (!isset($_SESSION['logged_in']))
        {
            $this->load->view('login/login');
        }
        else {

            if ((($_SESSION['level']) == 'manager')) {
                $this->load->view('manager/manager');
            }
            else {
                $this->load->view('login/login');
            }
        }
	}
    public function staff(){
        $positions = $this->Staff_model->get_all_positions();
        $data['positions'] = $positions;
        $this->load->view('manager/staff/index',$data);
    }
    public function admin(){
        $this->load->view('manager/admin/index');
    }
    public function addStaffInfo(){

        if(
            $this->input->post('name') != "" &&
            $this->input->post('nic') != "" &&
            $this->input->post('dob') != "" &&
            $this->input->post('contact') != "" &&
            $this->input->post('address') != "" &&
            $this->input->post('salary') != "" &&
            $this->input->post('position') != ""
        )
        {
            $data['name'] = $this->input->post('name');
            $data['nic'] = $this->input->post('nic');
            $data['contact'] = $this->input->post('contact');
            $data['address'] = $this->input->post('address');
            $data['dob'] = $this->input->post('dob');
            $data['salary'] = $this->input->post('salary');
            $data['position'] = $this->input->post('position');


            $this->Staff_model->insert_staff($data);

        }
        else{
            echo "hy";
        }
        redirect("manager");
    }

    public function addStaffCat(){

        if( $this->input->post('position')!="" && $this->input->post('salary')!="" ){

            $data['position']=$this->input->post('position');
            $data['salary']=$this->input->post('salary');

            $this->Staff_model->insert_staffCat($data);
            }
        else{

        }
        redirect("manager");
    }
    public function StaffInfo(){
        $this->load->view('manager/staff/StaffInfo');
    }
    public function EditPos(){
        $positions = $this->Staff_model->get_all_positions();
        $data['positions'] = $positions;
        $this->load->view('manager/staff/EditPos', $data);
    }
    public function EditStaff(){
        $staff = $this->Staff_model->get_all_staff();
        $data['staff'] = $staff;
        $this->load->view('manager/staff/EditStaff', $data);
    }
}