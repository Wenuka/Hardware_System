<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
	
	public function login(){
		$this->load->library('session');
		$errors = 'Sign into start your session';

		if (!empty($_POST) ) {		
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if ($username==null || $password==null) {
				$_SESSION['error'] = "Don't keep any of the spaces blank.";
				// echo $errors;
				redirect();
				// $this->load->view('index');
			} else {
				$this->load->model('LoginModel');
				$count = 0;
	            // Define $username and $password
				$username = stripslashes($username);
				$password = stripslashes($password);
				$user =  $this->LoginModel->authenticate($username,$password);
				if(!empty($user)){
					$usertype = $user[0]->usertype;
					$_SESSION['usertype'] = $usertype;
					if($usertype=="filter"){
						$_SESSION['usertype'] = "filter";
						$filter_id = $user[0]->id;
						$_SESSION['filter_no'] = $filter_id;
						// $filter_no = $user[0]->filter_id;
						// $_SESSION['hotelno'] = $filter_no;
						// $this->load->model('ListingsModel');
						// $listing =  $this->ListingsModel->getListingDetails($listing_no);
						// $_SESSION['login_hotel'] = $listing[0]->listing_name;
						// $orders= $this->newOrders($listing_no);
						// $checkins = $this->recent_checkins($listing_no);
						// $data= array('data1'=> $listing[0],'data2'=>$orders,'data3'=>$checkins);
	                    //                $_SESSION['login_user'] =  "hotel";
        		        $this->viewFilter($filter_id);
					}
					elseif($usertype=="agent"){
						$_SESSION['usertype'] = "agent";
						$agent_id = $user[0]->id;
						$_SESSION['agent_no'] = $agent_id;
						$this->viewAgent($agent_id);
					}
                    elseif($usertype=="admin"){
                        $_SESSION['usertype'] = "admin";
                        $admin_id = $user[0]->id;
                        $_SESSION['admin_no'] = $admin_id;
                        $this->viewAdmin($admin_id);
                    }
                    elseif($usertype=="superadmin"){
                        $_SESSION['usertype'] = "superadmin";
                        $admin_id = $user[0]->id;
                        $_SESSION['admin_no'] = $admin_id;
                        $this->viewAdmin($admin_id);
                    }
					else{
						$_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code A003.";
						redirect();
					}
				}
				else{
	                $_SESSION['error'] = "Your username or password is incorrect";
	                redirect();
	            }
			}
		}
		else{
			$this->viewHomePage();
		}
	}
    public function addInquiry(){
        $this->load->library('session');
        if(isset($_SESSION['usertype'])){
            if ($_SESSION['usertype'] == "filter" && isset($_SESSION['filter_no'])) {
                $filter_id = $_SESSION['filter_no'];
                if (!empty($_POST) ) {
                	$agent_id=$this->input->post('agent_id');
                	$description =$this->input->post('description');
                	if ($agent_id !=null && $description !=null) {
						$this->load->model('LoginModel');  
    					$this->LoginModel->addInquiry(array('filter_id'=>$filter_id,'agent_id'=> $agent_id,'message'=> $description));
    					$_SESSION['alert']= "You have succesfully Add an inquiry. Your agent will reply to it soon.";
                	}
                }
                $this->viewHomePage();
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
	public function viewHomePage()
    {
        $this->load->library('session');
        if(isset($_SESSION['usertype'])){
            if ($_SESSION['usertype'] == "filter" && isset($_SESSION['filter_no'])) {
        		$this->viewFilter($_SESSION['filter_no']);
        	}
        	elseif($_SESSION['usertype'] == "agent"&& isset($_SESSION['agent_no'])){
        		$this->viewAgent($_SESSION['agent_no']);
        	}
        	elseif($_SESSION['usertype'] == "admin" || $_SESSION['usertype'] == "superadmin"){
        		$this->viewAdmin($_SESSION['admin_no']);
        	}
        	else{
        		$_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code A002.";
        		redirect();
        	}
        }
        else{
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }
    public function viewFilter($filter_id){
    	$this->load->model('LoginModel');  
    	$this->load->model('AgentModel');  
    	$filterdata = $this->LoginModel->filterData($filter_id)[0];
    	$customerdata = $this->LoginModel->customerData($filterdata->customer_id)[0];
    	$agentdata = $this->LoginModel->agentData($filterdata->agent_id)[0];
    	$workdata = $this->LoginModel->workData($filter_id);
        $workproof = array();
        if (sizeof($workdata)>0) {
	        foreach ($workdata as $key => $value) {
	            $workproof[$value->work_id] = $this->AgentModel->showPhotos($value->work_id);
	        }
	    }
    	$data = array('filterdata' => $filterdata,'customerdata' => $customerdata,'agentdata' => $agentdata,'workdata'=>$workdata,'workproof'=>$workproof);
        $this->load->view('filter/filterHome', $data);
    }
    public function viewAgent($agent_id){
    	$this->load->model('LoginModel');  
    	$this->load->model('AgentModel');  
    	$agentdata = $this->LoginModel->agentData($agent_id)[0];
    	$filterdata = $this->LoginModel->agentFilterData($agent_id);
    	$customerdata = $this->LoginModel->agentCustomerData($agent_id);
    	$inquirydata = $this->AgentModel->inquiryData($agent_id);
    	$data = array('filterdata' => $filterdata,'customerdata' => $customerdata,'agentdata' => $agentdata,'inquirydata'=>$inquirydata);
    	$this->load->view('agent/agentHome',$data);
    }
    public function viewAdmin($admin_id){
    	$this->load->model('AdminModel');  
    	$admindata = $this->AdminModel->adminData($admin_id)[0];
    	$filterdata = $this->AdminModel->filterData();
    	// $inquirydata = $this->AdminModel->inquiryData();
    	$data = array('filterdata' => $filterdata,'admindata' => $admindata); //,'inquirydata'=>$inquirydata
    	$this->load->view('admin/adminHome',$data);
    }
	public function logout(){
		$this->load->library('session');
		$_SESSION =  array();
		$_SESSION['alert'] = 'You have sucessfully logged out.';
		redirect();
	}
}