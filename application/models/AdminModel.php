<?php

class AdminModel extends CI_Model
{
	function adminData($admin_id){
		$this->db->where('admin_id', $admin_id);
		$this->db-> from('admin');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function filterData(){
		$this->db-> from('filter');
		$this->db->where('filter.show', 1);
		$this->db->join('customer', 'filter.customer_id= customer.customer_id');
		$this->db->join('agent', 'filter.agent_id= agent.agent_id');
		$this->db->select('
		filter.*,
		customer.name AS cus_name,
		agent.name AS agt_name
		');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			// print_r($query1->result());
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function customerData(){
		$this->db-> from('customer');
		$this->db->where('customer.show', 1);
		$this->db->join('agent', 'customer.agent_id= agent.agent_id');
		$this->db->select('
		customer.*,
		agent.name AS agt_name
		');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function agentData(){
		$this->db->where('show', 1);
		$this->db-> from('agent');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function workData()
    {
        $this->db->where('finish_flag', 1);
        $this->db->where('delete', 0);
        $this->db->from('worklog');
        $this->db->order_by("work_id", "desc");
		$this->db->join('filter', 'worklog.filter_id= filter.filter_id');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }
	function adminLoginData($id){
		$this->db->where('usertype', 'admin');
		$this->db->where('id', $id);
		$this->db-> from('login');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
	function superadminLoginData($id){
		$this->db->where('usertype', 'superadmin');
		$this->db->where('id', $id);
		$this->db-> from('login');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
    function inquiryData()
    {
		$this->db->where('inquiries.delete', 0);
        $this->db->from('inquiries');
		$this->db->join('agent', 'inquiries.agent_id= agent.agent_id');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
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
    function addAgent($results)
    {
        $this->db->insert('agent', $results);
        return $this->db->insert_id();
    }
    function editAdminPersonalDetails($results, $admin_id)
    {
        $this->db->where('admin_id', $admin_id);
        $this->db->update("admin", $results);
    }
	function customerId($filter_id){
        $this->db->where('filter_id', $filter_id);
        $this->db->select('customer_id');
		$this->db-> from('filter');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}
    function removeWork($results, $work_id)
    {
        $this->db->where('work_id', $work_id);
        $this->db->update("worklog", $results);
    }
    function removeFilterWork($results, $filter_id)
    {
        $this->db->where('filter_id', $filter_id);
        $this->db->update("worklog", $results);
    }
    function removeAgentInquiry($results, $agent_id)
    {
        $this->db->where('agent_id', $agent_id);
        $this->db->update("inquiries", $results);
    }
    function removeFilterInquiry($results, $filter_id)
    {
        $this->db->where('filter_id', $filter_id);
        $this->db->update("inquiries", $results);
    }
    function removeAgent($results, $agent_id)
    {
        $this->db->where('agent_id', $agent_id);
        $this->db->update("agent", $results);
    }
    function removeCustomer($results, $customer_id)
    {
        $this->db->where('customer_id', $customer_id);
        $this->db->update("customer", $results);
    }
    function removeFilter($results, $filter_id)
    {
        $this->db->where('filter_id', $filter_id);
        $this->db->update("filter", $results);
    }
    function removeFilterLogin($filter_id)
    {
        $this->db->where('usertype', 'filter');
        $this->db->where('id', $filter_id);
        $this->db->delete("login");
    }
    function removeAgentLogin($agent_id)
    {
        $this->db->where('usertype', 'agent');
        $this->db->where('id', $agent_id);
        $this->db->delete("login");
    }    
    function addPart($results)
    {
        $this->db->insert('parts', $results);
    }    
    function addCode($results)
    {
        $this->db->insert('codes', $results);
    }
}