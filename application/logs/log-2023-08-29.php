<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-29 09:57:56 --> Severity: error --> Exception: syntax error, unexpected ';' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7776
ERROR - 2023-08-29 09:59:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-08-28')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-28')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-28')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-28')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 09:59:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8010
ERROR - 2023-08-29 09:59:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2698) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 09:59:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-07-31')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-07-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-07-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-07-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 09:59:47 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8010
ERROR - 2023-08-29 09:59:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2698) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 09:59:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-07-31')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-07-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-07-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-07-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 09:59:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8010
ERROR - 2023-08-29 09:59:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2698) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 09:59:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-07-31')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-07-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-07-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-07-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 09:59:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8010
ERROR - 2023-08-29 09:59:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2698) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 09:59:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-07-31')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-07-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-07-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-07-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 09:59:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8010
ERROR - 2023-08-29 09:59:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2698) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 10:00:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-08-30')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-30')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-30')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-30')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 10:00:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8010
ERROR - 2023-08-29 10:00:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2698) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 10:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-29' and purchase_date<='2023-08-29')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-29' and purchase_date<='2023-08-29')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-29' and b.payment_date<='2023-08-29')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-29' and c.return_date<='2023-08-29')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 10:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-29 10:00:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1244
ERROR - 2023-08-29 10:00:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 10:02:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-29' and purchase_date<='2023-08-29')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-29' and purchase_date<='2023-08-29')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-29' and b.payment_date<='2023-08-29')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-29' and c.return_date<='2023-08-29')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 10:02:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-29 10:02:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1244
ERROR - 2023-08-29 10:02:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 10:02:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-29')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-29')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-29')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-29')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 10:02:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2000-08-01' and purchase_date<='2023-07-31')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2000-08-01' and purchase_date<='2023-07-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-07-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-07-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 10:02:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1244
ERROR - 2023-08-29 10:02:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 10:55:54 --> Could not find the language line "purchase_return_list"
ERROR - 2023-08-29 10:56:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-28' and purchase_date<='2023-08-29')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-28' and purchase_date<='2023-08-29')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-28' and b.payment_date<='2023-08-29')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-28' and c.return_date<='2023-08-29')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 10:56:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-27')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-27')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-27')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-27')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 10:56:16 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1244
ERROR - 2023-08-29 10:56:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 10:56:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-28' and purchase_date<='2023-08-29')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-28' and purchase_date<='2023-08-29')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-28' and b.payment_date<='2023-08-29')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-28' and c.return_date<='2023-08-29')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 10:56:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-27')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-27')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-27')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-27')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-29 10:56:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1244
ERROR - 2023-08-29 10:56:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-29 10:57:40 --> Could not find the language line "purchase_return_list"
ERROR - 2023-08-29 11:45:29 --> Could not find the language line "purchase_return_list"
ERROR - 2023-08-29 12:14:07 --> Severity: Warning --> Use of undefined constant console - assumed 'console' (this will throw an Error in a future version of PHP) /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 53
ERROR - 2023-08-29 12:14:07 --> Severity: Warning --> log() expects parameter 1 to be float, array given /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 53
ERROR - 2023-08-29 12:14:13 --> Severity: Warning --> Use of undefined constant console - assumed 'console' (this will throw an Error in a future version of PHP) /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 53
ERROR - 2023-08-29 12:14:13 --> Severity: Warning --> log() expects parameter 1 to be float, array given /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 53
ERROR - 2023-08-29 12:17:32 --> Severity: Warning --> Use of undefined constant console - assumed 'console' (this will throw an Error in a future version of PHP) /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 53
ERROR - 2023-08-29 12:17:32 --> Severity: Warning --> log() expects parameter 1 to be float, array given /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 53
ERROR - 2023-08-29 12:20:30 --> Severity: Warning --> Use of undefined constant console - assumed 'console' (this will throw an Error in a future version of PHP) /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 53
ERROR - 2023-08-29 12:20:30 --> Severity: Warning --> log() expects parameter 1 to be float, array given /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 53
ERROR - 2023-08-29 13:06:47 --> Severity: error --> Exception: Object of class CI_DB_mysqli_result could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 73
ERROR - 2023-08-29 13:09:32 --> Severity: error --> Exception: Call to a member function num_rows() on string /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 182
ERROR - 2023-08-29 13:09:40 --> Severity: error --> Exception: Call to a member function num_rows() on string /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 182
ERROR - 2023-08-29 13:10:46 --> Severity: error --> Exception: Call to a member function result() on string /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 176
ERROR - 2023-08-29 14:26:05 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 6
ERROR - 2023-08-29 14:26:07 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 6
ERROR - 2023-08-29 14:26:07 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 6
ERROR - 2023-08-29 14:26:08 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 6
ERROR - 2023-08-29 14:27:13 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 11
ERROR - 2023-08-29 14:27:33 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 11
ERROR - 2023-08-29 14:28:35 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 11
ERROR - 2023-08-29 14:29:33 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 11
ERROR - 2023-08-29 14:32:08 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 11
ERROR - 2023-08-29 14:33:10 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 12
ERROR - 2023-08-29 14:33:12 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 12
ERROR - 2023-08-29 14:35:14 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 11
ERROR - 2023-08-29 14:35:46 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 11
ERROR - 2023-08-29 14:37:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`payment_code IS NOT NULL THEN pp`.`payment_type WHEN srp`.`payment_code IS ...' at line 1 - Invalid query: SELECT `a`.*, `CASE WHEN sp`.`payment_code IS NOT NULL THEN sp`.`payment_type WHEN pp`.`payment_code IS NOT NULL THEN pp`.`payment_type WHEN srp`.`payment_code IS NOT NULL THEN srp`.`payment_type WHEN prp`.`payment_code IS NOT NULL THEN prp`.`payment_type WHEN e`.`payment_code IS NOT NULL THEN e`.`payment_type ELSE NULL END` AS `payment_type`
FROM `ac_accounts` as `a`
LEFT JOIN `db_salespayment` `sp` ON `sp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_purchasepayment` `pp` ON `pp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_salesreturnpayment` `srp` ON `srp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_purchasereturnpayment` `prp` ON `prp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_expense` `e` ON `e`.`payment_code` = `a`.`payment_code`
WHERE   (
`a`.`id` LIKE '%%' ESCAPE '!'
OR  `a`.`account_name` LIKE '%%' ESCAPE '!'
OR  `a`.`parent_id` LIKE '%%' ESCAPE '!'
OR  `a`.`note` LIKE '%%' ESCAPE '!'
OR  `a`.`account_code` LIKE '%%' ESCAPE '!'
OR  `a`.`balance` LIKE '%%' ESCAPE '!'
OR  `a`.`created_by` LIKE '%%' ESCAPE '!'
OR  `a`.`store_id` LIKE '%%' ESCAPE '!'
 )
ORDER BY `a`.`id` DESC
ERROR - 2023-08-29 14:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`payment_code IS NOT NULL THEN pp`.`payment_type WHEN srp`.`payment_code IS ...' at line 1 - Invalid query: SELECT `a`.*, `CASE WHEN sp`.`payment_code IS NOT NULL THEN sp`.`payment_type WHEN pp`.`payment_code IS NOT NULL THEN pp`.`payment_type WHEN srp`.`payment_code IS NOT NULL THEN srp`.`payment_type WHEN prp`.`payment_code IS NOT NULL THEN prp`.`payment_type WHEN e`.`payment_code IS NOT NULL THEN e`.`payment_type ELSE NULL END` AS `payment_type`
FROM `ac_accounts` as `a`
LEFT JOIN `db_salespayment` `sp` ON `sp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_purchasepayment` `pp` ON `pp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_salesreturnpayment` `srp` ON `srp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_purchasereturnpayment` `prp` ON `prp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_expense` `e` ON `e`.`payment_code` = `a`.`payment_code`
WHERE   (
`a`.`id` LIKE '%%' ESCAPE '!'
OR  `a`.`account_name` LIKE '%%' ESCAPE '!'
OR  `a`.`parent_id` LIKE '%%' ESCAPE '!'
OR  `a`.`note` LIKE '%%' ESCAPE '!'
OR  `a`.`account_code` LIKE '%%' ESCAPE '!'
OR  `a`.`balance` LIKE '%%' ESCAPE '!'
OR  `a`.`created_by` LIKE '%%' ESCAPE '!'
OR  `a`.`store_id` LIKE '%%' ESCAPE '!'
 )
