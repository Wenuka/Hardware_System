<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-08 00:50:17 --> Severity: Notice --> Undefined property: stdClass::$agentID D:\wamp\www\Hardware_System\application\views\agent\agentHome.php 392
ERROR - 2018-12-08 00:50:42 --> Severity: Notice --> Undefined property: stdClass::$agentID D:\wamp\www\Hardware_System\application\views\agent\agentHome.php 392
ERROR - 2018-12-08 00:51:11 --> Severity: Parsing Error --> syntax error, unexpected ')' D:\wamp\www\Hardware_System\application\models\OrderModel.php 119
ERROR - 2018-12-08 00:51:25 --> Query error: Unknown column 'r*' in 'field list' - Invalid query: SELECT SUM(d.orderCount) as orderCount, `r`.`repID`, `r`.`repCode`, `e`.*, `d`.`status`, `r*`
FROM `rep` `r`
JOIN `shop` `s` ON `r`.`repID` = `s`.`repID`
JOIN `orders` `t` ON `t`.`shopID` = `s`.`shopID`
JOIN `order_details` `d` ON `t`.`orderID` = `d`.`orderID`
JOIN `equipment` `e` ON `e`.`equipID` = `d`.`equipID`
ORDER BY `e`.`equipID` ASC
ERROR - 2018-12-08 00:51:56 --> Query error: Unknown column 'r*' in 'field list' - Invalid query: SELECT SUM(d.orderCount) as orderCount, `e`.*, `d`.`status`, `r*`
FROM `rep` `r`
JOIN `shop` `s` ON `r`.`repID` = `s`.`repID`
JOIN `orders` `t` ON `t`.`shopID` = `s`.`shopID`
JOIN `order_details` `d` ON `t`.`orderID` = `d`.`orderID`
JOIN `equipment` `e` ON `e`.`equipID` = `d`.`equipID`
ORDER BY `e`.`equipID` ASC
ERROR - 2018-12-08 01:17:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'hardware_management' D:\wamp\www\Hardware_System\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2018-12-08 01:17:35 --> Unable to connect to the database
ERROR - 2018-12-08 01:18:04 --> Query error: Unknown column 'orders.orderID' in 'on clause' - Invalid query: SELECT distinct COUNT(*) as c
FROM `agent`
JOIN `rep` ON `agent`.`agentID` = `rep`.`agentID`
JOIN `shop` `s` ON `rep`.`repID` = `s`.`repID`
JOIN `orders` `t` ON `t`.`shopID` = `s`.`shopID`
JOIN `order_details` ON `orders`.`orderID` = `order_details`.`orderID`
WHERE `agent`.`adminID` = '1'
AND `order_details`.`status` = 'Order_Placed'
ERROR - 2018-12-08 01:56:05 --> Unable to load the requested class: SessionModel
ERROR - 2018-12-08 02:34:51 --> Severity: Warning --> include(adminTopMost.php): failed to open stream: No such file or directory D:\wamp\www\Hardware_System\application\views\agent\AgentRepView.php 118
ERROR - 2018-12-08 02:34:51 --> Severity: Warning --> include(): Failed opening 'adminTopMost.php' for inclusion (include_path='.;C:\php\pear') D:\wamp\www\Hardware_System\application\views\agent\AgentRepView.php 118
ERROR - 2018-12-08 02:34:51 --> Severity: Warning --> include(adminSidebar.php): failed to open stream: No such file or directory D:\wamp\www\Hardware_System\application\views\agent\AgentRepView.php 121
ERROR - 2018-12-08 02:34:51 --> Severity: Warning --> include(): Failed opening 'adminSidebar.php' for inclusion (include_path='.;C:\php\pear') D:\wamp\www\Hardware_System\application\views\agent\AgentRepView.php 121
ERROR - 2018-12-08 02:34:51 --> Severity: Notice --> Undefined variable: repData D:\wamp\www\Hardware_System\application\views\agent\AgentRepView.php 138
ERROR - 2018-12-08 02:34:51 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\Hardware_System\application\views\agent\AgentRepView.php 138
ERROR - 2018-12-08 02:35:51 --> Query error: Duplicate entry 'RP001' for key 'repCode' - Invalid query: INSERT INTO `rep` (`repName`, `email`, `nic`, `repCode`, `contact`, `agentID`) VALUES ('Yasars Peiris', 'yasarapeiris.13@cse.mrt.ac.lk', '546345678v', 'RP001', '0779047316', '1')
ERROR - 2018-12-08 02:36:12 --> Severity: Notice --> Undefined variable: repData D:\wamp\www\Hardware_System\application\views\agent\AgentRepView.php 138
ERROR - 2018-12-08 02:36:12 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\Hardware_System\application\views\agent\AgentRepView.php 138
ERROR - 2018-12-08 02:37:42 --> Query error: Duplicate entry 'RP001' for key 'repCode' - Invalid query: INSERT INTO `rep` (`repName`, `email`, `nic`, `repCode`, `contact`, `agentID`) VALUES ('Yasars Peiris', 'yasarapeiris.13@cse.mrt.ac.lk', '546345678v', 'RP001', '0779047316', '1')
ERROR - 2018-12-08 02:38:46 --> Query error: Duplicate entry 'RP001' for key 'repCode' - Invalid query: INSERT INTO `rep` (`repName`, `email`, `nic`, `repCode`, `contact`, `agentID`) VALUES ('Yasars Peiris', 'yasarapeiris.13@cse.mrt.ac.lk', '546345678v', 'RP001', '0779047316', '1')
ERROR - 2018-12-08 09:49:48 --> Query error: Duplicate entry 'RP001' for key 'repCode' - Invalid query: INSERT INTO `rep` (`repName`, `email`, `nic`, `repCode`, `contact`, `agentID`) VALUES ('Yasars Peiris', 'pnilupulee@yahoo.com', '976543234v', 'RP001', '0779047316', '1')
ERROR - 2018-12-08 09:50:32 --> 404 Page Not Found: AgentController/index
ERROR - 2018-12-08 09:50:37 --> 404 Page Not Found: Assets/bootstrap
ERROR - 2018-12-08 09:50:37 --> 404 Page Not Found: Assets/dist
ERROR - 2018-12-08 09:50:37 --> 404 Page Not Found: Assets/plugins
ERROR - 2018-12-08 09:50:38 --> 404 Page Not Found: Assets/bootstrap
ERROR - 2018-12-08 09:50:38 --> 404 Page Not Found: Assets/plugins
ERROR - 2018-12-08 09:50:38 --> 404 Page Not Found: Assets/plugins
ERROR - 2018-12-08 09:50:38 --> 404 Page Not Found: Assets/plugins
ERROR - 2018-12-08 09:50:38 --> 404 Page Not Found: Assets/bootstrap
ERROR - 2018-12-08 09:50:38 --> 404 Page Not Found: Assets/plugins
ERROR - 2018-12-08 09:50:38 --> 404 Page Not Found: Assets/images
ERROR - 2018-12-08 10:06:26 --> Severity: Warning --> include(adminTopMost.php): failed to open stream: No such file or directory D:\wamp\www\Hardware_System\application\views\agent\agentShopView.php 118
ERROR - 2018-12-08 10:06:26 --> Severity: Warning --> include(): Failed opening 'adminTopMost.php' for inclusion (include_path='.;C:\php\pear') D:\wamp\www\Hardware_System\application\views\agent\agentShopView.php 118
ERROR - 2018-12-08 10:06:26 --> Severity: Warning --> include(adminSidebar.php): failed to open stream: No such file or directory D:\wamp\www\Hardware_System\application\views\agent\agentShopView.php 121
ERROR - 2018-12-08 10:06:26 --> Severity: Warning --> include(): Failed opening 'adminSidebar.php' for inclusion (include_path='.;C:\php\pear') D:\wamp\www\Hardware_System\application\views\agent\agentShopView.php 121
ERROR - 2018-12-08 10:06:26 --> Severity: Notice --> Undefined variable: shopdata D:\wamp\www\Hardware_System\application\views\agent\agentShopView.php 138
ERROR - 2018-12-08 10:06:26 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\Hardware_System\application\views\agent\agentShopView.php 138
ERROR - 2018-12-08 10:07:17 --> Severity: Notice --> Undefined variable: shopdata D:\wamp\www\Hardware_System\application\views\agent\agentShopView.php 138
ERROR - 2018-12-08 10:07:17 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\Hardware_System\application\views\agent\agentShopView.php 138
ERROR - 2018-12-08 10:07:47 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\Hardware_System\application\views\agent\agentShopView.php 138
ERROR - 2018-12-08 12:24:00 --> Query error: Unknown column 'agentID' in 'field list' - Invalid query: INSERT INTO `shop` (`shopCode`, `email`, `ownerName`, `shopName`, `tele`, `mobile`, `creditLimit`, `agentID`) VALUES ('SH001', 'pnilupulee@yahoo.com', 'Yasara Peiris', 'Chicoree', '0779047316', '0779047316', '4567', '1')
ERROR - 2018-12-08 12:36:43 --> Severity: Notice --> Undefined index: repName D:\wamp\www\Hardware_System\application\controllers\AgentController.php 108
ERROR - 2018-12-08 12:36:43 --> Severity: Notice --> Undefined variable: username D:\wamp\www\Hardware_System\application\controllers\AgentController.php 108
ERROR - 2018-12-08 12:36:43 --> Severity: Notice --> Undefined variable: password D:\wamp\www\Hardware_System\application\controllers\AgentController.php 108
ERROR - 2018-12-08 12:39:12 --> Query error: Duplicate entry 'SH001' for key 'shopCode' - Invalid query: INSERT INTO `shop` (`shopCode`, `email`, `ownerName`, `shopName`, `tele`, `mobile`, `creditLimit`, `repID`, `riskScore`, `size`) VALUES ('SH001', 'pnilupulee@yahoo.com', 'Yasara Peiris', 'Chicoree', '0779047316', '0779047316', '4567', '7', 'M', 'S')
ERROR - 2018-12-08 12:40:26 --> Query error: Duplicate entry 'SH001' for key 'shopCode' - Invalid query: INSERT INTO `shop` (`shopCode`, `email`, `ownerName`, `shopName`, `tele`, `mobile`, `creditLimit`, `repID`, `riskScore`, `size`) VALUES ('SH001', 'pnilupulee@yahoo.com', 'Yasara Peiris', 'Chicoree', '0779047316', '0779047316', '4567', '7', 'M', 'S')
ERROR - 2018-12-08 12:45:38 --> Query error: Unknown column 'agent.agentID' in 'order clause' - Invalid query: SELECT *
FROM `rep`
JOIN `shop` ON `rep`.`repID` = `shop`.`repID`
JOIN `orders` ON `orders`.`shopID` = `shop`.`shopID`
JOIN `order_details` ON `orders`.`orderID` = `order_details`.`orderID`
JOIN `equipment` ON `equipment`.`equipID` = `order_details`.`equipID`
WHERE `rep`.`agentID` = '1'
ORDER BY `agent`.`agentID` ASC, `equipment`.`equipID` ASC
ERROR - 2018-12-08 15:02:25 --> Query error: Unknown column 'agent.adminID' in 'where clause' - Invalid query: SELECT distinct COUNT(*) as c
FROM `rep`
JOIN `shop` `s` ON `rep`.`repID` = `s`.`repID`
JOIN `orders` `t` ON `t`.`shopID` = `s`.`shopID`
JOIN `order_details` ON `t`.`orderID` = `order_details`.`orderID`
WHERE `agent`.`adminID` = '1'
AND `order_details`.`orderStatus` = 'Deliver-Ag'
ERROR - 2018-12-08 15:11:04 --> Severity: Notice --> Undefined variable: inquirydata D:\wamp\www\Hardware_System\application\views\agent\inquiry.php 103
ERROR - 2018-12-08 15:11:04 --> Severity: Notice --> Undefined variable: workdata D:\wamp\www\Hardware_System\application\views\agent\inquiry.php 156
