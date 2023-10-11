<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-23 10:07:12 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2709
ERROR - 2023-09-23 10:07:12 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2709
ERROR - 2023-09-23 10:26:27 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1258
ERROR - 2023-09-23 10:26:27 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1258
ERROR - 2023-09-23 10:26:27 --> Severity: Notice --> Undefined variable: str3 /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1267
ERROR - 2023-09-23 10:26:27 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1424
ERROR - 2023-09-23 10:26:27 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 967
ERROR - 2023-09-23 07:51:03 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 07:52:01 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 07:55:13 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 07:55:29 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 07:57:09 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 09:14:47 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 09:19:07 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 09:28:38 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 13:36:18 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2709
ERROR - 2023-09-23 13:36:18 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2709
ERROR - 2023-09-23 14:05:28 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2709
ERROR - 2023-09-23 14:05:28 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2709
ERROR - 2023-09-23 14:06:08 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-23 14:06:27 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2709
ERROR - 2023-09-23 14:06:27 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2709
ERROR - 2023-09-23 14:06:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and (sales_date>='2023-09-23' and sales_date<='2023-09-23')  UNION  SELECT 
 ...' at line 8 - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id =  and (sales_date>='2023-09-23' and sales_date<='2023-09-23')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id =   and (c.return_date>='2023-09-23' and c.return_date<='2023-09-23')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id =   and (d.purchase_date>='2023-09-23' and d.purchase_date<='2023-09-23')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.purchase_id  as sales_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` e WHERE e.item_id =   and (e.return_date>='2023-09-23' and e.return_date<='2023-09-23')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-23 12:29:17 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 12:29:22 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 12:31:45 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 12:35:43 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 12:36:01 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 12:37:40 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 12:39:55 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 12:42:52 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 14:13:04 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 14:13:08 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 14:18:00 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 14:18:37 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 17:18:49 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-23 14:20:16 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-23 17:49:37 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-23 17:52:04 --> Could not find the language line "company_address"
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:57:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8341
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8341
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 17:58:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:02:42 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8341
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8341
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
ERROR - 2023-09-23 18:05:25 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7891
