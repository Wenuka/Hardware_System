<?php
/**
 * Created by PhpStorm.
 * User: Yasara
 * Date: 12/2/2018
 * Time: 11:32 AM
 */

class CountModel extends CI_Model
{
    function getReceivedInquiryCount($ID, $type)
    {
        $this->db->select('COUNT(*) as c');
        $this->db->where('senderID', $ID);
        $this->db->where('inquiryType', $type);
        $this->db->from('inquiry');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getSentInquiryCount($ID, $type)
    {
        $this->db->select('COUNT(*) as c');
        $this->db->where('senderID', $ID);
        $this->db->where('inquiryType', $type);
        $this->db->from('inquiry');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getAgentCount($adminID)
    {
        $this->db->select('COUNT(*) as c');
        $this->db->where('adminID', $adminID);
        $this->db->where('active', true);
        $this->db->from('agent');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getRepCount($adminID)
    {
        $this->db->select('COUNT(*) as c');
        $this->db->where('adminID', $adminID);
        $this->db->where('rep.active', true);
        $this->db->from('agent');
        $this->db->join('rep', 'agent.agentID = rep.agentID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getShopCount($adminID)
    {
        $this->db->select('COUNT(*) as c');
        $this->db->where('adminID', $adminID);
        $this->db->where('shop.active', true);
        $this->db->from('agent');
        $this->db->join('rep', 'agent.agentID = rep.agentID');
        $this->db->join('shop', 'rep.repID = shop.repID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    //Agent data
    function getRepCountAgent($agentID)
    {
        $this->db->select('COUNT(*) as c');
        $this->db->where('agentID', $agentID);
        $this->db->where('rep.active', true);
        $this->db->from('rep');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getShopCountAgent($agentID)
    {
        $this->db->select('COUNT(*) as c');
        $this->db->where('agentID', $agentID);
        $this->db->where('shop.active', true);
        $this->db->from('rep');
        $this->db->join('shop', 'rep.repID = shop.repID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }
}