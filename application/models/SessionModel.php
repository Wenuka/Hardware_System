<?php

class SessionModel extends CI_Model
{
    public function checkSessionAdmin()
    {
        $this->load->library('session');
        $this->load->library('Constants');
        if (isset($_SESSION['usertype'])) {
            if (($_SESSION['usertype'] == Constants::$admin) && isset($_SESSION['admin_no'])) {
                return $_SESSION['admin_no'];
            }
            else{
                return null;
            }
        }
    }

}