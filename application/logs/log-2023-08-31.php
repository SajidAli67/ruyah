<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-31 08:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 08:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-31 08:32:30 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1248
ERROR - 2023-08-31 08:32:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 08:58:08 --> Severity: error --> Exception: syntax error, unexpected 'JOIN' (T_STRING) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 623
ERROR - 2023-08-31 08:58:29 --> Severity: error --> Exception: syntax error, unexpected 'JOIN' (T_STRING) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 623
ERROR - 2023-08-31 08:58:31 --> Severity: error --> Exception: syntax error, unexpected 'JOIN' (T_STRING) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 623
ERROR - 2023-08-31 08:59:11 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.item_id,
    pi.item_name,
    pi.quantity,
    pi.unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    db_purchaseitems pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-31' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-31' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-31' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 08:59:11 --> Severity: error --> Exception: Call to a member function result() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 718
ERROR - 2023-08-31 08:59:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:718) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 08:59:13 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.item_id,
    pi.item_name,
    pi.quantity,
    pi.unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    db_purchaseitems pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 08:59:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 718
ERROR - 2023-08-31 08:59:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:718) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:00:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  ...' at line 23 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.item_id,
    pi.item_name,
    pi.quantity,
    pi.unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    db_purchaseitems pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:00:40 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.item_id,
    pi.item_name,
    pi.quantity,
    pi.unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    db_purchaseitems pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:00:43 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.item_id,
    pi.item_name,
    pi.quantity,
    pi.unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    db_purchaseitems pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =3  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =3  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =3  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:03:06 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    db_purchaseitems pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-02' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-02' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-02' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:03:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 745
ERROR - 2023-08-31 09:03:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:731) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:03:10 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    db_purchaseitems pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:03:10 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 745
ERROR - 2023-08-31 09:03:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:731) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:03:13 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    db_purchaseitems pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =3  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =3  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =3  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:03:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 745
ERROR - 2023-08-31 09:03:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:731) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:03:17 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    db_purchaseitems pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:03:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 745
ERROR - 2023-08-31 09:03:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:731) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:05:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  ...' at line 23 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    `db_purchaseitems` pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:05:53 --> Severity: error --> Exception: Call to a member function result() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 718
ERROR - 2023-08-31 09:05:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:718) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:05:58 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    `db_purchaseitems` pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:05:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 718
ERROR - 2023-08-31 09:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:718) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:10:31 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    `db_purchaseitems` pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:10:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 745
ERROR - 2023-08-31 09:10:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:731) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:10:37 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    `db_purchaseitems` pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-06-27' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-06-27' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-06-27' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:10:37 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 745
ERROR - 2023-08-31 09:10:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:731) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:10:41 --> Query error: Unknown column 'pi.item_name' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    `db_purchaseitems` pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =3  and

									(purchase_date>='2023-06-27' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =3  and

									(b.payment_date>='2023-06-27' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =3  and

									(c.return_date>='2023-06-27' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:10:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 745
ERROR - 2023-08-31 09:10:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:731) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-06-27' and purchase_date<='2023-08-31')  ...' at line 23 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,
	              					pi.`item_id` as item,
    pi.`item_name` as item_name,
    pi.`quantity` as item_quantity, 
    pi.`unit_price` as item_unit_price

              					FROM 

              						db_purchase a
              						LEFT JOIN
    `db_purchaseitems` pi ON a.id = pi.purchase_id WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-06-27' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-06-27' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-06-27' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2000-08-01' and purchase_date<='2023-06-26')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2000-08-01' and purchase_date<='2023-06-26')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-06-26')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-06-26')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:10:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1254
ERROR - 2023-08-31 09:10:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:731) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:15:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:15:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-31 09:15:39 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1245
ERROR - 2023-08-31 09:15:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:15:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:15:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:15:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-31' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-31' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-31' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-30')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2000-08-01' and purchase_date<='2023-08-30')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-30')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-30')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:15:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1245
ERROR - 2023-08-31 09:15:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:15:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:15:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-31 09:15:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1245
ERROR - 2023-08-31 09:15:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:16:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:16:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:16:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:16:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =3  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =3  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:16:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:16:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:16:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and

									(purchase_date>='2023-08-31' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =3  and

									(b.payment_date>='2023-08-31' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =3  and

									(c.return_date>='2023-08-31' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:16:09 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:16:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:16:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and

									(purchase_date>='2023-08-23' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =3  and

									(b.payment_date>='2023-08-23' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =3  and

									(c.return_date>='2023-08-23' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:16:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:16:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:16:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and

									(purchase_date>='2023-08-22' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =3  and

									(b.payment_date>='2023-08-22' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =3  and

									(c.return_date>='2023-08-22' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:16:15 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:16:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:16:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and

									(purchase_date>='2023-08-15' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =3  and

									(b.payment_date>='2023-08-15' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =3  and

									(c.return_date>='2023-08-15' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:16:18 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:16:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:16:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =3  and

									(purchase_date>='2023-08-31' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =3  and

									(b.payment_date>='2023-08-31' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =3  and

									(c.return_date>='2023-08-31' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:16:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:16:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:16:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-31' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-31' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-31' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:16:33 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:16:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:16:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-31' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-31' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-31' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:16:59 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:16:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-01' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-01' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-01' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:17:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:17:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:17:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and
...' at line 13 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time,

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =1  and

									(purchase_date>='2023-08-31' and purchase_date<='2023-08-31')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =1  and

									(b.payment_date>='2023-08-31' and b.payment_date<='2023-08-31')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =1  and

									(c.return_date>='2023-08-31' and c.return_date<='2023-08-31')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-31 09:17:08 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 739
ERROR - 2023-08-31 09:17:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:725) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:25:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-31 09:25:48 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8018
ERROR - 2023-08-31 09:25:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2706) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:25:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-31 09:25:52 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8018
ERROR - 2023-08-31 09:25:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2706) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:25:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-31 09:25:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8018
ERROR - 2023-08-31 09:25:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2706) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:26:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-31 09:26:01 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8018
ERROR - 2023-08-31 09:26:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2706) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:26:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-31 09:26:03 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8018
ERROR - 2023-08-31 09:26:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2706) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-31 09:31:29 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2023-08-31 09:31:29 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7573
ERROR - 2023-08-31 09:31:45 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2023-08-31 09:31:45 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7573
ERROR - 2023-08-31 09:32:13 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2023-08-31 09:32:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7573
ERROR - 2023-08-31 11:36:04 --> Could not find the language line "company_address"
