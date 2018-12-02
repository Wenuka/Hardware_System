<?php
/**
 * Created by PhpStorm.
 * User: Yasara
 * Date: 12/2/2018
 * Time: 9:20 AM
 */

class InquiryController extends CI_Controller
{
    public function getAgents()
    {
        $this->load->model('AdminModel');
        $this->load->library('session');
        $this->load->library('Constants');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$admin && isset($_SESSION['admin_no'])) {
                $admin_id = $_SESSION['admin_no'];
                //Get agent data
                $agentdata = $this->AdminModel->getAgentData($admin_id);

//                $data = array('agentdata' => $agentdata );
                echo json_encode($agentdata);
            } else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }

}