<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller
{

    public function getSessionAdminID()
    {
        $this->load->model('SessionModel');
        $adminID = $this->SessionModel->checkSessionAdmin();
        return $adminID;
    }

    public function viewAdmin()
    {
        $this->load->model('AdminModel');
        $this->load->library('session');
        $admin_id = $_SESSION['admin_no'];
        // Get admin data
        $admindata = $this->AdminModel->adminData($admin_id)[0];
        $logindata = $this->AdminModel->adminLoginData($admin_id)[0];
        
        if(!$admindata->active)
        {
            $_SESSION['error'] = "Sorry, This admin is currently inactive";
            //redirect();
        }
        $_SESSION['login_id'] = $logindata->userID;
        $data = array('admindata' => $admindata, 'logindata' => $logindata);

        $this->load->view('admin/adminDetails', $data);
    }



    public function viewAgents()
    {
        $this->load->model('AdminModel');
        $this->load->library('session');
        $this->load->library('Constants');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$admin && isset($_SESSION['admin_no'])) {
                $admin_id = $_SESSION['admin_no'];
                //Get agent data
                $agentdata = $this->AdminModel->getAgentData($admin_id);

                $data = array('agentdata' => $agentdata );
                $this->load->view('admin/adminAgentView', $data);
            } else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }

    public function viewOrderDetail(){
        $this->load->model('OrderModel');
        $agentID = $_POST['agentID']; //merchant code
        $equipid = $_POST['transactionId'];
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$admin && isset($_SESSION['admin_no'])) {
                $admin_id = $_SESSION['admin_no'];
                $grouporderdata = $this->OrderModel->retreiveOrderDetails($admin_id,$agentID,$equipid);
                echo json_encode($grouporderdata);
            }else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
        //get Order data group by agent


    }

    public function viewReps()
    {
        $this->load->model('AdminModel');
        $this->load->library('session');
        $this->load->library('Constants');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$admin && isset($_SESSION['admin_no'])) {
                $admin_id = $_SESSION['admin_no'];
                //Get agent data
                $repdata = $this->AdminModel->getRepData($admin_id);

                $data = array('repdata' => $repdata );
                $this->load->view('admin/adminRepView', $data);
            } else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }

    public function viewShops()
    {
        $this->load->model('AdminModel');
        $this->load->library('session');
        $this->load->library('Constants');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$admin && isset($_SESSION['admin_no'])) {
                $admin_id = $_SESSION['admin_no'];
                //Get agent data
                $shopdata = $this->AdminModel->getShopData($admin_id);

                $data = array('shopdata' => $shopdata );
                $this->load->view('admin/adminShopView', $data);
            } else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }

    public function viewContact()
    {
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if (($_SESSION['usertype'] == "admin" || $_SESSION['usertype'] == "superadmin") && isset($_SESSION['admin_no'])) {
                $admin_id = $_SESSION['admin_no'];
                $this->load->model('LoginModel');
                $admindata = $this->LoginModel->adminData($admin_id)[0];
                $data = array('admindata' => $admindata);
                $this->load->view('admin/contact', $data);
            } else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code C004.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }

    public function viewInquiries()
    {
        $this->load->library('session');
        $this->load->library('Constants');
        if (isset($_SESSION['usertype'])) {
            if (($_SESSION['usertype'] == Constants::$admin) && isset($_SESSION['admin_no'])) {
                $admin_id = $_SESSION['admin_no'];
                // $this->load->model('LoginModel');
                $this->load->model('AdminModel');
                $admindata = $this->AdminModel->adminData($admin_id)[0];
                $inquirydata = $this->AdminModel->inquiryData();
                $data = array('admindata' => $admindata, 'inquirydata' => $inquirydata);
                $this->load->view('admin/inquiry', $data);
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
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['login_id']) && isset($_SESSION['admin_no'])) {
            if ($_SESSION['usertype'] == "admin") {
                $this->load->helper('form');
                $this->load->helper('url');
                $data1 = array();
                $data2 = array();

                $this->load->model('AdminModel');
                $this->load->model('LoginModel');

                if (isset($_POST['fullname'])) {
                    $data1 = array(
                        'name' => $_POST['fullname'],
                        'email' => $_POST['email'],
                        'mobile' => $_POST['tele']
                    );
                    $data2 = array(
                        //'username'=> $_POST['username'],
                        'password' => $_POST['inputPassword'],
                    );

                    $login_id = $_SESSION['login_id'];
                    $admin_id = $_SESSION['admin_no'];
                    // $this->AccountModel->logPersonalDetails($owner_id);
                    $this->LoginModel->editAccountDetails($data2, $login_id);
                    $this->AdminModel->editAdminPersonalDetails($data1, $admin_id);
                }
                $this->viewAdmin();
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C005.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    public function addInquiry()
    {
        $this->load->library('session');
        $this->load->library('Constants');
        if (isset($_SESSION['usertype']) && isset($_SESSION['admin_no'])) {
            if ($_SESSION['usertype'] == Constants::$admin) {
                $this->load->helper('form');
                $this->load->helper('url');
                $admin_id = $_SESSION['admin_no'];
                $this->load->model('LoginModel');
                if (isset($_POST['agent_id']) && isset($_POST['description'])) {
                    $data1 = array(
                        'inquiryType'=>'AdAg',
                        'senderID' => $admin_id,
                        'receiverID' => $_POST['agent_id'],
                        'message' => $_POST['description']
                    );
                    $this->LoginModel->addInquiry($data1);
                    redirect($_SERVER['HTTP_REFERER']);
                    $_SESSION['alert'] = 'You have succesfully added Inquiry to Agent ID ' . $_POST['agent_id'] . ' with description "' . $_POST['description'] . '".';

                }
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C005.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }
    public function addPart()
    {
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['admin_no'])) {
            if ($_SESSION['usertype'] == "admin" || $_SESSION['usertype'] == "superadmin") {
                $this->load->helper('form');
                $this->load->helper('url');
                $admin_id = $_SESSION['admin_no'];
                $this->load->model('AdminModel');
                if (isset($_POST['part']) && isset($_POST['description'])) {
                    $data1 = array(
                        'part' => $_POST['part'],
                        'description' => $_POST['description']
                    );
                    $this->AdminModel->addPart($data1);
                    $_SESSION['alert'] = 'You have succesfully added part "' . $_POST['part'] . '" with description "' . $_POST['description'] . '".';
                }
                $this->deleteEntries();
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C005.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }
    public function addCode()
    {
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['admin_no'])) {
            if ($_SESSION['usertype'] == "admin" || $_SESSION['usertype'] == "superadmin") {
                $this->load->helper('form');
                $this->load->helper('url');
                $admin_id = $_SESSION['admin_no'];
                $this->load->model('AdminModel');
                if (isset($_POST['code']) && isset($_POST['description'])) {
                    $data1 = array(
                        'code' => $_POST['code'],
                        'description' => $_POST['description']
                    );
                    $this->AdminModel->addCode($data1);
                    $_SESSION['alert'] = 'You have succesfully added code "' . $_POST['code'] . '" with description "' . $_POST['description'] . '".';
                }
                $this->deleteEntries();
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C005.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    public function addNewAgent()
    {
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['admin_no'])) {
            if ($_SESSION['usertype'] == "Ad") {
                $this->load->helper('form');
                $this->load->helper('url');
                $admin_id = $_SESSION['admin_no'];
                $this->load->model('AdminModel');
                $this->load->model('LoginModel');
                if (isset($_POST['fullname'])) {
                    $data1 = array(
                        'agentName' => $_POST['fullname'],
                        'email' => $_POST['email'],
                        'address' => $_POST['address'],
                        'province' => $_POST['province'],
                        'town' => $_POST['town'],
                        'agentCode' => $_POST['agentCode'],
                        'contact' => $_POST['mobile'],
                        'adminID' => $admin_id
                    );
                    $agent_id = $this->AdminModel->addAgent($data1);
                    $username = $this->testUsername($_POST['fullname']);
                    $password = "pass" . rand(0, 10000);
                    $data3 = array(
                        'username' => $username,
                        'password' => $password,
                        'usertype' => 'Ag',
                        'foreignid' => $agent_id
                    );
                    $this->LoginModel->addLogin($data3);
                    $_SESSION['alert'] = 'You have succesfully added ' . $_POST['fullname'] . ' to agent id #' . $agent_id . '.<br>Initial username is ' . $username . ' and password is ' . $password . '. <br>Please see agent details for more info.';
                }
                $this->viewAgents();
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C005.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    public function deleteWork()
    {
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['admin_no'])) {
            if ($_SESSION['usertype'] == "admin" || $_SESSION['usertype'] == "superadmin") {
                $this->load->helper('form');
                $this->load->helper('url');
                $admin_id = $_SESSION['admin_no'];
                $this->load->model('AdminModel');
                $this->load->model('LoginModel');
                if (isset($_POST['work_id'])) {
                    $data1 = array(
                        'delete' => 1
                    );
                    $this->AdminModel->removeWork($data1, $_POST['work_id']);
                    $_SESSION['alert'] = 'You have succesfully deleted work with WORK ID #' . $_POST['work_id'] . '.';
                }
                $this->deleteEntries();
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C005.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }
    public function deleteFilterDetails($filter_id)
    {
        $data1 = array('show' => 0);
        $data2 = array('delete' => 1);
        $this->AdminModel->removeFilter($data1, $filter_id);
        $this->AdminModel->removeFilterWork($data2, $filter_id);
        $this->AdminModel->removeFilterInquiry($data2, $filter_id);
        $this->AdminModel->removeFilterLogin($filter_id);
        $customer = $this->AdminModel->customerId($filter_id);
        if (isset($customer[0]->customer_id)) {
            $customer_id = $customer[0]->customer_id;
            $this->AdminModel->removeCustomer($data1,$customer_id);
            $_SESSION['alert'] = 'You have succesfully deleted filter with Filter ID #' . $filter_id . '.';
        }
        else{
            $_SESSION['alert'] = 'You have succesfully deleted filter with Filter ID #' . $filter_id . ' if there is any. <br>However we did not find any customer attached to that filter.';
        }
    }
    public function deleteFilter()
    {
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['admin_no'])) {
            if ($_SESSION['usertype'] == "admin" || $_SESSION['usertype'] == "superadmin") {
                $this->load->helper('form');
                $this->load->helper('url');
                $admin_id = $_SESSION['admin_no'];
                $this->load->model('AdminModel');
                $this->load->model('LoginModel');
                if (isset($_POST['filter_id'])) {
                    $this->deleteFilterDetails($_POST['filter_id']);
                }
                $this->deleteEntries();
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C005.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }
    }
    public function deleteAgent()
    {
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['admin_no'])) {
            if ($_SESSION['usertype'] == "admin" || $_SESSION['usertype'] == "superadmin") {
                $this->load->helper('form');
                $this->load->helper('url');
                $admin_id = $_SESSION['admin_no'];
                $this->load->model('AdminModel');
                $this->load->model('LoginModel');
                if (isset($_POST['agent_id'])) {
                    $data1 = array('show' => 0);
                    $data2 = array('delete' => 1);
                    $this->AdminModel->removeAgent($data1, $_POST['agent_id']);
                    $this->AdminModel->removeAgentInquiry($data2, $_POST['agent_id']);
                    $this->AdminModel->removeAgentLogin($_POST['agent_id']);
                    $filterdata = $this->LoginModel->agentFilterData($_POST['agent_id']);
                    for ($i=0; $i < sizeof($filterdata); $i++) {
                        $this->deleteFilterDetails($filterdata[$i]->filter_id);
                    }
                    $_SESSION['alert'] = 'You have succesfully deleted agent with Agent ID #' . $_POST['agent_id'] . '.';
                }
                $this->deleteEntries();
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


    public function assoc_by($key, $array)
    {
        $new = array();
        foreach ($array as $v) {
            if (!array_key_exists($v->$key, $new))
                $newindex = $v->$key;
            $new[$newindex] = $v;
        }
        return $new;
    }

    public function showPhotos()
    {
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if (($_SESSION['usertype'] == "admin" || $_SESSION['usertype'] == "superadmin") && isset($_SESSION['admin_no'])) {
                $admin_id = $_SESSION['admin_no'];
                $this->load->model('AgentModel');
                $this->load->model('AdminModel');
                $admindata = $this->AdminModel->adminData($admin_id)[0];
                if (isset($_POST['submit'])) {
                    $workID = $this->input->post('submit');
                    $_SESSION['workID']= $workID;
                    $workdata = $this->AgentModel->workDataID($workID)[0];
                    $photos = $this->AgentModel->showPhotos($workID);
                    $codes = $this->AgentModel->showCodes($workID);
                    $parts = $this->AgentModel->showParts($workID);
                    $return = array('status' => 'success', 'photos' => $photos,'workdata'=>$workdata, 'workID'=>$workID, 'admindata'=> $admindata,'codes'=>$codes,'parts'=>$parts);
                    $this->load->view('admin/inquiryPhotos',$return);
                }
                elseif (isset($_SESSION['workID'])) {
                    $workID = $_SESSION['workID'];
                    $workdata = $this->AgentModel->workDataID($workID)[0];
                    $photos = $this->AgentModel->showPhotos($workID);
                    $codes = $this->AgentModel->showCodes($workID);
                    $parts = $this->AgentModel->showParts($workID);
                    $return = array('status' => 'success', 'photos' => $photos,'workdata'=>$workdata, 'workID'=>$workID, 'admindata'=> $admindata,'codes'=>$codes,'parts'=>$parts);
                    $this->load->view('admin/inquiryPhotos',$return);
                }
                else{
                    $_SESSION['alert'] = "Something went wrong. Please try again.";
                    $this->viewInquiries();
                }
            }
            else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code C004.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }
    public function showFilterPhotosFunction($filterID)
    {
        $admin_id = $_SESSION['admin_no'];
        $this->load->model('LoginModel');
        $this->load->model('AdminModel');
        $this->load->model('AgentModel');
        $admindata = $this->AdminModel->adminData($admin_id)[0];
        $workdata = $this->LoginModel->workData($filterID);
        $workproof = array();
        $workparts = array();
        $workcodes = array();
        if (sizeof($workdata)>0) {
            foreach ($workdata as $key => $value) {
                $workproof[$value->work_id] = $this->AgentModel->showPhotos($value->work_id);
                $workparts[$value->work_id] = $this->AgentModel->showParts($value->work_id);
                $workcodes[$value->work_id] = $this->AgentModel->showCodes($value->work_id);
            }
        }
        $_SESSION['filterID']= $filterID;
        $return = array('status' => 'success', 'workdata' => $workdata, 'workproof'=>$workproof, 'filterID'=>$filterID, 'admindata'=> $admindata,'workparts'=>$workparts, 'workcodes'=>$workcodes);
        $this->load->view('admin/filterPhotos',$return);
    }
    public function showFilterPhotos()
    {
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if (($_SESSION['usertype'] == "admin" || $_SESSION['usertype'] == "superadmin") && isset($_SESSION['admin_no'])) {
                if (isset($_POST['submit'])) {
                    $this->showFilterPhotosFunction($this->input->post('submit'));
                }
                elseif (isset($_SESSION['filterID'])) {
                    $this->showFilterPhotosFunction($_SESSION['filterID']);
                }
                else{
                    $_SESSION['alert'] = "Something went wrong. Please try again.";
                    $this->viewInquiries();
                }
            }
            else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code C004.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }



}