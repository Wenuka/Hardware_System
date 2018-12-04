<?php
/**
 * Created by PhpStorm.
 * User: Yasara
 * Date: 12/4/2018
 * Time: 11:04 PM
 */

class InquiryModel extends CI_Model
{

    public function getSentInquiriesAdmin($inquiryType,$senderID){
        $this->db->where('inquiry.inquiryType', $inquiryType);
        $this->db->where('inquiry.senderID', $senderID);
        $this->db->from('inquiry');
        $this->db->join('agent','inquiry.receiverID = agent.agentID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    public function getReceivedInquiriesAdmin($inquiryType,$receivedID){
        $this->db->where('inquiry.inquiryType', $inquiryType);
        $this->db->where('inquiry.receiverID', $receivedID);
        $this->db->from('inquiry');
        $this->db->join('agent','inquiry.senderID = agent.agentID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

}