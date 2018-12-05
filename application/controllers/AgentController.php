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
    public function viewFilter()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$agent && isset($_SESSION['agent_no'])) {
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('LoginModel');
                $filterdata = $this->LoginModel->agentFilterData($agent_id);
                $agentdata = $this->LoginModel->agentData($agent_id)[0];
                if (sizeof($filterdata)>0) {
                    foreach ($filterdata as $key => $value) {
                        $logindata = $this->LoginModel->filterLoginData($value->filter_id)[0];
                        if ($logindata != null) {
                            $filterdata[$key]->unm = $logindata->username;
                            $filterdata[$key]->pwd = $logindata->initial_password;
                        } else {
                            $filterdata[$key]->unm = "error";
                            $filterdata[$key]->pwd = "error";
                        }
                    }
                }
                $data = array('filterdata' => $filterdata, 'agentdata' => $agentdata);
                $this->load->view('agent/filterDetails', $data);
            } else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code C001.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }

    public function viewCustomer()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$agent && isset($_SESSION['agent_no'])) {
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('LoginModel');
                $agentdata = $this->LoginModel->agentData($agent_id)[0];
                $customerdata = $this->LoginModel->agentCustomerData($agent_id);
                // print_r($customerdata);
                $data = array('customerdata' => $customerdata, 'agentdata' => $agentdata);
                $this->load->view('agent/customerDetails', $data);
            } else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }

    public function viewAgent()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$agent && isset($_SESSION['agent_no'])) {
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('LoginModel');
                $agentdata = $this->LoginModel->agentData($agent_id)[0];
                $logindata = $this->LoginModel->loginData($agent_id,Constants::$agent)[0];
                $_SESSION['login_id'] = $logindata->userID;
                $data = array('agentdata' => $agentdata, 'logindata' => $logindata);
                $this->load->view('agent/agentDetails', $data);
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
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$agent && isset($_SESSION['agent_no'])) {
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('LoginModel');
                $agentdata = $this->LoginModel->agentData($agent_id)[0];
                $data = array('agentdata' => $agentdata);
                $this->load->view('agent/contact', $data);
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

    public function setConfirm()
    {

        $inquiry_id = $this->input->post('inquiryid');
        $this->load->model('AgentModel');
        $this->AgentModel->setConfirm($inquiry_id);

    }

    public function setIgnore()
    {

        $inquiry_id = $this->input->post('inquiryid');
        $this->load->model('AgentModel');
        $this->AgentModel->setIgnore($inquiry_id);

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

    public function addNewCustomer()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        // print_r($_SESSION);
        // echo "<br><br>";
        // print_r($_POST);
        if (isset($_SESSION['usertype']) && isset($_SESSION['agent_no'])) {
            if ($_SESSION['usertype'] == Constants::$agent) {
                $this->load->helper('form');
                $this->load->helper('url');
                // $data1=array();
                // $data2=array();
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('AgentModel');
                $this->load->model('LoginModel');

                if (isset($_POST['fullname'])) {
                    $data1 = array(
                        'name' => $_POST['fullname'],
                        'email' => $_POST['email'],
                        'address' => $_POST['address'],
                        'landline' => $_POST['tele'],
                        'mobile' => $_POST['mobile'],
                        'agent_id' => $agent_id
                    );
                    $customer_id = $this->AgentModel->addCustomer($data1);
                    $data2 = array(
                        'customer_id' => $customer_id,
                        'capacity' => $_POST['capacity'],
                        'filter_code' => $_POST['filename'],
                        'installed_date' => $_POST['installDate'],
                        'next_service' => $_POST['installDate'],
                        'rep_name' => $_POST['repname'],
                        'agent_id' => $agent_id
                    );
                    $filter_id = $this->AgentModel->addFilter($data2);
                    $username = $this->testUsername($_POST['fullname']);
                    $password = "pass" . rand(0, 10000);
                    $data3 = array(
                        'username' => $username,
                        'password' => $password,
                        'initial_password' => $password,
                        'usertype' => 'filter',
                        'id' => $filter_id
                    );
                    $this->LoginModel->addLogin($data3);
                    $_SESSION['alert'] = 'You have succesfully added ' . $_POST['fullname'] . ' to customer id #' . $customer_id . '.<br>Initial username is ' . $username . ' and password is ' . $password . '. <br>Please see filter details for more info.';
                }
                $this->viewCustomer();
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

    public function addNewWork()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['agent_no'])) {
            if ($_SESSION['usertype'] == Constants::$agent) {
                $this->load->helper('form');
                $this->load->helper('url');
                $data1 = array();
                $data2 = array();
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('AgentModel');
                $this->load->model('LoginModel');
                $agentdata = $this->LoginModel->agentData($agent_id)[0];
                if (isset($_POST['filter_id']) && isset($_POST['code']) && isset($_POST['part'])) {
                    $data1 = array(
                        'filter_id' => $_POST['filter_id'],
                        'agent_id' => $agent_id,
                        'plumbername' => $_POST['plumbername'],
                        'description' => $_POST['description']
                    );
                    $work_id = $this->AgentModel->addWork($data1);
                    $_SESSION['work_id'] = $work_id;
                    $_SESSION['work_filter_id'] = $_POST['filter_id'];
                    $_SESSION['work_type'] = $_POST['jobtype'];
                    for ($i = 0; $i < sizeof($_POST['code']); $i++) {
                        $data2 = array('work_id' => $work_id, 'code_id' => $_POST['code'][$i]);
                        $this->AgentModel->addWorkCodes($data2);
                    }
                    for ($i = 0; $i < sizeof($_POST['part']); $i++) {
                        $data2 = array('work_id' => $work_id, 'part_id' => $_POST['part'][$i]);
                        $this->AgentModel->addWorkParts($data2);
                    }
                    $data = array('agentdata' => $agentdata, 'work_id' => $work_id, 'filter_id' => $_POST['filter_id']);
                    if ($_POST['jobtype'] == "entryadded") {
                        $this->load->view('agent/photoUploader', $data);
                    } elseif ($_POST['jobtype'] == "initialcheck") {
                        $this->load->view('agent/photoUploader2', $data);
                    } elseif ($_POST['jobtype'] == "inoperation") {
                        $this->load->view('agent/photoUploader3', $data);
                    } else {
                        $_SESSION['alert'] = 'Selected filter is out of use. Please contact admin if you think this is a mistake. Error code D002.';
                        $this->newWork();
                    }
                } elseif (isset($_SESSION['work_id']) && isset($_SESSION['work_filter_id']) && isset($_SESSION['work_type'])) {
                    $data = array('agentdata' => $agentdata, 'work_id' => $_SESSION['work_id'], 'filter_id' => $_SESSION['work_filter_id']);
                    if ($_SESSION['work_type'] == "entryadded") {
                        $this->load->view('agent/photoUploader', $data);
                    } elseif ($_SESSION['work_type'] == "initialcheck") {
                        $this->load->view('agent/photoUploader2', $data);
                    } elseif ($_SESSION['work_type'] == "inoperation") {
                        $this->load->view('agent/photoUploader3', $data);
                    } else {
                        $_SESSION['alert'] = 'Selected filter is out of use. Please contact admin if you think this is a mistake. Error code D002.';
                        $this->newWork();
                    }
                } else {
                    $_SESSION['alert'] = 'Something is wrong. Please try again. Error code D001.';
                    $this->newWork();
                }
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C008.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    public function addNewWorkEnd()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['agent_no'])) {
            if ($_SESSION['usertype'] == Constants::$agent) {
                $this->load->helper('form');
                $this->load->helper('url');
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('AgentModel');
                $this->load->model('LoginModel');
                $agentdata = $this->LoginModel->agentData($agent_id)[0];
                if (isset($_POST['postwork_id']) && isset($_POST['postfilter_id']) && isset($_POST['nxtDate']) && isset($_POST['jobtype'])) {
                    $data1 = array('next_service' => $_POST['nxtDate']);
                    if ($_POST['jobtype'] == 1) {
                        $data1 = array('next_service' => $_POST['nxtDate'], 'status' => 'initialcheck');
                    } elseif ($_POST['jobtype'] == 2) {
                        $data1 = array('next_service' => $_POST['nxtDate'], 'status' => 'inoperation');
                    }
                    $this->AgentModel->setNextDateStatus($_POST['postfilter_id'], $data1);
                    $this->AgentModel->finishWork($_POST['postwork_id']);
                }
                $_SESSION['alert'] = 'You have sucessfully added one work.';
                $this->newWork();
            } else {
                $_SESSION['error'] = 'Something is wrong. Please contact the system administrator. Error code C008.';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Time is up, please log in again for your own security.';
            redirect();
        }

    }

    public function assoc_by($key, $array)
    {
        $new = array();
        if (sizeof($array)>0) {
            foreach ($array as $v) {
                if (!array_key_exists($v->$key, $new))
                    $newindex = $v->$key;
                $new[$newindex] = $v;
            }
        }
        return $new;
    }

    public function newWork()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$agent && isset($_SESSION['agent_no'])) {
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('LoginModel');
                $this->load->model('AgentModel');
                $agentdata = $this->LoginModel->agentData($agent_id)[0];
                $filterdata = $this->assoc_by('filter_id', $this->LoginModel->agentFilterData($agent_id));
                $codedata = $this->AgentModel->codeData();
                $partdata = $this->AgentModel->partData();
                $data = array('agentdata' => $agentdata, 'filterdata' => $filterdata, 'codedata' => $codedata, 'partdata' => $partdata);
                $this->load->view('agent/newWork', $data);
            } else {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code C004.";
                redirect();
            }
        } else {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }
    public function showPhotos()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$agent && isset($_SESSION['agent_no'])) {
                $agent_id = $_SESSION['agent_no'];
                $this->load->model('LoginModel');
                $this->load->model('AgentModel');
                $agentdata = $this->LoginModel->agentData($agent_id)[0];
                if (isset($_POST['submit'])) {
                    $workID = $this->input->post('submit');
                    $_SESSION['workID']= $workID;
                    $workdata = $this->AgentModel->workDataID($workID)[0];
                    $photos = $this->AgentModel->showPhotos($workID);
                    $codes = $this->AgentModel->showCodes($workID);
                    $parts = $this->AgentModel->showParts($workID);
                    $return = array('status' => 'success', 'photos' => $photos,'workdata'=>$workdata, 'workID'=>$workID, 'agentdata'=> $agentdata,'codes'=>$codes,'parts'=>$parts);
                    $this->load->view('agent/inquiryPhotos',$return);
                }
                elseif (isset($_SESSION['workID'])) {
                    $workID = $_SESSION['workID'];
                    $workdata = $this->AgentModel->workDataID($workID)[0];
                    $photos = $this->AgentModel->showPhotos($workID);
                    $codes = $this->AgentModel->showCodes($workID);
                    $parts = $this->AgentModel->showParts($workID);
                    $return = array('status' => 'success', 'photos' => $photos,'workdata'=>$workdata, 'workID'=>$workID, 'agentdata'=> $agentdata,'codes'=>$codes,'parts'=>$parts);
                    $this->load->view('agent/inquiryPhotos',$return);
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
        $agent_id = $_SESSION['agent_no'];
        $this->load->model('LoginModel');
        $this->load->model('AgentModel');
        $agentdata = $this->LoginModel->agentData($agent_id)[0];
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
        $return = array('status' => 'success', 'workdata' => $workdata, 'workproof'=>$workproof, 'filterID'=>$filterID, 'agentdata'=> $agentdata,'workparts'=>$workparts, 'workcodes'=>$workcodes);
        $this->load->view('agent/filterPhotos',$return);
    }
    public function showFilterPhotos()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == Constants::$agent && isset($_SESSION['agent_no'])) {
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