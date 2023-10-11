<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-30 00:02:08 --> Could not find the language line "sales_return_list"
ERROR - 2023-08-30 00:02:52 --> Could not find the language line "sales_return_list"
ERROR - 2023-08-30 00:06:20 --> Could not find the language line "purchase_return_list"
ERROR - 2023-08-30 00:15:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-30' and purchase_date<='2023-08-30')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-30' and purchase_date<='2023-08-30')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-30' and b.payment_date<='2023-08-30')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-30' and c.return_date<='2023-08-30')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-30 00:15:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-29')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-29')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-29')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-29')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-30 00:15:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1244
ERROR - 2023-08-30 00:15:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 00:15:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-29' and purchase_date<='2023-08-30')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-29' and purchase_date<='2023-08-30')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-29' and b.payment_date<='2023-08-30')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-29' and c.return_date<='2023-08-30')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-30 00:15:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-28')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-28')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-28')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-28')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-30 00:15:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1244
ERROR - 2023-08-30 00:15:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 13:09:44 --> Severity: error --> Exception: Call to a member function row() on null /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1010
ERROR - 2023-08-30 13:09:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 13:38:06 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting ';' or ',' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2531
ERROR - 2023-08-30 13:50:05 --> Query error: Unknown column 'd.item_code' in 'on clause' - Invalid query: SELECT `a`.`id`, `a`.`sales_code`, `a`.`sales_date`, `b`.`customer_name`, `b`.`customer_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `c`.`unit_total_cost`, `c`.`total_cost`, `e`.`category_name`, `c`.`sales_qty`, `d`.`item_name`, `i`.`stock`
FROM `db_sales` as `a`
LEFT JOIN `db_items` as `i` ON `d`.`item_code` = `i`.`item_code`
LEFT JOIN `db_salesitems` as `c` ON `c`.`sales_id` = `a`.`id`
LEFT JOIN `db_items` as `d` ON d.`id`= c.`item_id`
RIGHT JOIN `db_category` as `e` ON e.`id`= d.`category_id` 
LEFT JOIN `db_customers` as `b` ON b.`id`= a.`customer_id`
WHERE `a`.`sales_status` = 'Final'
AND (`a`.`sales_date` >= '2023-08-01' and `a`.`sales_date` <= '2023-08-30')
AND `a`.`store_id` = '2'
ORDER BY `a`.`sales_date` DESC, `a`.`sales_code` DESC
ERROR - 2023-08-30 13:50:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2508
ERROR - 2023-08-30 13:50:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2508) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 13:50:12 --> Query error: Unknown column 'd.item_code' in 'on clause' - Invalid query: SELECT `a`.`id`, `a`.`sales_code`, `a`.`sales_date`, `b`.`customer_name`, `b`.`customer_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `c`.`unit_total_cost`, `c`.`total_cost`, `e`.`category_name`, `c`.`sales_qty`, `d`.`item_name`, `i`.`stock`
FROM `db_sales` as `a`
LEFT JOIN `db_items` as `i` ON `d`.`item_code` = `i`.`item_code`
LEFT JOIN `db_salesitems` as `c` ON `c`.`sales_id` = `a`.`id` and `c`.`item_id`=1
LEFT JOIN `db_items` as `d` ON d.`id`= c.`item_id`
RIGHT JOIN `db_category` as `e` ON e.`id`= d.`category_id` 
LEFT JOIN `db_customers` as `b` ON b.`id`= a.`customer_id`
WHERE `a`.`sales_status` = 'Final'
AND (`a`.`sales_date` >= '2023-08-01' and `a`.`sales_date` <= '2023-08-30')
AND `a`.`store_id` = '2'
ORDER BY `a`.`sales_date` DESC, `a`.`sales_code` DESC
ERROR - 2023-08-30 13:50:12 --> Severity: error --> Exception: Call to a member function result() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2508
ERROR - 2023-08-30 13:50:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2508) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 14:02:12 --> Severity: error --> Exception: Cannot use object of type stdClass as array /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2518
ERROR - 2023-08-30 14:02:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2518) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 14:02:16 --> Severity: error --> Exception: Cannot use object of type stdClass as array /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2518
ERROR - 2023-08-30 14:02:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2518) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 14:03:31 --> Severity: error --> Exception: Cannot use object of type stdClass as array /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2519
ERROR - 2023-08-30 14:03:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2519) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 14:03:35 --> Severity: error --> Exception: Cannot use object of type stdClass as array /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2519
ERROR - 2023-08-30 14:03:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2519) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 14:04:25 --> Severity: error --> Exception: Cannot use object of type stdClass as array /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2519
ERROR - 2023-08-30 14:04:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2519) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 14:07:32 --> Severity: error --> Exception: Call to a member function result() on array /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2529
ERROR - 2023-08-30 14:07:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2528) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-30 14:08:33 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-08-30 14:09:09 --> Severity: error --> Exception: syntax error, unexpected '5' (T_LNUMBER), expecting ';' or ',' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2529
ERROR - 2023-08-30 14:09:10 --> Severity: error --> Exception: syntax error, unexpected '5' (T_LNUMBER), expecting ';' or ',' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2529
ERROR - 2023-08-30 14:44:53 --> Severity: error --> Exception: Call to a member function row() on null /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1010
ERROR - 2023-08-30 14:44:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
