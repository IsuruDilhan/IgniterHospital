<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isuru 1
 * Date: 27/12/2015
 * Time: 09:26
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        if (!isset($_SESSION['logged_in'])) {
            $this->load->view('login/login');
        } else {
                $this->load->view('profile/index');
        }
    }
}