ORDER BY `a`.`id` DESC
ERROR - 2023-08-29 14:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`payment_code IS NOT NULL THEN pp`.`payment_type WHEN srp`.`payment_code IS ...' at line 1 - Invalid query: SELECT `a`.*, `CASE WHEN sp`.`payment_code IS NOT NULL THEN sp`.`payment_type WHEN pp`.`payment_code IS NOT NULL THEN pp`.`payment_type WHEN srp`.`payment_code IS NOT NULL THEN srp`.`payment_type WHEN prp`.`payment_code IS NOT NULL THEN prp`.`payment_type WHEN e`.`payment_code IS NOT NULL THEN e`.`payment_type ELSE NULL END` AS `payment_type`
FROM `ac_accounts` as `a`
LEFT JOIN `db_salespayment` `sp` ON `sp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_purchasepayment` `pp` ON `pp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_salesreturnpayment` `srp` ON `srp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_purchasereturnpayment` `prp` ON `prp`.`payment_code` = `a`.`payment_code`
LEFT JOIN `db_expense` `e` ON `e`.`payment_code` = `a`.`payment_code`
WHERE   (
`a`.`id` LIKE '%%' ESCAPE '!'
OR  `a`.`account_name` LIKE '%%' ESCAPE '!'
OR  `a`.`parent_id` LIKE '%%' ESCAPE '!'
OR  `a`.`note` LIKE '%%' ESCAPE '!'
OR  `a`.`account_code` LIKE '%%' ESCAPE '!'
OR  `a`.`balance` LIKE '%%' ESCAPE '!'
OR  `a`.`created_by` LIKE '%%' ESCAPE '!'
OR  `a`.`store_id` LIKE '%%' ESCAPE '!'
 )
ORDER BY `a`.`id` DESC
ERROR - 2023-08-29 14:57:34 --> Severity: error --> Exception: Too few arguments to function Sales_return::invoice(), 0 passed in /home/mwclients/public_html/ruyahvip/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/mwclients/public_html/ruyahvip/application/controllers/Sales_return.php 229
ERROR - 2023-08-29 14:57:36 --> Severity: error --> Exception: Too few arguments to function Sales_return::invoice(), 0 passed in /home/mwclients/public_html/ruyahvip/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/mwclients/public_html/ruyahvip/application/controllers/Sales_return.php 229
ERROR - 2023-08-29 14:58:20 --> Severity: error --> Exception: Too few arguments to function Sales_return::invoice(), 0 passed in /home/mwclients/public_html/ruyahvip/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/mwclients/public_html/ruyahvip/application/controllers/Sales_return.php 229
ERROR - 2023-08-29 15:01:20 --> Severity: error --> Exception: Too few arguments to function Sales_return::invoice(), 0 passed in /home/mwclients/public_html/ruyahvip/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/mwclients/public_html/ruyahvip/application/controllers/Sales_return.php 229
ERROR - 2023-08-29 15:01:24 --> Severity: error --> Exception: Too few arguments to function Sales_return::invoice2(), 0 passed in /home/mwclients/public_html/ruyahvip/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/mwclients/public_html/ruyahvip/application/controllers/Sales_return.php 240
ERROR - 2023-08-29 12:02:25 --> 404 Page Not Found: Sales_return/invoice2
ERROR - 2023-08-29 12:03:12 --> 404 Page Not Found: Account_transaction/index
ERROR - 2023-08-29 12:03:17 --> 404 Page Not Found: Account_transactions/index
ERROR - 2023-08-29 15:10:50 --> Severity: error --> Exception: Call to a member function get_record() on null /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 118
ERROR - 2023-08-29 15:11:06 --> Severity: error --> Exception: Call to undefined method Account_transactions_model::get_record() /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 118
ERROR - 2023-08-29 12:12:58 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 9
ERROR - 2023-08-29 12:13:11 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 9
ERROR - 2023-08-29 15:21:26 --> Severity: error --> Exception: Call to undefined method Accounts_model::get_record_db_salespaymentsreturn() /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 120
ERROR - 2023-08-29 15:21:28 --> Severity: error --> Exception: Call to undefined method Accounts_model::get_record_db_salespaymentsreturn() /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 120
ERROR - 2023-08-29 15:22:46 --> Severity: error --> Exception: Call to undefined method Accounts_model::get_record_db_salespaymentsreturn() /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 120
ERROR - 2023-08-29 15:24:30 --> Severity: error --> Exception: Call to undefined method Accounts_model::get_record_db_salespaymentsreturn() /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 121
ERROR - 2023-08-29 15:26:02 --> Severity: error --> Exception: Call to undefined method Accounts_model::get_record_db_salespaymentsreturn() /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 121
ERROR - 2023-08-29 15:37:08 --> Query error: Unknown column 'purchase_code' in 'where clause' - Invalid query: SELECT *
FROM `db_purchasepayments`
WHERE `purchase_code` = '0000001'
ERROR - 2023-08-29 15:37:08 --> Severity: error --> Exception: Call to a member function row_array() on bool /home/mwclients/public_html/ruyahvip/application/models/Accounts_model.php 264
ERROR - 2023-08-29 12:48:15 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 193
ERROR - 2023-08-29 12:48:28 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 193
ERROR - 2023-08-29 12:54:37 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:54:57 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:55:02 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:55:14 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:55:24 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:56:18 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:57:35 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:58:07 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:58:57 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:59:39 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 12:59:50 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 13:00:00 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 13:00:35 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 13:00:43 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 13:00:45 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 13:00:55 --> Severity: error --> Exception: syntax error, unexpected '}' /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 194
ERROR - 2023-08-29 21:38:04 --> Query error: Illegal mix of collations (latin1_swedish_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `ac_accounts`
WHERE upper(account_name) = 'الصندوق'
AND `store_id` = '2'
ERROR - 2023-08-29 21:38:04 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/system/database/DB_query_builder.php 1429
ERROR - 2023-08-29 18:42:46 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-29 20:48:59 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-29 20:49:25 --> 404 Page Not Found: Theme/plugins
