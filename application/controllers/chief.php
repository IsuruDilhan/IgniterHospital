<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isuru 1
 * Date: 19/12/2015
 * Time: 10:18
 */
if(!defined('BASEPATH')){exit("Direct scripts are not allowed");}

class Chief extends CI_Controller{
    public function index(){
        if (!isset($_SESSION['logged_in']))
        {
            $this->load->view('login/login');
        }
        else
        $this->load->view('chief/chief');
    }
}