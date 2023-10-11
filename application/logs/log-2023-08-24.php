<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-24 06:00:53 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-24 06:01:41 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-24 09:24:28 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6747
ERROR - 2023-08-24 09:24:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6594) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-24 09:26:34 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6747
ERROR - 2023-08-24 09:26:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6594) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-24 09:26:48 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6747
ERROR - 2023-08-24 09:26:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6594) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-24 10:00:02 --> Severity: error --> Exception: syntax error, unexpected '$tot_total_cost' (T_VARIABLE), expecting ')' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6816
ERROR - 2023-08-24 10:54:35 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6459
ERROR - 2023-08-24 10:54:47 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6459
ERROR - 2023-08-24 10:55:35 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6459
ERROR - 2023-08-24 11:00:17 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6466
ERROR - 2023-08-24 11:02:42 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6471
ERROR - 2023-08-24 11:04:44 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6471
ERROR - 2023-08-24 11:05:10 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6471
ERROR - 2023-08-24 11:05:42 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6471
ERROR - 2023-08-24 11:06:38 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6471
ERROR - 2023-08-24 11:07:54 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6471
ERROR - 2023-08-24 11:08:31 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6472
ERROR - 2023-08-24 11:11:03 --> Severity: error --> Exception: Call to undefined function calculate_opening_balance() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6471
ERROR - 2023-08-24 12:09:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''sales_code' as tr_code,

	              					a.`created_time_auto` AS create...' at line 9 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.'sales_code' as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =12 UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12 ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-24 12:09:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6537
ERROR - 2023-08-24 12:15:48 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting ')' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1869
ERROR - 2023-08-24 12:30:23 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6752
ERROR - 2023-08-24 12:30:59 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6752
ERROR - 2023-08-24 12:30:59 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6752
ERROR - 2023-08-24 12:30:59 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6752
ERROR - 2023-08-24 12:30:59 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6752
ERROR - 2023-08-24 12:30:59 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6752
ERROR - 2023-08-24 12:30:59 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6752
ERROR - 2023-08-24 12:30:59 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6752
ERROR - 2023-08-24 12:30:59 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6752
ERROR - 2023-08-24 12:36:42 --> Severity: Warning --> A non-numeric value encountered /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6753
ERROR - 2023-08-24 13:05:09 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6847
ERROR - 2023-08-24 13:05:31 --> Query error: The used SELECT statements have a different number of columns - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_code as tr_code,
                a.`created_time_auto` AS created_time,
                grand_total AS transaction_amount
            FROM 
                db_sales a UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12 ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-24 13:05:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6531
ERROR - 2023-08-24 13:05:41 --> Query error: The used SELECT statements have a different number of columns - Invalid query: SELECT 
                a.id as id,
                a.`sales_date` AS tr_date,
                'invoice' as tr_type,
                a.sales_code as tr_code,
                a.`created_time_auto` AS created_time,
                grand_total AS transaction_amount
            FROM 
                db_sales a WHERE 
                    a.customer_id = 12 AND
                    sales_date <= '2023-08-24' UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =12 ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-24 13:05:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6519
ERROR - 2023-08-24 14:00:02 --> Severity: error --> Exception: Call to undefined function sales_and_payments_report123() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6834
ERROR - 2023-08-24 14:00:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6585) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-24 14:00:12 --> Severity: error --> Exception: Call to undefined function sales_and_payments_report123() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6834
ERROR - 2023-08-24 14:00:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6585) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-24 14:01:01 --> Severity: error --> Exception: Call to undefined function sales_and_payments_report123() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 6831
ERROR - 2023-08-24 14:01:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:6585) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-24 11:40:18 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-24 11:40:42 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-24 11:41:03 --> 404 Page Not Found: Theme/plugins
