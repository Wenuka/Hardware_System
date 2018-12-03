<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public static $admin = "Ad";
    public static $agent = "Ag";
    public static $rep = "Rp";
    public static $shop = "Sh";

    public static $adminTbl = "admin";
    public static $agentTbl = "agent";
    public static $repTbl = "rep";
    public static $shopTbl = "shop";

    public function login()
    {
        $this->load->library('Constants');
        $this->load->library('session');
        $errors = 'Sign into start your session';
        if (!empty($_POST))
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($username == null || $password == null)
            {
                $_SESSION['error'] = "Don't keep any of the spaces blank.";
                redirect();
            }
            else
            {
                $this->load->model('LoginModel');

                // Define $username and $password
                $username = stripslashes($username);
                $password = stripslashes($password);
                $user = $this->LoginModel->authenticate($username, $password);

                if (!empty($user))
                {
                    $usertype = $user[0]->usertype;
                    $_SESSION['usertype'] = $usertype;
                    $userid = $user[0]->userID;
                    $this->checkUserType($usertype, $userid);
                }
                else
                {
                    $_SESSION['error'] = "Your username or password is incorrect";
                    redirect();
                }
            }
        }
        else
        {
            $this->viewHomePage();
        }
    }

    public function checkUserType($usertype, $userid)
    {
        if ($usertype == Constants::$admin )
        {
            $_SESSION['admin_no'] = $userid;
            $this->viewAdmin($userid);
        }
        elseif ($usertype == Constants::$agent)
        {
            $_SESSION['agent_no'] = $userid;
            $this->viewAgent($userid);
        }
        elseif ($usertype == Constants::$rep)
        {
            $_SESSION['rep_no'] = $userid;
            $this->viewRep($userid);
        }
        elseif ($usertype == Constants::$shop)
        {
            $_SESSION['shop_no'] = $userid;
            $this->viewShop($userid);
        }
        else
        {
            $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code A003.";
            redirect();
        }
    }

    public function viewHomePage()
    {
        $this->load->library('session');
        $this->load->library('Constants');
        if (isset($_SESSION['usertype']))
        {
            if ($_SESSION['usertype'] == Constants::$admin && isset($_SESSION['admin_no']))
            {
                $this->viewAdmin($_SESSION['admin_no']);
            }
            elseif ($_SESSION['usertype'] == Constants::$agent && isset($_SESSION['agent_no']))
            {
                $this->viewAgent($_SESSION['agent_no']);
            }
            elseif ($_SESSION['usertype'] == Constants::$rep && isset($_SESSION['rep_no']))
            {
                $this->viewRep($_SESSION['rep_no']);
            }
            elseif ($_SESSION['usertype'] == Constants::$shop && isset($_SESSION['shop_no']))
            {
                $this->viewShop($_SESSION['shop_no']);
            }
            else
            {
                $_SESSION['error'] = "Something is wrong. Please contact the system administrator. Error code A002.";
                redirect();
            }
        }
        else
        {
            $_SESSION['error'] = "Your session has expired. Please log in again for your own safety.";
            redirect();
        }
    }

    public function viewAdmin($admin_id)
    {
        $this->load->model('AdminModel');
        $this->load->model('OrderModel');
        $this->load->model('CountModel');

        // Get admin data
        $admindata = $this->AdminModel->adminData($admin_id)[0];
        if(!$admindata->active)
        {
            $_SESSION['error'] = "Sorry, This admin is currently inactive";
            redirect();
        }

        // Get order data
        $orderdata = $this->OrderModel->getOrderDetailsAdmin($admin_id);

        //get Order data group by agent
        $grouporderdata = $this->OrderModel->getOrderDetailsAdminGroupByAgent($admin_id);

        // Get confirmed order count
        $orderconfirmedcount = $this->OrderModel->getConfirmedOrderCount($admin_id)[0];

        // Get confirmed order count
        $orderpendingcount = $this->OrderModel->getPendingOrderCount($admin_id)[0];

        //get agent count
        $agentcount = $this->CountModel->getAgentCount($admin_id)[0];

        //get rep count
        $repcount = $this->CountModel->getRepCount($admin_id)[0];

        //get shop count
        $shopcount = $this->CountModel->getShopCount($admin_id)[0];

        //get sent inquiry count
        $sentinquirycount = $this->CountModel->getSentInquiryCount($admin_id)[0];

        //get received inquiry count
        $receivedinquirycount = $this->CountModel->getreceivedInquiryCount($admin_id)[0];

        //hierarchicalData
        //$alldata = $this->AdminModel->getTableDataInHeirarchicalOrder();

        $data = array(  'admindata' => $admindata,'grouporderdata'=>$grouporderdata, 'orderdata'=>$orderdata,'agentcount'=>$agentcount,'repcount'=>$repcount,'shopcount'=>$shopcount,'orderconfirmedcount'=>$orderconfirmedcount,'orderpendingcount'=>$orderpendingcount,'sentinquirycount'=>$sentinquirycount,'receivedinquirycount'=>$receivedinquirycount ); //,'inquirydata'=>$inquirydata

        $this->load->view('admin/adminHome', $data);
    }

    public function viewAgent($admin_id)
    {
        $this->load->model('AgentModel');
    }

    public function logout()
    {
        $this->load->library('session');
        $_SESSION = array();
        $_SESSION['alert'] = 'You have sucessfully logged out.';
        redirect();
    }

}