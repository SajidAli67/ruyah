<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-05 07:58:58 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-05 08:00:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-08-29' and sales_date<='2023-09-05')  UNION ...' at line 18 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-08-29' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-08-29' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-08-29' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 08:00:21 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-05 08:02:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-08-27' and sales_date<='2023-09-05')  UNION ...' at line 18 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-08-27' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-08-27' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-08-27' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 08:02:31 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-05 08:02:31 --> Severity: Notice --> Undefined property: stdClass::$payment_type /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2639
ERROR - 2023-09-05 08:02:31 --> Severity: Notice --> Undefined property: stdClass::$payment_note /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2641
ERROR - 2023-09-05 08:02:31 --> Severity: Notice --> Undefined property: stdClass::$payment_type /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2639
ERROR - 2023-09-05 08:02:31 --> Severity: Notice --> Undefined property: stdClass::$payment_note /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2641
ERROR - 2023-09-05 08:03:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-08-27' and sales_date<='2023-09-05')  UNION ...' at line 18 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-08-27' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-08-27' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-08-27' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 08:03:13 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-05 08:03:13 --> Severity: Notice --> Undefined property: stdClass::$payment_note /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2641
ERROR - 2023-09-05 08:03:13 --> Severity: Notice --> Undefined property: stdClass::$payment_note /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2641
ERROR - 2023-09-05 08:03:27 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-09-05 08:03:33 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2763
ERROR - 2023-09-05 08:06:54 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2766
ERROR - 2023-09-05 08:07:14 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2766
ERROR - 2023-09-05 08:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-08-28' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-08-28' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-08-28' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-08-28' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 08:58:57 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2766
ERROR - 2023-09-05 09:09:33 --> Severity: Notice --> Undefined property: stdClass::$stock_quantity /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2667
ERROR - 2023-09-05 09:09:33 --> Severity: Notice --> Undefined property: stdClass::$stock_quantity /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2667
ERROR - 2023-09-05 09:09:33 --> Severity: Notice --> Undefined property: stdClass::$stock_quantity /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2667
ERROR - 2023-09-05 09:09:33 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2766
ERROR - 2023-09-05 09:09:33 --> Severity: Notice --> Undefined property: stdClass::$stock_quantity /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2667
ERROR - 2023-09-05 09:10:35 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2759
ERROR - 2023-09-05 09:12:37 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2720
ERROR - 2023-09-05 09:18:03 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2720
ERROR - 2023-09-05 09:53:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-05' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-05' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 10:25:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-05' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-05' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 10:32:56 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-09-05 10:32:59 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-09-05 10:33:08 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-09-05 10:44:29 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3331
ERROR - 2023-09-05 10:47:02 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-09-05 10:47:05 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3558
ERROR - 2023-09-05 10:53:27 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3300
ERROR - 2023-09-05 10:53:32 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3300
ERROR - 2023-09-05 10:55:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:3320) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-05 10:55:11 --> Severity: Compile Error --> 'goto' to undefined label 'even' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3320
ERROR - 2023-09-05 10:55:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:3320) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-05 10:55:57 --> Severity: Compile Error --> 'continue' not in the 'loop' or 'switch' context /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3320
ERROR - 2023-09-05 10:59:08 --> Severity: error --> Exception: syntax error, unexpected 'return' (T_RETURN) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3298
ERROR - 2023-09-05 11:01:51 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3012
ERROR - 2023-09-05 11:01:51 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3044
ERROR - 2023-09-05 11:01:51 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3076
ERROR - 2023-09-05 11:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-04')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-04')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 11:01:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-05 11:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-05' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-05' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 11:15:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-04' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 11:28:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-05' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-05' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 11:29:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-08-28' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-08-28' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-08-28' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-08-28' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 11:29:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-05' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-05' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 11:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-05' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-05' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 11:36:13 --> Severity: error --> Exception: syntax error, unexpected end of file /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1517
ERROR - 2023-09-05 11:36:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-05' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-05' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 08:40:34 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-05 13:01:24 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:01:24 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:01:24 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 13:01:56 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:01:56 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:01:56 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 13:02:02 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:02:02 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:02:02 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 13:02:02 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:02:02 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:02:02 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 13:02:03 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:02:03 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 13:02:03 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:01:29 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3163
ERROR - 2023-09-05 14:55:35 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:35 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:35 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:55:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:55:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:55:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:55:53 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:53 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:53 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:55:53 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:53 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:53 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:55:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:55:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:57:31 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:31 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:31 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:57:36 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:36 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:36 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:57:36 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:36 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:36 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:57:36 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:36 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:36 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:57:55 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:55 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:57:55 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:59:18 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:59:18 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:59:18 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 14:59:43 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:59:43 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 14:59:43 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:01:56 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:01:56 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:01:56 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:02:38 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:02:38 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:02:38 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:02:53 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:02:53 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:02:53 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:03:19 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:03:19 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:03:19 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:03:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:03:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:03:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:03:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:03:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:03:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:03:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:03:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:03:54 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:04:11 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:04:11 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:04:11 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: length /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 125
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: length /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 126
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: start /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 126
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: start /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 58
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: account_id /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 82
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: draw /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 272
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Undefined index: search /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:04:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/mwclients/public_html/ruyahvip/application/models/Account_transactions_model.php 92
ERROR - 2023-09-05 15:06:22 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:06:22 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:06:22 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:06:47 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:06:47 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:06:47 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:06:48 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:06:48 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:06:48 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:06:48 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:06:48 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:06:48 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:07:02 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:02 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:02 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:07:07 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:07 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:07 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:07:07 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:07 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:07 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:07:07 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:07 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:07 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:07:46 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:46 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:46 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:07:47 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:47 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:47 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:07:47 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:47 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:07:47 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:09:55 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:09:55 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-05 15:09:55 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-05 15:30:21 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8572
ERROR - 2023-09-05 15:30:21 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8604
ERROR - 2023-09-05 15:30:21 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8636
ERROR - 2023-09-05 15:30:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-04')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-04')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 15:30:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:3360) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-05 15:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-05' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-05' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-05' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 12:46:02 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-05 16:24:57 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-05 20:50:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-01' and sales_date<='2023-09-05')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-01' and sales_date<='2023-09-05')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-01' and c.return_date<='2023-09-05')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-01' and d.purchase_date<='2023-09-05')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-05 20:51:43 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-05 20:52:30 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-05 17:52:44 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-05 21:02:23 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-05 21:07:55 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-05 21:08:56 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2587
ERROR - 2023-09-05 21:08:56 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2587
ERROR - 2023-09-05 21:09:07 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2587
ERROR - 2023-09-05 21:09:07 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2587
