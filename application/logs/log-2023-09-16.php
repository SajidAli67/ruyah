<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-16 08:18:12 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:21:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 08:23:53 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8191
ERROR - 2023-09-16 08:23:53 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8223
ERROR - 2023-09-16 08:23:53 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8255
ERROR - 2023-09-16 08:23:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-15')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-15')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-15')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-15')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 08:23:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:3104) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 08:23:59 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8191
ERROR - 2023-09-16 08:23:59 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8223
ERROR - 2023-09-16 08:23:59 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8255
ERROR - 2023-09-16 08:23:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 08:23:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:3104) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 08:24:02 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8191
ERROR - 2023-09-16 08:24:02 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8223
ERROR - 2023-09-16 08:24:02 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8255
ERROR - 2023-09-16 08:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 08:24:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:3104) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 08:24:03 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8191
ERROR - 2023-09-16 08:24:03 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8223
ERROR - 2023-09-16 08:24:03 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8255
ERROR - 2023-09-16 08:24:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 08:24:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:3104) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 08:24:03 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8191
ERROR - 2023-09-16 08:24:03 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8223
ERROR - 2023-09-16 08:24:03 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8255
ERROR - 2023-09-16 08:24:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 08:24:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:3104) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 08:24:04 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8191
ERROR - 2023-09-16 08:24:04 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8223
ERROR - 2023-09-16 08:24:04 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8255
ERROR - 2023-09-16 08:24:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 08:24:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:3104) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 08:24:04 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8191
ERROR - 2023-09-16 08:24:04 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8223
ERROR - 2023-09-16 08:24:04 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8255
ERROR - 2023-09-16 08:24:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 08:24:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:3104) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 08:24:41 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-16 08:25:45 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-16 08:26:31 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2908
ERROR - 2023-09-16 08:26:31 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2908
ERROR - 2023-09-16 08:33:33 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3163
ERROR - 2023-09-16 08:33:33 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3163
ERROR - 2023-09-16 08:44:42 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-16 08:45:43 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3163
ERROR - 2023-09-16 08:45:43 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3163
ERROR - 2023-09-16 08:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-01' and sales_date<='2023-09-16')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-01' and sales_date<='2023-09-16')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-01' and c.return_date<='2023-09-16')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-01' and d.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 08:54:07 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3163
ERROR - 2023-09-16 08:54:07 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 3163
ERROR - 2023-09-16 08:54:17 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:03:56 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2485
ERROR - 2023-09-16 09:04:45 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2567
ERROR - 2023-09-16 09:04:48 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2567
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:07:54 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:08:58 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2920
ERROR - 2023-09-16 09:08:58 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2920
ERROR - 2023-09-16 09:08:58 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:08:58 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:08:58 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:08:58 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2484
ERROR - 2023-09-16 09:15:47 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2748
ERROR - 2023-09-16 09:18:52 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2938
ERROR - 2023-09-16 09:18:52 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2938
ERROR - 2023-09-16 09:19:05 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2938
ERROR - 2023-09-16 09:36:59 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2940
ERROR - 2023-09-16 09:36:59 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2940
ERROR - 2023-09-16 09:47:10 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2927
ERROR - 2023-09-16 09:47:10 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2927
ERROR - 2023-09-16 09:50:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and (sales_date>='2023-09-15' and sales_date<='2023-09-16')  UNION  SELECT 
 ...' at line 10 - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM 
        db_salesitems a WHERE 
        a.item_id =  and (sales_date>='2023-09-15' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM 
        `db_salesitemsreturn` c WHERE 
        c.item_id =  and (c.return_date>='2023-09-15' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM 
        `db_purchaseitems` d WHERE 
        d.item_id =  and (d.purchase_date>='2023-09-15' and d.purchase_date<='2023-09-16') 
ERROR - 2023-09-16 09:55:24 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2505
ERROR - 2023-09-16 09:59:15 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2756
ERROR - 2023-09-16 09:59:53 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2756
ERROR - 2023-09-16 09:59:56 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2756
ERROR - 2023-09-16 09:59:56 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2756
ERROR - 2023-09-16 09:59:57 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2756
ERROR - 2023-09-16 10:01:14 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2756
ERROR - 2023-09-16 10:01:16 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2756
ERROR - 2023-09-16 10:01:17 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2756
ERROR - 2023-09-16 10:01:18 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2756
ERROR - 2023-09-16 10:01:29 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2505
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8550
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8550
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8550
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8550
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8550
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8550
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8550
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8100
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8100
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8100
ERROR - 2023-09-16 10:09:05 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8100
ERROR - 2023-09-16 10:33:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and (sales_date>='2023-09-01' and sales_date<='2023-09-16')  UNION  SELECT 
 ...' at line 10 - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM 
        db_salesitems a WHERE 
        a.item_id =  and (sales_date>='2023-09-01' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM 
        `db_salesitemsreturn` c WHERE 
        c.item_id =  and (c.return_date>='2023-09-01' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM 
        `db_purchaseitems` d WHERE 
        d.item_id =  and (d.purchase_date>='2023-09-01' and d.purchase_date<='2023-09-16') 
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: details /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2478
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:37:01 --> Severity: Notice --> Undefined variable: quantity_display /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2496
ERROR - 2023-09-16 10:47:21 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2908
ERROR - 2023-09-16 10:47:21 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2908
ERROR - 2023-09-16 10:53:01 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2878
ERROR - 2023-09-16 10:53:01 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2878
ERROR - 2023-09-16 10:53:01 --> Severity: error --> Exception: Call to undefined function get_return_details() /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2479
ERROR - 2023-09-16 10:53:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2857) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 10:53:08 --> Severity: error --> Exception: Call to undefined function get_return_details() /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2479
ERROR - 2023-09-16 10:53:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2986) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 10:54:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-08-31')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-31')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2000-08-01' and d.purchase_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 10:54:42 --> Severity: error --> Exception: Call to undefined function get_return_details() /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2479
ERROR - 2023-09-16 10:54:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2986) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 07:59:55 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-16 08:00:36 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-16 11:00:57 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-16 11:01:19 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-16 11:01:54 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8541
ERROR - 2023-09-16 11:01:54 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8541
ERROR - 2023-09-16 11:01:54 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8541
ERROR - 2023-09-16 11:01:54 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8541
ERROR - 2023-09-16 11:01:54 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8541
ERROR - 2023-09-16 11:01:54 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8541
ERROR - 2023-09-16 11:01:54 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8541
ERROR - 2023-09-16 11:01:54 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 11:01:54 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8091
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined variable: str3 /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1287
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1444
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined variable: str3 /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1287
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1444
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined variable: str3 /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1287
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1444
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined variable: str3 /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1287
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1444
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined variable: str3 /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1287
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1444
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1278
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined variable: str3 /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1287
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 1444
ERROR - 2023-09-16 11:02:58 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 967
ERROR - 2023-09-16 11:03:59 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2908
ERROR - 2023-09-16 11:08:37 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2908
ERROR - 2023-09-16 11:09:09 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2908
ERROR - 2023-09-16 11:09:54 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-16 11:10:05 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2908
ERROR - 2023-09-16 11:12:12 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2723
ERROR - 2023-09-16 11:12:15 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2723
ERROR - 2023-09-16 11:13:30 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2723
ERROR - 2023-09-16 11:13:35 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2723
ERROR - 2023-09-16 11:13:40 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2723
ERROR - 2023-09-16 11:13:45 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2723
ERROR - 2023-09-16 11:18:30 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2712
ERROR - 2023-09-16 11:18:30 --> Severity: error --> Exception: Call to undefined function get_return_details() /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2479
ERROR - 2023-09-16 11:18:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2691) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 11:18:38 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2712
ERROR - 2023-09-16 11:18:38 --> Severity: error --> Exception: Call to undefined function get_return_details() /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2479
ERROR - 2023-09-16 11:18:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2691) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 11:27:58 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2716
ERROR - 2023-09-16 11:29:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-14')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-14')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2000-08-01' and d.purchase_date<='2023-09-14')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 11:29:57 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 11:30:19 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 11:34:14 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2919
ERROR - 2023-09-16 11:36:33 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2715
ERROR - 2023-09-16 11:39:03 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2606
ERROR - 2023-09-16 11:46:15 --> Severity: error --> Exception: Call to undefined function system_formatted_date() /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2373
ERROR - 2023-09-16 11:49:32 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2967
ERROR - 2023-09-16 11:52:12 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2915
ERROR - 2023-09-16 11:52:45 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2915
ERROR - 2023-09-16 11:55:55 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2914
ERROR - 2023-09-16 12:07:02 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2911
ERROR - 2023-09-16 12:12:10 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 12:12:26 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-16 09:12:34 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-16 12:13:20 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 12:15:13 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:13 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:17 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:17 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:18 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:18 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:19 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:19 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:19 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:19 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:20 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:20 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:20 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:20 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:21 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:21 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:21 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:21 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:21 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:21 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:22 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:22 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:22 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:22 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:22 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:22 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:23 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:23 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:24 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:24 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:24 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:24 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:24 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:24 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:15:25 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2695
ERROR - 2023-09-16 12:15:25 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:15:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2674) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:20 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:20 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:22 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:22 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:23 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:23 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:23 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:23 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:24 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:24 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:24 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:24 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:24 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:24 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:25 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:25 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:25 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:25 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:26 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:26 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:26 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:26 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:26 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:26 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:27 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:27 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:28 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:28 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:29 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:29 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-16' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:38 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:38 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-15' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-15' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-15' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:40 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2710
ERROR - 2023-09-16 12:17:40 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =7  and
                (sales_date>='2023-09-15' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =7  and
                (c.return_date>='2023-09-15' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =7  and
                (d.return_date>='2023-09-15' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2689) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:44 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =3  and
                (sales_date>='2023-09-01' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =3  and
                (c.return_date>='2023-09-01' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =3  and
                (d.return_date>='2023-09-01' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2818) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:17:45 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_id as sales_id,
                a.sales_qty as stock_quantity,
                a.`created_time_auto` AS created_time
            FROM 
                db_salesitems a WHERE 
                a.item_id =3  and
                (sales_date>='2023-09-01' and sales_date<='2023-09-16')  UNION SELECT 
                c.id as id, 
                c.`return_date` AS tr_date,
                'return' as tr_type,
                c.sales_id  as sales_id,
                c.return_qty  as stock_quantity,
                c.`created_time_auto` AS created_time
            FROM 
                `db_salesitemsreturn` c WHERE 
                c.item_id =3  and
                (c.return_date>='2023-09-01' and c.return_date<='2023-09-16')  UNION SELECT 
                d.id as id, 
                d.`return_date` AS tr_date,
                'purchase_return' as tr_type,
                d.purchase_id  as sales_id,
                d.purchase_qty  as stock_quantity,
                d.`created_time_auto` AS created_time
            FROM 
                `db_purchasereturnitems` d WHERE 
                d.item_id =3  and
                (d.return_date>='2023-09-01' and d.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 12:17:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2818) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 12:21:41 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 12:29:38 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 09:30:25 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-16 12:30:40 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-16 12:30:58 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 13:08:15 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 10:11:23 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-16 13:11:34 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-16 13:11:48 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 13:43:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and (sales_date>='2023-09-15' and sales_date<='2023-09-16')  UNION  SELECT 
 ...' at line 8 - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id =   and (sales_date>='2023-09-15' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id =   and (c.return_date>='2023-09-15' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id =   and (d.purchase_date>='2023-09-15' and d.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 13:46:31 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 14:02:56 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (d.purchase_date>='2023-09-16' and d.purchase_date<='2023-09-16')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.return_id  as sales_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` e WHERE e.item_id = 7  and (e.return_date>='2023-09-16' and e.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 14:09:05 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 14:21:42 --> Could not find the language line "company_address"
ERROR - 2023-09-16 14:21:43 --> Could not find the language line "company_address"
ERROR - 2023-09-16 14:29:37 --> Query error: Unknown column 'e.purchase_id' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-15' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-15' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (purchase_date>='2023-09-15' and purchase_date<='2023-09-16')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'return' as tr_type,
        e.purchase_id  as purchase_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` e WHERE e.item_id = 7  and (e.purchase_date>='2023-09-15' and e.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 14:52:37 --> Query error: Unknown column 'e.purchase_id' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (purchase_date>='2023-09-16' and purchase_date<='2023-09-16')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'return' as tr_type,
        e.purchase_id  as purchase_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` e WHERE e.item_id = 7  and (e.purchase_date>='2023-09-16' and e.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 14:52:59 --> Query error: Unknown column 'e.purchase_id' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (purchase_date>='2023-09-16' and purchase_date<='2023-09-16')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'return' as tr_type,
        e.purchase_id  as purchase_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` e WHERE e.item_id = 7  and (e.purchase_date>='2023-09-16' and e.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 14:54:08 --> Query error: Unknown column 'e.purchase_id' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 1  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 1  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 1  and (purchase_date>='2023-09-16' and purchase_date<='2023-09-16')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'return' as tr_type,
        e.purchase_id  as purchase_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` e WHERE e.item_id = 1  and (e.purchase_date>='2023-09-16' and e.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 14:55:20 --> Query error: Unknown column 'c.return_date' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-15' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-15' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (purchase_date>='2023-09-15' and purchase_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.purchase_id  as purchase_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` c WHERE c.item_id = 7  and (c.purchase_date>='2023-09-15' and c.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 14:56:09 --> Query error: Unknown column 'c.return_date' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-01' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-01' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (purchase_date>='2023-09-01' and purchase_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.purchase_id  as purchase_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` c WHERE c.item_id = 7  and (c.purchase_date>='2023-09-01' and c.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 14:57:44 --> Query error: Unknown column 'e.purchase_date' in 'where clause' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (purchase_date>='2023-09-16' and purchase_date<='2023-09-16')   and (e.purchase_date>='2023-09-16' and e.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 14:59:10 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:03:25 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:06:16 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:06:17 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:06:18 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:06:24 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:06:25 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:06:26 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:02 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:03 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:05 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:06 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:07 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:08 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:09 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:10 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:12 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:13 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:14 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:15 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:07:16 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:11:41 --> Query error: Unknown column 'c.return_date' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-15' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-15' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (d.purchase_date>='2023-09-15' and d.purchase_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.purchase_id  as purchase_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_purchaseitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-15' and c.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 15:17:32 --> Query error: Unknown column 'e.purchase_id' in 'field list' - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (purchase_date>='2023-09-16' and purchase_date<='2023-09-16')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'return' as tr_type,
        e.purchase_id  as purchase_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` e WHERE e.item_id = 7  and (e.purchase_date>='2023-09-16' and e.purchase_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 15:17:55 --> Severity: error --> Exception: Call to undefined method Reports_model::show_item_sales_report() /home/mwclients/public_html/ruyahupdates/application/controllers/Reports.php 123
ERROR - 2023-09-16 15:19:55 --> Severity: error --> Exception: syntax error, unexpected 'below' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2514
ERROR - 2023-09-16 15:20:38 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 15:26:01 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (d.purchase_date>='2023-09-16' and d.purchase_date<='2023-09-16')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.return_id  as sales_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` e WHERE e.item_id = 7  and (e.return_date>='2023-09-16' and e.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 15:27:59 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8005
ERROR - 2023-09-16 15:27:59 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8037
ERROR - 2023-09-16 15:27:59 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 8069
ERROR - 2023-09-16 15:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-09-15')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-09-15')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-09-15')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-09-15')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 15:27:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2918) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 15:28:19 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (d.purchase_date>='2023-09-16' and d.purchase_date<='2023-09-16')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.return_id  as sales_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` e WHERE e.item_id = 7  and (e.return_date>='2023-09-16' and e.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 15:32:53 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2639
ERROR - 2023-09-16 15:39:29 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7 AND (sales_date >= '2023-09-16' AND sales_date <= '2023-09-16')  UNION SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7 AND (c.return_date >= '2023-09-16' AND c.return_date <= '2023-09-16')  UNION SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7 AND (d.purchase_date >= '2023-09-16' AND d.purchase_date <= '2023-09-16')  UNION SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.return_id  as sales_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` e WHERE e.item_id = 7 AND (e.return_date >= '2023-09-16' AND e.return_date <= '2023-09-16')  ORDER BY `tr_date`, `created_time` 
ERROR - 2023-09-16 15:41:36 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2641
ERROR - 2023-09-16 15:43:03 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2641
ERROR - 2023-09-16 15:44:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'pur...' at line 8 - Invalid query: SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a ORDER BY `tr_date`, `created_time`  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.return_id  as sales_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` e WHERE e.item_id = 7
ERROR - 2023-09-16 15:44:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php:2377) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 15:48:28 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2371
ERROR - 2023-09-16 15:48:30 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2371
ERROR - 2023-09-16 15:49:26 --> Severity: Notice --> Undefined variable: from_date /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2372
ERROR - 2023-09-16 15:49:26 --> Severity: Notice --> Undefined variable: to_date /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2373
ERROR - 2023-09-16 15:49:26 --> Severity: Notice --> Undefined variable: item_id /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2413
ERROR - 2023-09-16 15:49:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 8 - Invalid query: SELECT 
    e.id as id, 
    e.`return_date` AS tr_date,
    'purchase_return' as tr_type,
    e.return_id  as sales_id,
    e.return_qty  as stock_quantity,
    e.`created_time_auto` AS created_time
    FROM `db_purchasereturnitems` e WHERE e.item_id = 
ERROR - 2023-09-16 15:49:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-09-16 15:55:12 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7 AND (sales_date >= '2023-09-16' AND sales_date <= '2023-09-16')  UNION SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7 AND (c.return_date >= '2023-09-16' AND c.return_date <= '2023-09-16')  UNION SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7 AND (d.purchase_date >= '2023-09-16' AND d.purchase_date <= '2023-09-16')  UNION SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.return_id  as sales_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` e WHERE e.item_id = 7 AND (e.return_date >= '2023-09-16' AND e.return_date <= '2023-09-16')  ORDER BY `tr_date`, `created_time` 
ERROR - 2023-09-16 15:55:57 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 16:01:01 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (d.purchase_date>='2023-09-16' and d.purchase_date<='2023-09-16')  UNION  SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.return_id  as sales_id,
        e.return_qty  as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` e WHERE e.item_id = 7  and (e.return_date>='2023-09-16' and e.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 16:04:03 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query:  SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  and (sales_date>='2023-09-16' and sales_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id  as sales_id,
        c.return_qty  as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  UNION  SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id  as sales_id,
        d.purchase_qty  as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  and (d.purchase_date>='2023-09-16' and d.purchase_date<='2023-09-16')  UNION  SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        c.return_id  as purchase_id,
        c.return_qty  as stock_quantity,
        ec.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` c WHERE c.item_id = 7  and (c.return_date>='2023-09-16' and c.return_date<='2023-09-16')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-16 16:05:23 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 13:08:14 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-16 16:08:33 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 16:08:43 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-16 16:09:08 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 16:09:14 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 16:12:37 --> Query error: Table 'mwclients_ruyahupdates.db_purchasereturnitems' doesn't exist - Invalid query: SELECT 
        a.id as id,
        a.`sales_date` AS tr_date,
        'invoice' as tr_type,
        a.sales_id as sales_id,
        a.sales_qty as stock_quantity,
        a.`created_time_auto` AS created_time
        FROM db_salesitems a WHERE a.item_id = 7  AND (sales_date >= '2023-09-16' AND sales_date <= '2023-09-16')  UNION SELECT 
        c.id as id, 
        c.`return_date` AS tr_date,
        'return' as tr_type,
        c.sales_id as sales_id,
        c.return_qty as stock_quantity,
        c.`created_time_auto` AS created_time
        FROM `db_salesitemsreturn` c WHERE c.item_id = 7  AND (c.return_date >= '2023-09-16' AND c.return_date <= '2023-09-16')  UNION SELECT 
        d.id as id, 
        d.`purchase_date` AS tr_date,
        'purchase' as tr_type,
        d.purchase_id as sales_id,
        d.purchase_qty as stock_quantity,
        d.`created_time_auto` AS created_time
        FROM `db_purchaseitems` d WHERE d.item_id = 7  AND (d.purchase_date >= '2023-09-16' AND d.purchase_date <= '2023-09-16')  UNION SELECT 
        e.id as id, 
        e.`return_date` AS tr_date,
        'purchase_return' as tr_type,
        e.return_id as sales_id,
        e.return_qty as stock_quantity,
        e.`created_time_auto` AS created_time
        FROM `db_purchasereturnitems` e WHERE e.item_id = 7  AND (e.return_date >= '2023-09-16' AND e.return_date <= '2023-09-16')  ORDER BY `tr_date`, `created_time` 
ERROR - 2023-09-16 17:02:30 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 17:03:29 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 17:04:20 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 17:31:55 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 18:17:20 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-16 21:17:39 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 21:19:33 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 2699
ERROR - 2023-09-16 21:24:12 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-16 21:25:26 --> Could not find the language line "purchase_return_list"
