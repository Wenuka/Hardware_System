<?php

class AdminModel extends CI_Model
{
	function adminData($admin_id){
		$this->db->where('adminID', $admin_id);
        $this->db->where('active', 1);
		$this->db-> from('admin');
		$query1 = $this->db->get();
		if ($query1-> num_rows() > 0){
			return $query1->result();    // return a array of object
		}	
		else{
			return NULL;	
		}
	}

	function getAgentData($adminID)
    {
        $this->load->library('Constants');
        $this->db->where('active', 1);
        $this->db->where('adminID', $adminID);
        $this->db-> from(Constants::$agentTbl);
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }
        else{
            return NULL;
        }
    }

    function getRepData($adminID)
    {
        $this->db->select("rep.*");
        $this->db->where('rep.active', 1);
        $this->db->where('adminID', $adminID);
        $this->db-> from(Constants::$agentTbl);
        $this->db->join(Constants::$repTbl, 'rep.agentID = agent.agentID');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }
        else{
            return NULL;
        }
    }

    function getShopData($adminID)
    {
        $this->db->select("shop.*");
        $this->db->where('shop.active', 1);
        $this->db->where('adminID', $adminID);
        $this->db-> from(Constants::$agentTbl);
        $this->db->join(Constants::$repTbl, 'rep.agentID = agent.agentID');
        $this->db->join(Constants::$shopTbl, 'shop.repID = rep.repID');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }
        else{
            return NULL;
        }
    }

    function getTableDataInHeirarchicalOrder()
    {
        $this->db->where('a.active', 1);
        $this->db->where('r.active', 1);
        $this->db->where('s.active', 1);
        $this->db->from('agent a');
        $this->db->join('rep r', 'a.agentID = r.agentID', 'left');
        $this->db->join('shop s', 'r.repID=s.repID');
        $this->db->order_by('a.agentID','asc');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return false;
        }
    }

    function adminLoginData($id){
        $this->load->library('Constants');
        $this->db->where('usertype', Constants::$admin);
        $this->db->where('userID', $id);
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
        $this->db->from('inquiry');
		$this->db->join('agent', 'inquiries.agent_id= agent.agent_id');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function addAgent($results)
    {
        $this->db->insert('agent', $results);
        return $this->db->insert_id();
    }

//    function editAdminPersonalDetails($results, $admin_id)
//    {
//        $this->db->where('admin_id', $admin_id);
//        $this->db->update("admin", $results);
//    }
//	function customerId($filter_id){
//        $this->db->where('filter_id', $filter_id);
//        $this->db->select('customer_id');
//		$this->db-> from('filter');
//		$query1 = $this->db->get();
//		if ($query1-> num_rows() > 0){
//			return $query1->result();    // return a array of object
//		}
//		else{
//			return NULL;
//		}
//	}
//    function removeWork($results, $work_id)
//    {
//        $this->db->where('work_id', $work_id);
//        $this->db->update("worklog", $results);
//    }
//    function removeFilterWork($results, $filter_id)
//    {
//        $this->db->where('filter_id', $filter_id);
//        $this->db->update("worklog", $results);
//    }
//    function removeAgentInquiry($results, $agent_id)
//    {
//        $this->db->where('agent_id', $agent_id);
//        $this->db->update("inquiries", $results);
//    }
//    function removeFilterInquiry($results, $filter_id)
//    {
//        $this->db->where('filter_id', $filter_id);
//        $this->db->update("inquiries", $results);
//    }
//    function removeAgent($results, $agent_id)
//    {
//        $this->db->where('agent_id', $agent_id);
//        $this->db->update("agent", $results);
//    }
//    function removeCustomer($results, $customer_id)
//    {
//        $this->db->where('customer_id', $customer_id);
//        $this->db->update("customer", $results);
//    }
//    function removeFilter($results, $filter_id)
//    {
//        $this->db->where('filter_id', $filter_id);
//        $this->db->update("filter", $results);
//    }
//    function removeFilterLogin($filter_id)
//    {
//        $this->db->where('usertype', 'filter');
//        $this->db->where('id', $filter_id);
//        $this->db->delete("login");
//    }
//    function removeAgentLogin($agent_id)
//    {
//        $this->db->where('usertype', 'agent');
//        $this->db->where('id', $agent_id);
//        $this->db->delete("login");
//    }
//    function addPart($results)
//    {
//        $this->db->insert('parts', $results);
//    }
//    function addCode($results)
//    {
//        $this->db->insert('codes', $results);
//    }
}