<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-14 06:42:02 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-14 06:42:27 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-14 09:46:19 --> Severity: Notice --> Undefined variable: total_columns_count /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7994
ERROR - 2023-09-14 09:58:07 --> Severity: Notice --> Undefined variable: total_columns_count /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7994
ERROR - 2023-09-14 10:09:52 --> Severity: Notice --> Undefined variable: total_columns_count /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7994
ERROR - 2023-09-14 11:32:31 --> Severity: Notice --> Undefined variable: total_columns_count /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7994
ERROR - 2023-09-14 11:34:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-14' and sales_date<='2023-09-14')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-14' and sales_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-14' and c.return_date<='2023-09-14')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-14' and d.purchase_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-14 08:40:29 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:40:29 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:40:29 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:40:33 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:40:33 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:40:33 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:40:34 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:40:34 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:40:34 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:40:57 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:40:57 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:40:57 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:40:58 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:40:58 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:40:58 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:40:58 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:40:58 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:40:58 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:41:17 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:41:17 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:41:17 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:41:18 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:41:18 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:41:18 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:41:18 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:41:18 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:41:18 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:41:31 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:41:31 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:41:31 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:41:32 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:41:32 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:41:32 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 08:57:25 --> Severity: Notice --> Trying to get property 'currency' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 101
ERROR - 2023-09-14 08:57:25 --> Severity: Notice --> Trying to get property 'currency_placement' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 102
ERROR - 2023-09-14 08:57:25 --> Severity: Notice --> Trying to get property 'currency_code' of non-object /home/mwclients/public_html/ruyahupdates/application/core/MY_Controller.php 103
ERROR - 2023-09-14 14:27:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/core/Input.php 408
ERROR - 2023-09-14 14:27:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/libraries/Session/Session_driver.php 149
ERROR - 2023-09-14 14:27:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/helpers/url_helper.php 564
ERROR - 2023-09-14 11:57:41 --> Severity: Notice --> Undefined variable: total_columns_count /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7994
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:02:35 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8463
ERROR - 2023-09-14 12:09:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND (a.purchase_date >= '2023-09-01' AND a.purchase_date <= '2023-09-14') UNI...' at line 10 - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id =  AND (a.purchase_date >= '2023-09-01' AND a.purchase_date <= '2023-09-14') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id =  AND (b.payment_date >= '2023-09-01' AND b.payment_date <= '2023-09-14') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id =  AND (c.return_date >= '2023-09-01' AND c.return_date <= '2023-09-14') ORDER BY `tr_date`, `created_time`
ERROR - 2023-09-14 12:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-14' and sales_date<='2023-09-14')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-14' and sales_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-14' and c.return_date<='2023-09-14')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-14' and d.purchase_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-14 12:11:09 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8572
ERROR - 2023-09-14 12:11:09 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8604
ERROR - 2023-09-14 12:11:09 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8636
ERROR - 2023-09-14 12:11:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-08-31')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-14 12:11:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:3360) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-14 12:11:14 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8572
ERROR - 2023-09-14 12:11:14 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8604
ERROR - 2023-09-14 12:11:14 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8636
ERROR - 2023-09-14 12:11:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-08-31')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-14 12:11:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:3360) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-14 12:43:37 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3163
ERROR - 2023-09-14 10:10:54 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-14 13:12:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-14' and sales_date<='2023-09-14')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-14' and sales_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-14' and c.return_date<='2023-09-14')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-14' and d.purchase_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-14 14:13:33 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2727
ERROR - 2023-09-14 14:21:44 --> Severity: Notice --> Undefined variable: total_columns_count /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7740
