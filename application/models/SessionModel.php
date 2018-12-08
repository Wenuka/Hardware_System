<?php

class SessionModel extends CI_Model
{
    public function checkSessionAdmin()
    {
        $this->load->library('session');
        $this->load->library('Constants');
        if (!isset($_SESSION['usertype'])) {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
        if (($_SESSION['usertype'] != Constants::$admin) && !isset($_SESSION['admin_no'])) {
            $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code C004.";
            redirect();
        }
        return $_SESSION['admin_no'];
    }

    public function checkSessionAgent()
    {
        $this->load->library('session');
        $this->load->library('Constants');
        if (!isset($_SESSION['usertype'])) {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
        if (($_SESSION['usertype'] != Constants::$agent) && !isset($_SESSION['agent_no'])) {
            $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code C004.";
            redirect();
        }
        return $_SESSION['agent_no'];
    }

}