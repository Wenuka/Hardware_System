<?php

class LoginModel extends CI_Model
{
	function authenticate($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db-> from('login');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function filterData($filter_id){
		$this->db->where('filter_id', $filter_id);
		$this->db-> from('filter');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function customerData($customer_id){
		$this->db->where('customer_id', $customer_id);
		$this->db-> from('customer');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function agentData($agent_id){
		$this->db->where('agent_id', $agent_id);
		$this->db-> from('agent');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function agentLoginData($agent_id){
		$this->db->where('usertype', 'agent');
		$this->db->where('id', $agent_id);
		$this->db-> from('login');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function filterLoginData($filter_id){
		$this->db->where('usertype', 'filter');
		$this->db->where('id', $filter_id);
		$this->db-> from('login');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function agentFilterData($agent_id){
        $this->db->where('filter.show', 1);
		$this->db->where('filter.agent_id', $agent_id);
		$this->db-> from('filter');
		$this->db->join('customer', 'filter.customer_id= customer.customer_id');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function agentFilterDataSrt($agent_id){
        $this->db->where('filter.show', 1);
		$this->db->where('filter.agent_id', $agent_id);
		$this->db-> from('filter');
		$this->db->order_by("next_service", "asc");
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function agentCustomerData($agent_id){
		$this->db->where('agent_id', $agent_id);        
		$this->db->where('show', 1);
		$this->db-> from('customer');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function getCustomerId($filter_id){
		$this->db->where('filter_id', $filter_id);        
		$this->db-> select('customer_id');
		$this->db-> from('filter');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}

	function editCustomerPersonalDetails($results,$customer_id){
		$this->db->where('customer_id', $customer_id);  
		$this->db->update("customer", $results);
	}
	function workData($id) {
		$this->db->where("filter_id", $id); 
		$this->db->where("finish_flag", 1); 
		$this->db->where("delete", 0); 
		$data = $this->db->get('worklog');
		if ($data-> num_rows() > 0){
			return $data->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function checkName($data) {
		$this->db->where("username", $data); 
		$data = $this->db->get('login');
		if ($data-> num_rows() > 0){
			return $data->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function editAccountDetails($results,$login_id){
		$this->db->where('login_id', $login_id);  
		$this->db->update("login", $results);  
	}
	function addLogin($results){
		$this->db->insert('login', $results);  
	}
	function addInquiry($results){
		$this->db->insert('inquiries', $results);  
	}
	function addUserPhoto($path, $id , $type){
		$this->db->where($type.'_id', $id);  
		$this->db->update($type, $path);  
	}
	// function LoginPics($dir, $owner_id){
	// 	$data = array(  
	// 		'image_path' => $dir,  
	// 		);  
	//     // log_message('debug',$owner_id);
	//     // log_message('debug',$dir);
	//     // log_message('debug', print_r($data,true));
	// 	$this->db->where('owner_id', $owner_id);  
	// 	$this->db->update("owner", $data); 
	// }
}