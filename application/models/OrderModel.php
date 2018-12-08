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
        $this->db->join('shop', 'rep.repID = shop.repID');
        $this->db->join('orders', 'orders.shopID = shop.shopID');
        $this->db->join('order_details', 'orders.orderID = order_details.orderID');
        $this->db->join('equipment', 'equipment.equipID = order_details.equipID');
        $this->db->order_by('agent.agentID, equipment.equipID', 'asc');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getOrderDetailsAdminGroupByAgent($adminID)
    {
        $this->db->select('SUM(d.orderCount) as orderCount,a.agentID,a.agentCode,e.*,d.orderStatus');
        $this->db->where('a.adminID', $adminID);
        $this->db->from('agent a');
        $this->db->join('rep r', 'a.agentID = r.agentID');
        $this->db->join('shop s', 'r.repID = s.repID');
        $this->db->join('orders t', 't.shopID = s.shopID');
        $this->db->join('order_details d', 't.orderID = d.orderID');
        $this->db->join('equipment e', 'e.equipID = d.equipID');
        $this->db->group_by('a.agentID, e.equipID, d.orderStatus');
        $this->db->order_by('a.agentID, e.equipID', 'asc');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }


    function retreiveOrderDetails($adminID,$agentID,$equipID,$status)
    {
        $this->db->select('e.*,a.*,d.*');
        $this->db->where('a.adminID', $adminID);
        $this->db->where('a.agentID', $agentID);
        $this->db->where('e.equipID', $equipID);
        $this->db->where('d.orderStatus', $status);
        $this->db->from('agent a');
        $this->db->join('rep r', 'a.agentID = r.agentID');
        $this->db->join('shop s', 'r.repID = s.repID');
        $this->db->join('orders t', 't.shopID = s.shopID');
        $this->db->join('order_details d', 't.orderID = d.orderID');
        $this->db->join('equipment e', 'e.equipID = d.equipID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function changeStatus($orderDetailID)
    {

        $this->db->set('orderStatus','Deliver-Ad');
        $this->db->where('orderDetailID', $orderDetailID);
        $this->db->update('order_details');
        return;
    }

    function getConfirmedOrderCount($adminID)
    {
        $this->db->select('distinct COUNT(*) as c');
        $this->db->where('agent.adminID', $adminID);
        $this->db->where('order_details.orderStatus', 'Deliver-Ad');
        $this->db->from('agent');
        $this->db->join('rep', 'agent.agentID = rep.agentID');
        $this->db->join('shop s', 'rep.repID = s.repID');
        $this->db->join('orders t', 't.shopID = s.shopID');
        $this->db->join('order_details', 't.orderID = order_details.orderID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getPendingOrderCount($adminID)
    {
        $this->db->select('distinct COUNT(*) as c');
        $this->db->where('agent.adminID', $adminID);
        $this->db->where('order_details.orderStatus', 'Order_Placed');
        $this->db->from('agent');
        $this->db->join('rep', 'agent.agentID = rep.agentID');
        $this->db->join('shop s', 'rep.repID = s.repID');
        $this->db->join('orders t', 't.shopID = s.shopID');
        $this->db->join('order_details', 't.orderID = order_details.orderID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }
/*----------------------------Agent Home Page-----------------------------------------*/

    function getOrderDetailsRequiredToAdmin($agentID)
    {
        $this->db->select('SUM(d.orderCount) as orderCount,e.*,d.*,r.*');
        $this->db->where('r.agentID', $agentID);
        $this->db->from('rep r');
        $this->db->join('shop s', 'r.repID = s.repID');
        $this->db->join('orders t', 't.shopID = s.shopID');
        $this->db->join('order_details d', 't.orderID = d.orderID');
        $this->db->join('equipment e', 'e.equipID = d.equipID');
        $this->db->group_by('e.equipID, d.orderStatus');
        $this->db->order_by('e.equipID', 'asc');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getOrderDetailsAgent($agentID)
    {
        $this->db->where('rep.agentID', $agentID);
        $this->db->from('rep');
        $this->db->join('shop', 'rep.repID = shop.repID');
        $this->db->join('orders', 'orders.shopID = shop.shopID');
        $this->db->join('order_details', 'orders.orderID = order_details.orderID');
        $this->db->join('equipment', 'equipment.equipID = order_details.equipID');
        $this->db->order_by('rep.repID, shop.shopID, equipment.equipID', 'asc');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function retreiveOrderDetailsAgent($agentID,$equipID,$status)
    {
        $this->db->select('e.*,a.*,d.*');
        $this->db->where('a.agentID', $agentID);
        $this->db->where('e.equipID', $equipID);
        $this->db->where('d.orderStatus', $status);
        $this->db->from('agent a');
        $this->db->join('rep r', 'a.agentID = r.agentID');
        $this->db->join('shop s', 'r.repID = s.repID');
        $this->db->join('orders t', 't.shopID = s.shopID');
        $this->db->join('order_details d', 't.orderID = d.orderID');
        $this->db->join('equipment e', 'e.equipID = d.equipID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getConfirmedOrderCountAgent($agentID)
    {
        $this->db->select('distinct COUNT(*) as c');
        $this->db->where('rep.agentID', $agentID);
        $this->db->where('order_details.orderStatus', 'Deliver-Ag');
        $this->db->from('rep');
        $this->db->join('shop s', 'rep.repID = s.repID');
        $this->db->join('orders t', 't.shopID = s.shopID');
        $this->db->join('order_details', 't.orderID = order_details.orderID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }

    function getPendingOrderCountAgent($agentID)
    {
        $this->db->select('distinct COUNT(*) as c');
        $this->db->where('rep.agentID', $agentID);
        $this->db->where('order_details.orderStatus', 'Order_Placed || Deliver-Ad');
        $this->db->from('rep');
        $this->db->join('shop s', 'rep.repID = s.repID');
        $this->db->join('orders t', 't.shopID = s.shopID');
        $this->db->join('order_details', 't.orderID = order_details.orderID');
        $query1 = $this->db->get();
        if ($query1->num_rows() > 0) {
            return $query1->result();    // return a array of object
        } else {
            return NULL;
        }
    }


}