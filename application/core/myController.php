<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isuru 1
 * Date: 24/12/2015
 * Time: 21:11
 */
class myController extends CI_Controller
{

    public function checkUserSession()
    {
        if($this->session->userdata("unverified") != FALSE)
        {
            redirect("verify_user");
        }
        return true;
    }

}