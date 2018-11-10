<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FilterController extends CI_Controller {

    public function viewFilter(){
    	$this->load->library('session');
        if(isset($_SESSION['usertype'])){
            if ($_SESSION['usertype'] == "filter" && isset($_SESSION['filter_no'])) {
        		$filter_id = $_SESSION['filter_no'];
        		$this->load->model('LoginModel');  
        		$filterdata = $this->LoginModel->filterData($filter_id)[0];
        		$customerdata = $this->LoginModel->customerData($filterdata->customer_id)[0];
        		$data = array('filterdata' => $filterdata,'customerdata' => $customerdata);
        	    $this->load->view('filter/filterDetails', $data);
            }
            else{
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        }
        else{
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }    	
    }
    public function viewCustomer(){
    	$this->load->library('session');
        if(isset($_SESSION['usertype'])){
            if ($_SESSION['usertype'] == "filter" && isset($_SESSION['filter_no'])) {
        		$filter_id = $_SESSION['filter_no'];
        		$this->load->model('LoginModel');  
        		$filterdata = $this->LoginModel->filterData($filter_id)[0];
        		$customerdata = $this->LoginModel->customerData($filterdata->customer_id)[0];
        		$logindata = $this->LoginModel->filterLoginData($filter_id)[0];
        		$_SESSION['login_id']= $logindata->login_id;
        		$data = array('customerdata' => $customerdata,'logindata'=>$logindata);
        	    $this->load->view('filter/customerDetails', $data);
            }
            else{
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        }
        else{
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }    	
    }
    public function viewAgent(){
    	$this->load->library('session');
        if(isset($_SESSION['usertype'])){
            if ($_SESSION['usertype'] == "filter" && isset($_SESSION['filter_no'])) {
        		$filter_id = $_SESSION['filter_no'];
        		$this->load->model('LoginModel');  
        		$filterdata = $this->LoginModel->filterData($filter_id)[0];
        		$customerdata = $this->LoginModel->customerData($filterdata->customer_id)[0];
        		$agentdata = $this->LoginModel->agentData($filterdata->agent_id)[0];
        		$data = array('agentdata' => $agentdata,'customerdata' => $customerdata);
        	    $this->load->view('filter/agentDetails', $data);
            }
            else{
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        }
        else{
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }    	
    }
    public function viewContact(){
    	$this->load->library('session');
        if(isset($_SESSION['usertype'])){
            if ($_SESSION['usertype'] == "filter" && isset($_SESSION['filter_no'])) {
            	$filter_id = $_SESSION['filter_no'];
            	$this->load->model('LoginModel');  
        		$filterdata = $this->LoginModel->filterData($filter_id)[0];
        		$customerdata = $this->LoginModel->customerData($filterdata->customer_id)[0];
        		$data = array('customerdata' => $customerdata);
        	    $this->load->view('filter/contact', $data);
            }
            else{
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code B001.";
                redirect();
            }
        }
        else{
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }    	
    }
    public function editMyAccount(){    
        $this->load->library('session');
        if (isset($_SESSION['usertype']) && isset($_SESSION['login_id']) && isset($_SESSION['filter_no']) ) {
            if ($_SESSION['usertype'] == "filter") {
                $this->load->helper('form');
                $this->load->helper('url');
                $data1=array();
                $data2=array();
            
                $this->load->model('LoginModel');
                
                if(isset($_POST['fullname'])){
                    $data1 = array(  
                        'name' =>$_POST['fullname'],  
                        'email' =>$_POST['email'],
                        'landline' =>$_POST['tele'],
                        'mobile' =>$_POST['mobile']
                        );
                    $data2 = array(
                        //'username'=> $_POST['username'],
                        'password' => $_POST['inputPassword'],
                        );  

                    $login_id = $_SESSION['login_id'];
                    $filter_id = $_SESSION['filter_no'];
                    $customer_id = $this->LoginModel->getCustomerId($_SESSION['filter_no'])[0]->customer_id;
                    // $this->AccountModel->logPersonalDetails($owner_id);
                    $this->LoginModel->editAccountDetails($data2,$login_id);
                    $this->LoginModel->editCustomerPersonalDetails($data1,$customer_id);
                }
                $this->viewCustomer();
            }
            else{
                $_SESSION['error']= 'Something is wrong. Please contact the system administrator. Error code C005.';
                redirect();
            }
        }
        else{
            $_SESSION['error']= 'Time is up, please log in again for your own security. A22';
            redirect();
        }
        
    }

}