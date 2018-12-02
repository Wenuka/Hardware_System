<?php
/**
 * Created by PhpStorm.
 * User: Yasara
 * Date: 12/1/2018
 * Time: 11:57 AM
 */

class OrderModel extends CI_Model
{
    function getOrderDetailsAdmin($adminID)
    {
        $this->db->where('agent.adminID', $adminID);
        $this->db->from('agent');
        $this->db->join('rep', 'agent.agentID = rep.agentID');
        $this->db->join('orders', 'orders.repID = rep.repID');
        $this->db->join('shop', 'orders.shopID = shop.shopID');
        $this->db->join('order_details', 'orders.orderID = order_details.orderID');
        $this->db->join('equipment', 'equipment.equipID = order_details.equipID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getConfirmedOrderCount($adminID)
    {
        $this->db->select('distinct COUNT(*) as c');
        $this->db->where('agent.adminID', $adminID);
        $this->db->where('orders.orderStatus', 'confirm');
        $this->db->from('agent');
        $this->db->join('rep', 'agent.agentID = rep.agentID');
        $this->db->join('orders', 'orders.repID = rep.repID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getPendingOrderCount($adminID)
    {
        $this->db->select('COUNT(*) as c');
        $this->db->where('agent.adminID', $adminID);
        $this->db->where('orders.orderStatus', 'in_progress');
        $this->db->from('agent');
        $this->db->join('rep', 'agent.agentID = rep.agentID');
        $this->db->join('orders', 'orders.repID = rep.repID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }


}