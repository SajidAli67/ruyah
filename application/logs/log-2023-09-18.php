<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-18 11:46:07 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-18 11:49:33 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-18 11:50:37 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 967
ERROR - 2023-09-18 11:50:37 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 967
ERROR - 2023-09-18 11:50:56 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-18 12:10:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
 ...' at line 8 - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id =   and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id =   and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id =   and (d.purchase_date>='2023-09-18' and d.purchase_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 12:11:17 --> Query error: Unknown column 'a.warehouse_id' in 'where clause' - Invalid query: SELECT *
FROM `db_purchase`
WHERE `a`.`warehouse_id` = '2'
AND `id` = '1'
ERROR - 2023-09-18 12:19:39 --> Query error: Unknown column 'c.sales_return_type' in 'field list' - Invalid query: SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 8  and (sales_date>='2023-09-15' and sales_date<='2023-09-18')  UNION SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        CASE 
            WHEN c.sales_return_type = 'purchase_return' THEN 'purchase_return'
            ELSE 'return'
        END as tr_type,
        c.sales_id as sales_id,
        c.return_qty as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 8  and (c.return_date>='2023-09-15' and c.return_date<='2023-09-18')  UNION SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id as sales_id,
        d.purchase_qty as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 8  and (d.purchase_date>='2023-09-15' and d.purchase_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 12:21:33 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 8  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'sales_return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 8  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` d WHERE d.item_id = 8  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 12:25:48 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 9  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'sales_return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 9  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` d WHERE d.item_id = 9  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 12:43:05 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 8  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'sales_return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 8  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` d WHERE d.item_id = 8  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 12:43:22 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 8  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'sales_return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 8  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` d WHERE d.item_id = 8  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 12:44:12 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 8  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'sales_return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 8  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` d WHERE d.item_id = 8  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 12:47:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and (sales_date>='2023-09-01' and sales_date<='2023-09-18')  UNION  SELECT 
 ...' at line 8 - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id =   and (sales_date>='2023-09-01' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id =   and (c.return_date>='2023-09-01' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id =   and (d.purchase_date>='2023-09-01' and d.purchase_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 09:48:38 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:51:11 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:51:48 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:52:00 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:52:10 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:53:21 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:53:30 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:53:39 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:53:49 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:54:22 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:55:05 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:55:06 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:55:34 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:55:50 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:55:51 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:56:12 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:56:30 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:56:31 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:57:04 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:57:32 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:57:41 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:57:57 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:58:39 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:58:40 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:58:51 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:59:33 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 09:59:43 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 12:59:44 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-18 09:59:46 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 10:00:16 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 10:00:38 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-18 13:01:53 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-18 13:09:54 --> Severity: Notice --> Undefined variable: item_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2456
ERROR - 2023-09-18 13:09:54 --> Severity: Notice --> Undefined variable: item_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2491
ERROR - 2023-09-18 13:09:54 --> Severity: Notice --> Undefined variable: item_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2527
ERROR - 2023-09-18 13:09:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-17')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-17')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-17')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2000-08-01' and d.purchase_date<='2023-09-17')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:09:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-18 13:10:12 --> Severity: Notice --> Undefined variable: item_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2456
ERROR - 2023-09-18 13:10:12 --> Severity: Notice --> Undefined variable: item_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2491
ERROR - 2023-09-18 13:10:12 --> Severity: Notice --> Undefined variable: item_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2527
ERROR - 2023-09-18 13:10:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-17')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-17')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-17')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2000-08-01' and d.purchase_date<='2023-09-17')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:10:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-18 13:21:49 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
        e.id as id,
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.purchase_id as sales_id,
        e.return_qty as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` e WHERE e.item_id = 10  and (e.return_date>='2023-09-18' and e.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:39:21 --> Query error: Unknown column 'd.id' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 8  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 8  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 8  and (d.purchase_date>='2023-09-18' and d.purchase_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` c WHERE d.item_id = 8  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:39:25 --> Query error: Unknown column 'd.id' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 10  and (sales_date>='2023-09-17' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 10  and (c.return_date>='2023-09-17' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 10  and (d.purchase_date>='2023-09-17' and d.purchase_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` c WHERE d.item_id = 10  and (d.return_date>='2023-09-17' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:39:37 --> Query error: Unknown column 'd.id' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 8  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 8  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 8  and (d.purchase_date>='2023-09-18' and d.purchase_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` c WHERE d.item_id = 8  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:40:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '// Change the type to 'purchase_return'
        pr.purchase_id  as sales_id,
...' at line 18 - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 10  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 10  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        pr.id as id, 
        pr.`return_date` AS tr_date,
        'purchase_return' as tr_type, // Change the type to 'purchase_return'
        pr.purchase_id  as sales_id,
        pr.return_qty  as stock_quantity,
        pr.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` pr WHERE pr.item_id = 10  and (pr.return_date>='2023-09-18' and pr.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:42:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '// Change the type to 'purchase_return'
        pr.purchase_id  as sales_id,
...' at line 18 - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 9  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 9  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        pr.id as id, 
        pr.`return_date` AS tr_date,
        'purchase_return' as tr_type, // Change the type to 'purchase_return'
        pr.purchase_id  as sales_id,
        pr.return_qty  as stock_quantity,
        pr.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` pr WHERE pr.item_id = 9  and (pr.return_date>='2023-09-18' and pr.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:42:37 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3729
ERROR - 2023-09-18 13:42:42 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3729
ERROR - 2023-09-18 13:45:39 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3729
ERROR - 2023-09-18 13:46:09 --> Query error: Unknown column 'd.return_date' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 10  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 10  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 10  and (d.purchase_date>='2023-09-18' and d.purchase_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` d WHERE d.item_id = 10  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:47:35 --> Query error: Unknown column 'd.return_date' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 8  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 8  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 8  and (d.purchase_date>='2023-09-18' and d.purchase_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` d WHERE d.item_id = 8  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:47:54 --> Query error: Unknown column 'd.return_date' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 10  and (sales_date>='2023-09-18' and sales_date<='2023-09-18')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 10  and (c.return_date>='2023-09-18' and c.return_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 10  and (d.purchase_date>='2023-09-18' and d.purchase_date<='2023-09-18')  UNION  SELECT 
        d.id as id, 
        d.`return_date` AS tr_date,
        'return' as tr_type,
        d.purchase_id  as sales_id,
        d.return_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` d WHERE d.item_id = 10  and (d.return_date>='2023-09-18' and d.return_date<='2023-09-18')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-18 13:52:51 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:52:55 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:52:55 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:52:57 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:53:02 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:53:03 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:53:05 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:53:06 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:53:08 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:53:10 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:53:10 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3605
ERROR - 2023-09-18 13:53:23 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:53:24 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:53:32 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:53:52 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:53:54 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:54:34 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:08 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3594
ERROR - 2023-09-18 13:55:09 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3594
ERROR - 2023-09-18 13:55:32 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:53 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:53 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:53 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:54 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:54 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:54 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:55 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:55 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:56 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:55:56 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 13:58:59 --> Severity: error --> Exception: syntax error, unexpected 'make' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3478
ERROR - 2023-09-18 13:59:32 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3479
ERROR - 2023-09-18 13:59:47 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3594
ERROR - 2023-09-18 13:59:49 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3594
ERROR - 2023-09-18 14:03:19 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 14:04:11 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 14:04:58 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 14:05:00 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 14:05:00 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 14:05:00 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 14:05:38 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3593
ERROR - 2023-09-18 14:11:14 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2368
ERROR - 2023-09-18 14:13:41 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2698
ERROR - 2023-09-18 14:25:12 --> Severity: error --> Exception: syntax error, unexpected 'elseif' (T_ELSEIF) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2491
ERROR - 2023-09-18 15:29:44 --> Could not find the language line "company_address"
ERROR - 2023-09-18 15:30:13 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-18 15:30:29 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-18 15:33:54 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-18 15:43:25 --> Severity: error --> Exception: syntax error, unexpected '||' (T_BOOLEAN_OR) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2491
ERROR - 2023-09-18 15:43:44 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-18 15:53:26 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-18 15:58:24 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-18 15:59:45 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-18 15:59:47 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-18 16:08:36 --> Could not find the language line "purchase_return_list"
