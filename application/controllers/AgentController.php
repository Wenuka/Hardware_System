<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentController extends CI_Controller
{
    public static $admin = "Ad";
    public static $agent = "Ag";
    public static $rep = "Rp";
    public static $shop = "Sh";

    public static $adminTbl = "admin";
    public static $agentTbl = "agent";
    public static $repTbl = "rep";
    public static $shopTbl = "shop";

    public function getSessionAgentID()
    {
        $this->load->model('SessionModel');
        $agentID = $this->SessionModel->checkSessionAgent();
        return $agentID;
    }

    public function addNewRep()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        $this->load->model('SessionModel');

        $agentID = $this->getSessionAgentID();

        if ($agentID == null) {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('AgentModel');
        $this->load->model('LoginModel');

        if (isset($_POST)) {
            $data1 = array(
                'repName' => $_POST['repName'],
                'email' => $_POST['email'],
                'nic' => $_POST['nic'],
                'repCode' => $_POST['repCode'],
                'contact' => $_POST['contact'],
                'agentID' => $agentID
            );
            $rep_id = $this->AgentModel->addRep($data1);
//            $username = $this->testUsername($_POST['repName']);
//            $password = "pass" . rand(0, 10000);
//            $data3 = array(
//                'username' => $username,
//                'password' => $password,
//                'usertype' => 'Rp',
//                'foreignid' => $rep_id
//            );
//            $this->LoginModel->addLogin($data3);
            $_SESSION['alert'] = 'You have succesfully added ' . $_POST['repName'] . ' to rep id #' . $rep_id . '.<br>Please see agent details for more info.';
            $this->viewReps();

        }
    }

    public function addNewShop()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        $this->load->model('SessionModel');

        $agentID = $this->getSessionAgentID();
        print_r($agentID);
        if ($agentID == null) {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('AgentModel');
        $this->load->model('LoginModel');

        if (isset($_POST)) {

            $data1 = array(
                'shopCode' => $_POST['shopCode'],
                'email' => $_POST['email'],
                'ownerName' => $_POST['ownerName'],
                'shopName' => $_POST['shopName'],
                'tele' => $_POST['tele'],
                'mobile' => $_POST['mobile'],
                'creditLimit' => $_POST['creditLimit'],
                'repID' =>$_POST['repCode'],
                'riskScore' =>$_POST['riskScore'],
                'size' =>$_POST['size']
            );
            $shop_id = $this->AgentModel->addShop($data1);
            $_SESSION['alert'] = 'You have succesfully added ' . $_POST['shopName'] . ' to shop id #' . $shop_id . '.<br>Please see shop details for more info.';
            $this->viewShops();

        }
    }

    public function viewReps()
    {
        $this->load->model('AgentModel');
        $this->load->library('session');
        $this->load->library('Constants');

        $agentID = $this->getSessionAgentID();

        if ($agentID == null) {
            $_SESSION['error'] = 'Something is wrong. Please contact your system administrator.';
            redirect();
        }

        $repdata = $this->AgentModel->getRepData($agentID);
        $data = array('repdata' => $repdata );
        $this->load->view('agent/agentRepView', $data);
    }

    public function viewShops()
    {
        $this->load->model('AgentModel');
        $this->load->library('session');
        $this->load->library('Constants');

        $agentID = $this->getSessionAgentID();

        if ($agentID == null) {
            $_SESSION['error'] = 'Something is wrong. Please contact your system administrator.';
            redirect();
        }

        $shopdata = $this->AgentModel->getShopData($agentID);
        $data = array('shopdata' => $shopdata );
        $this->load->view('agent/agentShopView', $data);
    }


    public function viewInquiries()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$agent && isset($_SESSION['agent_no'])) {
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('LoginModel');
                $this->load->model('AgentModel');
                $agentdata = $this->LoginModel->agentData($agent_id)[0];
                $inquirydata = $this->AgentModel->allInquiryData($agent_id);
                $workdata = $this->AgentModel->allWorkData($agent_id);
                $data = array('agentdata' => $agentdata, 'inquirydata' => $inquirydata, 'workdata' => $workdata);
                $this->load->view('agent/inquiry', $data);
            } else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code C004.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }

    public function editMyAccount()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['login_id']) && isset($_SESSION['agent_no'])) {
            if ($_SESSION['usertype'] == Constants::$agent) {
                $this->load->helper('form');
                $this->load->helper('url');
                $data1 = array();
                $data2 = array();

                $this->load->model('AgentModel');
                $this->load->model('LoginModel');

                if (isset($_POST['fullname'])) {
                    $data1 = array(
                        'agentName' => $_POST['fullname'],
                        'email' => $_POST['email'],
                        'contact' => $_POST['tele']
                    );
                    $data2 = array(
                        //'username'=> $_POST['username'],
                        'password' => $_POST['inputPassword'],
                    );

                    $login_id = $_SESSION['login_id'];
                    $agent_id = $_SESSION['agent_no'];
                    // $this->AccountModel->logPersonalDetails($owner_id);
                    $this->LoginModel->editAccountDetails($data2, $login_id);
                    $this->AgentModel->editAgentPersonalDetails($data1, $agent_id);
                }
                $this->viewAgent();
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C005.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    public function testUsername($username)
    {
        $this->load->model('LoginModel');
        $usernametest = $this->LoginModel->checkName($username);
        $count = 0;
        if (sizeof($usernametest) == 0) {
            return $username;
        } else {
            do {
                $count++;
                $username = $username . "" . rand(1, 9);
                $usernametest = $this->LoginModel->checkName($username);
                if (sizeof($usernametest) == 0) {
                    $count = 30;
                }
            } while (sizeof($usernametest) != 0 && $count < 20);
            if ($count >= 20) {
                do {
                    $username = "usr" . time();
                    $usernametest = $this->LoginModel->checkName($username);
                } while (sizeof($usernametest) != 0);
            }
            return $username;
        }
    }


}