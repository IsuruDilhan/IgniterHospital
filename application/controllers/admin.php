<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        if (!isset($_SESSION['logged_in']))
        {
            $this->load->view('login/login');
        }
        else {

            if ((($_SESSION['level']) == 'admin')) {
                $this->load->view('admin/admin');
            }
            else {
                $this->load->view('login/login');
            }
        }
	}
    public function patients(){
        $this->load->view('admin/patient/index');
    }
    public function prescription(){
        $this->load->view('admin/prescription/index');
    }

    public function addPatients()
    {

        $data['patients'] = "";
        $this->load->view('admin/patient/addPatients');

    }

    public function addPatientInfo(){

        if(
            $this->input->post('name') != "" &&
            $this->input->post('age') != "" &&
            $this->input->post('occupation') != "" &&
            $this->input->post('contact') != "" &&
            $this->input->post('address') != "" &&
            $this->input->post('gender') != ""
        )
        {
            $data['name'] = $this->input->post('name');
            $data['age'] = $this->input->post('age');
            $data['contact'] = $this->input->post('contact');
            $data['address'] = $this->input->post('address');
            $data['gender'] = $this->input->post('gender');
            $data['occupation'] = $this->input->post('occupation');


            $this->Patients_model->insert_patient($data);

        }
        else{

        }
       redirect("admin");

    }

    public function PatientInfo(){
        $patients = $this->Patients_model->get_all_patients();
        $data['patients'] = $patients;
        $this->load->view('admin/patient/PatientInfo', $data);
    }
    public function editPatientInfo(){

        if(
            $this->input->post('id') != "" &&
            $this->input->post('name') != "" &&
            $this->input->post('age') != "" &&
            $this->input->post('occupation') != "" &&
            $this->input->post('contact') != "" &&
            $this->input->post('address') != "" &&
           $this->input->post('date') != "" &&
            $this->input->post('gender') != ""
        )
        {
            $data['id'] = $this->input->post('id');
            $data['name'] = $this->input->post('name');
            $data['age'] = $this->input->post('age');
            $data['contact'] = $this->input->post('contact');
            $data['address'] = $this->input->post('address');
            $data['gender'] = $this->input->post('gender');
            $data['occupation'] = $this->input->post('occupation');
            $data['date'] = $this->input->post('date');

            $this->Patients_model->edit_patient($data);


        }
        else{

        }
        redirect('admin','refresh');

    }

    public function DeletePatient(){
        $id=$_POST['ID'];
        $this->Patients_model->delete_patient($id);
    }
}
