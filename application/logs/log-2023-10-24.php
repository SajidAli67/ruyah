<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-24 18:29:35 --> Query error: Table 'ruyah.db_sitesettings' doesn't exist - Invalid query: SELECT `version`
FROM `db_sitesettings`
ERROR - 2023-10-24 19:31:07 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:07 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:07 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:07 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:07 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:07 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 18:31:16 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-24 19:31:22 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:22 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:22 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:22 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:22 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:31:22 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:33:20 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:33:20 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:33:20 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:33:20 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:33:20 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:33:20 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7417
ERROR - 2023-10-24 19:37:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`time_at`' at line 75 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time,
									a.`created_time` AS time_at

              					FROM 

              						db_sales a WHERE 

						a.customer_id =18  and

									(sales_date>='2023-10-01' and sales_date<='2023-10-24')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time,
									b.`created_time` AS time_at

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =18  and

									(b.payment_date>='2023-10-01' and b.payment_date<='2023-10-24')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time,
									c.`created_time` AS time_at

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =18  and

									(c.return_date>='2023-10-01' and c.return_date<='2023-10-24')  UNION  SELECT 

									d.id as id, 

									d.`deposit_date` AS tr_date,

									'deposit' as tr_type,

									d.deposit_code as tr_code,

									d.`created_date` AS created_time,
									d.`created_time` AS time_at

								FROM 

									`ac_moneydeposits` d WHERE 

						d.credit_account_id =18 ORDER BY `created_time` `time_at`
ERROR - 2023-10-24 19:38:46 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time,
									a.`created_time` AS time_at

              					FROM 

              						db_sales a WHERE 

						a.customer_id =18  and

									(sales_date>='2023-10-01' and sales_date<='2023-10-24')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time,
									b.`created_time` AS time_at

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =18  and

									(b.payment_date>='2023-10-01' and b.payment_date<='2023-10-24')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time,
									c.`created_time` AS time_at

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =18  and

									(c.return_date>='2023-10-01' and c.return_date<='2023-10-24')  UNION  SELECT 

									d.id as id, 

									d.`deposit_date` AS tr_date,

									'deposit' as tr_type,

									d.deposit_code as tr_code,

									d.`created_date` AS created_time,
									d.`created_time` AS time_at

								FROM 

									`ac_moneydeposits` d WHERE 

						d.credit_account_id =18 ORDER BY `created_time`, `time_at`
ERROR - 2023-10-24 19:41:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

									`ac_moneydeposits` d WHERE 

						d.credit_account_id =1...' at line 72 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time,
									a.`created_time` AS time_at

              					FROM 

              						db_sales a WHERE 

						a.customer_id =18  and

									(sales_date>='2023-10-01' and sales_date<='2023-10-24')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time,
									b.`created_time` AS time_at

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =18  and

									(b.payment_date>='2023-10-01' and b.payment_date<='2023-10-24')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time,

									c.`created_time` AS time_at

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =18  and

									(c.return_date>='2023-10-01' and c.return_date<='2023-10-24')  UNION  SELECT 

									d.id as id, 

									d.`deposit_date` AS tr_date,

									'deposit' as tr_type,

									d.deposit_code as tr_code,

									d.`created_date` AS created_time,
									

								FROM 

									`ac_moneydeposits` d WHERE 

						d.credit_account_id =18 ORDER BY `created_time` ASC 
ERROR - 2023-10-24 19:42:15 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time,
									a.`created_time` AS time_at

              					FROM 

              						db_sales a WHERE 

						a.customer_id =18  and

									(sales_date>='2023-10-01' and sales_date<='2023-10-24')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time,
									b.`created_time` AS time_at

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =18  and

									(b.payment_date>='2023-10-01' and b.payment_date<='2023-10-24')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time,

									c.`created_time` AS time_at

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =18  and

									(c.return_date>='2023-10-01' and c.return_date<='2023-10-24')  UNION  SELECT 

									d.id as id, 

									d.`deposit_date` AS tr_date,

									'deposit' as tr_type,

									d.deposit_code as tr_code,

									d.`created_date` AS created_time,
									d.`created_time` AS time_at

								FROM 

									`ac_moneydeposits` d WHERE 

						d.credit_account_id =18 ORDER BY `created_time` ASC 
ERROR - 2023-10-24 19:46:28 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time,
									a.`created_time` AS time_at

              					FROM 

              						db_sales a WHERE 

						a.customer_id =18  and

									(sales_date>='2023-10-01' and sales_date<='2023-10-24')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time,
									b.`created_time` AS time_at

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =18  and

									(b.payment_date>='2023-10-01' and b.payment_date<='2023-10-24')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time,

									c.`created_time` AS time_at

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =18  and

									(c.return_date>='2023-10-01' and c.return_date<='2023-10-24')  UNION  SELECT 

									d.id as id, 

									d.`deposit_date` AS tr_date,

									'deposit' as tr_type,

									d.deposit_code as tr_code,

									d.`created_date` AS created_time,
									
									d.`created_time` AS time_at

								FROM 

									`ac_moneydeposits` d WHERE 

						d.credit_account_id =18 ORDER BY `created_time` ASC 
ERROR - 2023-10-24 18:47:19 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-24 19:47:27 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:27 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:27 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:27 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:27 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:27 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:44 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:44 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:44 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:44 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:44 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:47:44 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:49:08 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:49:08 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:49:08 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:49:08 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:49:08 --> Severity: Notice --> Undefined property: stdClass::$payment C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
ERROR - 2023-10-24 19:49:08 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\application\models\Reports_model.php 7423
