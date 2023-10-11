<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-25 08:38:24 --> Could not find the language line "sales_return_list"
ERROR - 2023-08-25 09:27:14 --> Severity: error --> Exception: syntax error, unexpected '$result_opening_balance' (T_VARIABLE), expecting ';' or ',' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6562
ERROR - 2023-08-25 09:54:03 --> Could not find the language line "sales_return_list"
ERROR - 2023-08-25 09:58:56 --> Could not find the language line "sales_return_list"
ERROR - 2023-08-25 10:01:49 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ';' or ',' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6685
ERROR - 2023-08-25 10:06:37 --> Severity: error --> Exception: syntax error, unexpected 'elseif' (T_ELSEIF) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6669
ERROR - 2023-08-25 10:10:54 --> Severity: error --> Exception: syntax error, unexpected 'elseif' (T_ELSEIF) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6669
ERROR - 2023-08-25 10:11:04 --> Severity: error --> Exception: syntax error, unexpected 'elseif' (T_ELSEIF) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6669
ERROR - 2023-08-25 10:11:07 --> Severity: error --> Exception: syntax error, unexpected 'elseif' (T_ELSEIF) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6669
ERROR - 2023-08-25 10:11:16 --> Severity: error --> Exception: syntax error, unexpected 'elseif' (T_ELSEIF) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6669
ERROR - 2023-08-25 10:15:37 --> Severity: error --> Exception: Call to undefined function get_salesreturn_details() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6675
ERROR - 2023-08-25 10:15:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6641) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 10:16:12 --> Severity: error --> Exception: Call to undefined function get_salesreturn_details() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6675
ERROR - 2023-08-25 10:16:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6641) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 10:43:17 --> Severity: error --> Exception: Function name must be a string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6597
ERROR - 2023-08-25 10:43:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6597) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 10:59:10 --> Could not find the language line "sales_return_list"
ERROR - 2023-08-25 13:40:50 --> Query error: Unknown column 'b.return_date' in 'where clause' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =12  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-24')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-24')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =12  and

									(b.return_date>='2000-08-01' and b.payment_date<='2023-08-24')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-25 13:40:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7066
ERROR - 2023-08-25 13:40:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6566) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 13:40:57 --> Query error: Unknown column 'b.return_date' in 'where clause' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =12  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-23')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-23')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =12  and

									(b.return_date>='2000-08-01' and b.payment_date<='2023-08-23')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-25 13:40:57 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7066
ERROR - 2023-08-25 13:40:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6566) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 13:46:44 --> Query error: Unknown column 'b.return_date' in 'where clause' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =12  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-23')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-23')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =12  and

									(b.return_date>='2000-08-01' and b.payment_date<='2023-08-23')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-25 13:46:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7067
ERROR - 2023-08-25 13:46:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6566) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 13:47:43 --> Query error: Unknown column 'b.return_date' in 'where clause' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =12  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-22')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-22')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =12  and

									(b.return_date>='2000-08-01' and b.payment_date<='2023-08-22')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-25 13:47:43 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7067
ERROR - 2023-08-25 13:47:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6566) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 13:50:14 --> Query error: Unknown column 'b.return_date' in 'where clause' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =12  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-23')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-23')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =12  and

									(b.return_date>='2000-08-01' and b.payment_date<='2023-08-23')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-25 13:50:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7067
ERROR - 2023-08-25 13:50:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6566) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 13:50:22 --> Query error: Unknown column 'b.return_date' in 'where clause' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =12  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-24')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-24')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =12  and

									(b.return_date>='2000-08-01' and b.payment_date<='2023-08-24')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-25 13:50:22 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7067
ERROR - 2023-08-25 13:50:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6566) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 13:50:41 --> Query error: Unknown column 'b.return_date' in 'where clause' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =12  and

									(sales_date>='2000-08-01' and sales_date<='2023-07-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-07-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =12  and

									(b.return_date>='2000-08-01' and b.payment_date<='2023-07-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-25 13:50:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7067
ERROR - 2023-08-25 13:50:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6566) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-25 14:07:28 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7261
