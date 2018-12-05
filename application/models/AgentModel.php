<?php

class AgentModel extends CI_Model
{
    function agentData($agent_id){
        $this->db->where('agentID', $agent_id);
        $this->db->where('active', 1);
        $this->db-> from('agent');
        $query1 = $this->db->get();
        if ($query1-> num_rows() > 0){
            return $query1->result();    // return a array of object
        }
        else{
            return NULL;
        }
    }

//    function inquiryData($agent_id)
//    {
//        $this->db->where('delete', 0);
//        $this->db->where('agent_id', $agent_id);
//        $this->db->where('status', 'notseen');
//        $this->db->from('inquiries');
//        $query1 = $this->db->get();
//        if ($query1->num_rows() > 0) {
//            return $query1->result();    // return a array of object
//        } else {
//            return NULL;
//        }
//    }
//
//    function allInquiryData($agent_id)
//    {
//        $this->db->where('delete', 0);
//        $this->db->where('agent_id', $agent_id);
//        $this->db->from('inquiries');
//        $query1 = $this->db->get();
//        if ($query1->num_rows() > 0) {
//            return $query1->result();    // return a array of object
//        } else {
//            return NULL;
//        }
//    }
//
//    function allWorkData($agent_id)
//    {
//        $this->db->where('agent_id', $agent_id);
//        $this->db->where('finish_flag', 1);
//        $this->db->where('delete', 0);
//        $this->db->from('worklog');
//        $this->db->order_by("work_id", "desc");
//        $query1 = $this->db->get();
//        if ($query1->num_rows() > 0) {
//            return $query1->result();    // return a array of object
//        } else {
//            return NULL;
//        }
//    }
//    // function allWorkProofData($workid)
//    // {
//    //     $this->db->where('work_id', $workid);
//    //     $this->db->from('workproof');
//    //     $query1 = $this->db->get();
//    //     if ($query1->num_rows() > 0) {
//    //         return $query1->result();    // return a array of object
//    //     } else {
//    //         return NULL;
//    //     }
//    // }
//    function workDataID($work_id)
//    {
//        $this->db->where('work_id', $work_id);
//        $this->db->from('worklog');
//        $query1 = $this->db->get();
//        if ($query1->num_rows() > 0) {
//            return $query1->result();    // return a array of object
//        } else {
//            return NULL;
//        }
//    }
//    function codeData()
//    {
//        $this->db->from('codes');
//        $query1 = $this->db->get();
//        if ($query1->num_rows() > 0) {
//            return $query1->result();    // return a array of object
//        } else {
//            return NULL;
//        }
//    }
//
//    function partData()
//    {
//        $this->db->from('parts');
//        $query1 = $this->db->get();
//        if ($query1->num_rows() > 0) {
//            return $query1->result();    // return a array of object
//        } else {
//            return NULL;
//        }
//    }
//
//    function setConfirm($inquiry_id)
//    {
//        $data = array(
//            'status' => 'confirm',
//            'last_edittime' => date("Y-m-d H:i:s")
//        );
//        $this->db->where('inquiry_id', $inquiry_id);
//        $this->db->update("inquiries", $data);
//
//    }
//
//    function setIgnore($inquiry_id)
//    {
//        $data = array(
//            'status' => 'ignored',
//            'last_edittime' => date("Y-m-d H:i:s")
//        );
//        $this->db->where('inquiry_id', $inquiry_id);
//        $this->db->update("inquiries", $data);
//    }
//
   function editAgentPersonalDetails($results, $agent_id)
   {
       $this->db->where('agentID', $agent_id);
       $this->db->update("agent", $results);
   }
//
//    function editAccountDetails($results, $login_id)
//    {
//        $this->db->where('login_id', $login_id);
//        $this->db->update("login", $results);
//    }
//
//    function finishWork($work_id)
//    {
//        $this->db->where('work_id', $work_id);
//        $this->db->update("worklog", array('finish_flag' => 1));
//    }
//
//    function setNextDateStatus($filter_id, $data)
//    {
//        $this->db->where('filter_id', $filter_id);
//        $this->db->update("filter", $data);
//    }
//
//    function addCustomer($results)
//    {
//        $this->db->insert('customer', $results);
//        return $this->db->insert_id();
//    }
//
//    function addFilter($results)
//    {
//        $this->db->insert('filter', $results);
//        return $this->db->insert_id();
//    }
//
//    function addWork($results)
//    {
//        $this->db->insert('worklog', $results);
//        return $this->db->insert_id();
//    }
//
//    function addWorkCodes($results)
//    {
//        $this->db->insert('workcodes', $results);
//    }
//
//    function addWorkParts($results)
//    {
//        $this->db->insert('workparts', $results);
//    }
//
//    function addWorkProof($results)
//    {
//        $this->db->insert("workproof", $results);
//    }
//
//    public function showPhotos($workId)
//    {
//        $this->db->select('*');
//        $this->db->from('workproof');
//        $this->db->where('work_id', $workId);
//        $query1 = $this->db->get();
//        if ($query1->num_rows() > 0) {
//            return $query1->result();    // return a array of object
//        } else {
//            return NULL;
//        }
//    }
//    public function showCodes($workId)
//    {
//        $this->db->where('workcodes.work_id', $workId);
//        $this->db->from('workcodes');
//        $this->db->join('codes', 'codes.code_id= workcodes.code_id');
//        $query1 = $this->db->get();
//        if ($query1->num_rows() > 0) {
//            return $query1->result();    // return a array of object
//        } else {
//            return NULL;
//        }
//    }
//    public function showParts($workId)
//    {
//        $this->db->where('workparts.work_id', $workId);
//        $this->db->from('workparts');
//        $this->db->join('parts', 'parts.part_id= workparts.part_id');
//        $query1 = $this->db->get();
//        if ($query1->num_rows() > 0) {
//            return $query1->result();    // return a array of object
//        } else {
//            return NULL;
//        }
//    }
}