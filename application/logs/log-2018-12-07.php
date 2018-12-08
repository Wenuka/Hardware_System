<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-07 01:54:21 --> Query error: Unknown column 'orders.orderID' in 'on clause' - Invalid query: SELECT distinct COUNT(*) as c
FROM `agent`
JOIN `rep` ON `agent`.`agentID` = `rep`.`agentID`
JOIN `shop` `s` ON `rep`.`repID` = `s`.`repID`
JOIN `orders` `t` ON `t`.`shopID` = `s`.`shopID`
JOIN `order_details` ON `orders`.`orderID` = `order_details`.`orderID`
WHERE `agent`.`adminID` = '1'
AND `order_details`.`status` = 'Deliver-Ad'
ERROR - 2018-12-07 02:04:43 --> Query error: Unknown column 'orders.orderID' in 'on clause' - Invalid query: SELECT distinct COUNT(*) as c
FROM `agent`
JOIN `rep` ON `agent`.`agentID` = `rep`.`agentID`
JOIN `shop` `s` ON `rep`.`repID` = `s`.`repID`
JOIN `orders` `t` ON `t`.`shopID` = `s`.`shopID`
JOIN `order_details` ON `orders`.`orderID` = `order_details`.`orderID`
WHERE `agent`.`adminID` = '1'
AND `order_details`.`status` = 'Deliver-Ad'
ERROR - 2018-12-07 02:05:07 --> Query error: Unknown column 'orders.orderID' in 'on clause' - Invalid query: SELECT distinct COUNT(*) as c
FROM `agent`
JOIN `rep` ON `agent`.`agentID` = `rep`.`agentID`
JOIN `shop` `s` ON `rep`.`repID` = `s`.`repID`
JOIN `orders` `t` ON `t`.`shopID` = `s`.`shopID`
JOIN `order_details` ON `orders`.`orderID` = `order_details`.`orderID`
WHERE `agent`.`adminID` = '1'
AND `order_details`.`status` = 'Deliver-Ad'
ERROR - 2018-12-07 23:55:36 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 D:\wamp\www\Hardware_System\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2018-12-07 23:55:36 --> Unable to connect to the database
ERROR - 2018-12-07 23:55:51 --> Query error: Unknown column 'orders.orderID' in 'on clause' - Invalid query: SELECT distinct COUNT(*) as c
FROM `agent`
JOIN `rep` ON `agent`.`agentID` = `rep`.`agentID`
JOIN `shop` `s` ON `rep`.`repID` = `s`.`repID`
JOIN `orders` `t` ON `t`.`shopID` = `s`.`shopID`
JOIN `order_details` ON `orders`.`orderID` = `order_details`.`orderID`
WHERE `agent`.`adminID` = '1'
AND `order_details`.`status` = 'Deliver-Ad'
