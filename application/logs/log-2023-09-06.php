<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-06 12:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-06' and sales_date<='2023-09-06')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-06' and sales_date<='2023-09-06')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-06' and c.return_date<='2023-09-06')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-06' and d.purchase_date<='2023-09-06')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-06 09:58:00 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-06 12:59:23 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-06 12:59:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-06' and sales_date<='2023-09-06')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-06' and sales_date<='2023-09-06')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-06' and c.return_date<='2023-09-06')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-06' and d.purchase_date<='2023-09-06')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-06 13:00:07 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2587
ERROR - 2023-09-06 13:01:30 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2587
ERROR - 2023-09-06 13:01:30 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2587
ERROR - 2023-09-06 13:02:04 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2587
ERROR - 2023-09-06 13:02:04 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2587
ERROR - 2023-09-06 10:05:48 --> 404 Page Not Found: W/index
ERROR - 2023-09-06 13:06:42 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-06 13:08:07 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-06 10:08:38 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-06 10:28:43 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-06 13:39:53 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 3163
ERROR - 2023-09-06 12:12:21 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-06 15:12:41 --> Could not find the language line "company_address"
ERROR - 2023-09-06 12:13:34 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-06 15:14:30 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-06 15:15:16 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-06 15:18:00 --> Could not find the language line "vat_status"
ERROR - 2023-09-06 15:18:00 --> Could not find the language line "store_backup"
ERROR - 2023-09-06 15:18:00 --> Could not find the language line "store_backup_import"
ERROR - 2023-09-06 12:18:00 --> 404 Page Not Found: Theme/dist
ERROR - 2023-09-06 12:18:00 --> 404 Page Not Found: Theme/dist
ERROR - 2023-09-06 15:18:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-06' and sales_date<='2023-09-06')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-06' and sales_date<='2023-09-06')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-06' and c.return_date<='2023-09-06')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-06' and d.purchase_date<='2023-09-06')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-06 15:51:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-06' and sales_date<='2023-09-06')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					a.sales_qty as stock_quantity,
	              
	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-06' and sales_date<='2023-09-06')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.sales_id  as sales_id,
									c.return_qty  as stock_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-06' and c.return_date<='2023-09-06')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,
									d.purchase_qty  as stock_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-06' and d.purchase_date<='2023-09-06')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-06 15:51:54 --> Could not find the language line "purchase_return_list"
