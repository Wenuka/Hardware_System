<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderController extends CI_Controller
{
    public function getSessionAdminID()
    {
        $this->load->model('SessionModel');
        $adminID = $this->SessionModel->checkSessionAdmin();
        return $adminID;
    }
}
