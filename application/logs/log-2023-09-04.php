<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-04 08:15:38 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7869
ERROR - 2023-09-04 08:15:38 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7901
ERROR - 2023-09-04 08:15:38 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7933
ERROR - 2023-09-04 08:15:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-08-26')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-26')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-26')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-26')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 08:15:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2653) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 08:15:46 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7869
ERROR - 2023-09-04 08:15:46 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7901
ERROR - 2023-09-04 08:15:46 --> Severity: Notice --> Undefined variable: customer_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7933
ERROR - 2023-09-04 08:15:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-06-24')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-06-24')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-06-24')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-06-24')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 08:15:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2653) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7734
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7734
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7760
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7734
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7734
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7760
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7734
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7734
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7760
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7734
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7760
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7734
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7734
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7760
ERROR - 2023-09-04 08:15:52 --> Severity: Notice --> Undefined variable: result_opening_balance /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7816
ERROR - 2023-09-04 08:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7748
ERROR - 2023-09-04 08:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7748
ERROR - 2023-09-04 08:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7748
ERROR - 2023-09-04 08:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7748
ERROR - 2023-09-04 08:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7748
ERROR - 2023-09-04 08:46:43 --> Query error: Unknown column 'a.sales_date' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_items a WHERE 

						a.item_id =1  and

									(created_date>='2023-09-04' and created_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

								

									'return' as tr_type,

									c.return_id  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1
ERROR - 2023-09-04 08:48:40 --> Query error: Unknown column 'a.sales_date' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.item_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_items a WHERE 

						a.item_id =1  and

									(created_date>='2023-09-04' and created_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

								

									'return' as tr_type,

									c.return_id  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1
ERROR - 2023-09-04 09:35:51 --> Query error: Unknown column 'a.created_time_auto' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_id as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =1  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  ORDER BY `tr_date`,`	created_time_auto` 
ERROR - 2023-09-04 09:37:55 --> Query error: Unknown column 'c.return_code' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.item_id as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =1  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`return_date` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  ORDER BY `tr_date`,`	created_time_auto` 
ERROR - 2023-09-04 06:49:39 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-04 09:58:23 --> Query error: Unknown column '2023-09-04' in 'where clause' - Invalid query: SELECT `a`.`id`, `a`.`sales_code`, `a`.`sales_date`, `b`.`customer_name`, `b`.`customer_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `c`.`unit_total_cost`, `c`.`total_cost`, `e`.`category_name`, `d`.`stock` as `items_stock`, `c`.`sales_qty`, `d`.`item_name`
FROM `db_sales` as `a`
LEFT JOIN `db_salesitems` as `c` ON `c`.`sales_id` = `a`.`id` and `c`.`item_id`=1
LEFT JOIN `db_items` as `d` ON d.`id`= c.`item_id`
RIGHT JOIN `db_category` as `e` ON e.`id`= d.`category_id` 
LEFT JOIN `db_customers` as `b` ON b.`id`= a.`customer_id`
WHERE `a`.`sales_status` = 'Final'
AND (`a`.`sales_date` >= '2023-09-04' and `a`.`sales_date` <= '2023-09-04')
AND `a`.`store_id` = '2'
AND `c`.`created_time_auto` >= `2023-09-04` and `d`.`created_time_auto` <= `2023-09-04`
ORDER BY `a`.`sales_date` DESC, `a`.`sales_code` DESC
ERROR - 2023-09-04 09:58:46 --> Query error: Unknown column '2023-09-04' in 'where clause' - Invalid query: SELECT `a`.`id`, `a`.`sales_code`, `a`.`sales_date`, `b`.`customer_name`, `b`.`customer_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `c`.`unit_total_cost`, `c`.`total_cost`, `e`.`category_name`, `d`.`stock` as `items_stock`, `c`.`sales_qty`, `d`.`item_name`
FROM `db_sales` as `a`
LEFT JOIN `db_salesitems` as `c` ON `c`.`sales_id` = `a`.`id` and `c`.`item_id`=1
LEFT JOIN `db_items` as `d` ON d.`id`= c.`item_id`
RIGHT JOIN `db_category` as `e` ON e.`id`= d.`category_id` 
LEFT JOIN `db_customers` as `b` ON b.`id`= a.`customer_id`
WHERE `a`.`sales_status` = 'Final'
AND (`a`.`sales_date` >= '2023-09-04' and `a`.`sales_date` <= '2023-09-04')
AND `a`.`store_id` = '2'
AND `d`.`created_time_auto` >= `2023-09-04` and `d`.`created_time_auto` <= `2023-09-04`
ORDER BY `a`.`sales_date` DESC, `a`.`sales_code` DESC
ERROR - 2023-09-04 09:59:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and `d`.`created_time_auto` <= .`2023-09-04`.
ORDER BY `a`.`sales_date` DESC,...' at line 10 - Invalid query: SELECT `a`.`id`, `a`.`sales_code`, `a`.`sales_date`, `b`.`customer_name`, `b`.`customer_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `c`.`unit_total_cost`, `c`.`total_cost`, `e`.`category_name`, `d`.`stock` as `items_stock`, `c`.`sales_qty`, `d`.`item_name`
FROM `db_sales` as `a`
LEFT JOIN `db_salesitems` as `c` ON `c`.`sales_id` = `a`.`id` and `c`.`item_id`=1
LEFT JOIN `db_items` as `d` ON d.`id`= c.`item_id`
RIGHT JOIN `db_category` as `e` ON e.`id`= d.`category_id` 
LEFT JOIN `db_customers` as `b` ON b.`id`= a.`customer_id`
WHERE `a`.`sales_status` = 'Final'
AND (`a`.`sales_date` >= '2023-09-04' and `a`.`sales_date` <= '2023-09-04')
AND `a`.`store_id` = '2'
AND `d`.`created_time_auto` >= .`2023-09-04`. and `d`.`created_time_auto` <= .`2023-09-04`.
ORDER BY `a`.`sales_date` DESC, `a`.`sales_code` DESC
ERROR - 2023-09-04 10:00:31 --> Severity: Notice --> Undefined variable: fetch_stock /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2454
ERROR - 2023-09-04 07:01:07 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-04 10:03:25 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-09-04 10:46:17 --> Severity: Notice --> Undefined variable: total_columns_count /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7271
ERROR - 2023-09-04 10:46:39 --> Query error: Not unique table/alias: 'e' - Invalid query: SELECT `a`.`id`, `a`.`sales_code`, `a`.`sales_date`, `b`.`customer_name`, `b`.`customer_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `c`.`unit_total_cost`, `c`.`total_cost`, `e`.`category_name`, `d`.`stock` as `items_stock`, `c`.`sales_qty`, `d`.`item_name`, `e`.`id`, `e`.`return_date`, `e`.`return_code`, `e`.`store_id`, `e`.`return_status`
FROM (`db_sales` as `a`, `db_salesreturn` `e`)
LEFT JOIN `db_salesitems` as `c` ON `c`.`sales_id` = `a`.`id` and `c`.`item_id`=1
LEFT JOIN `db_items` as `d` ON d.`id`= c.`item_id`
RIGHT JOIN `db_category` as `e` ON e.`id`= d.`category_id` 
LEFT JOIN `db_customers` as `b` ON b.`id`= a.`customer_id`
WHERE `a`.`sales_status` = 'Final'
AND (`a`.`sales_date` >= '2023-09-04' and `a`.`sales_date` <= '2023-09-04')
AND (`e`.`return_date` >= '2023-09-04' and `e`.`return_date` <= '2023-09-04')
AND `a`.`store_id` = '2'
ORDER BY `a`.`sales_date` DESC, `a`.`sales_code` DESC
ERROR - 2023-09-04 10:54:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
JOIN `db_salesreturn`.`return_store_id =` `db_sales`.`sales_store_id` USING...' at line 44 - Invalid query: SELECT `db_salesreturn`.*, `db_sales`.*
FROM ((SELECT
                    a.id AS return_id, `a`.`return_date`, `a`.`return_code`, `a`.`store_id` AS `return_store_id`, `a`.`return_status`, b.customer_name AS return_customer_name
                FROM
                    db_salesreturn a
                LEFT JOIN
                    db_customers b ON b.id = a.customer_id
                WHERE
                    (a.return_date >= '2023-09-04' AND a.return_date <= '2023-09-04')
                    AND ('' = "" OR a.warehouse_id = '')
                    AND ('2' = "" OR a.store_id = '2')
                ORDER BY
                    a.return_date DESC, a.return_code DESC) db_salesreturn)
JOIN (SELECT
                    a.id AS sales_id,
                    a.sales_code,
                    a.sales_date,
                    b.customer_name,
                    b.customer_code,
                    a.grand_total,
                    a.paid_amount,
                    a.store_id AS sales_store_id,
                    c.unit_total_cost,
                    c.total_cost,
                    e.category_name,
                    d.stock AS items_stock,
                    c.sales_qty,
                    d.item_name
                FROM
                    db_sales a
                LEFT JOIN
                    db_salesitems c ON c.sales_id = a.id AND ('1' = "" OR c.item_id = '1')
                LEFT JOIN
                    db_items d ON d.id = c.item_id
                RIGHT JOIN
                    db_category e ON e.id = d.category_id AND ('' = "" OR e.id = '')
                LEFT JOIN
                    db_customers b ON b.id = a.customer_id
                WHERE
                    a.sales_status = "Final"
                    AND ('no' = "yes" OR (a.sales_date >= '2023-09-04' AND a.sales_date <= '2023-09-04'))
                    AND ('2' = "" OR a.store_id = '2')
                ORDER BY
                    a.sales_date DESC, a.sales_code DESC) S USING ()
JOIN `db_salesreturn`.`return_store_id =` `db_sales`.`sales_store_id` USING ()
ORDER BY COALESCE(db_salesreturn.return_date, db_sales.sales_date) DESC, COALESCE(db_salesreturn.return_code, db_sales.sales_code) DESC
ERROR - 2023-09-04 10:55:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
JOIN `db_salesreturn`.`return_store_id =` `db_sales`.`sales_store_id` USING...' at line 44 - Invalid query: SELECT `db_salesreturn`.*, `db_sales`.*
FROM ((SELECT
                    a.id AS return_id, `a`.`return_date`, `a`.`return_code`, `a`.`store_id` AS `return_store_id`, `a`.`return_status`, b.customer_name AS return_customer_name
                FROM
                    db_salesreturn a
                LEFT JOIN
                    db_customers b ON b.id = a.customer_id
                WHERE
                    (a.return_date >= '2023-09-04' AND a.return_date <= '2023-09-04')
                    AND ('' = "" OR a.warehouse_id = '')
                    AND ('2' = "" OR a.store_id = '2')
                ORDER BY
                    a.return_date DESC, a.return_code DESC) db_salesreturn)
JOIN (SELECT
                    a.id AS sales_id,
                    a.sales_code,
                    a.sales_date,
                    b.customer_name,
                    b.customer_code,
                    a.grand_total,
                    a.paid_amount,
                    a.store_id AS sales_store_id,
                    c.unit_total_cost,
                    c.total_cost,
                    e.category_name,
                    d.stock AS items_stock,
                    c.sales_qty,
                    d.item_name
                FROM
                    db_sales a
                LEFT JOIN
                    db_salesitems c ON c.sales_id = a.id AND ('1' = "" OR c.item_id = '1')
                LEFT JOIN
                    db_items d ON d.id = c.item_id
                RIGHT JOIN
                    db_category e ON e.id = d.category_id AND ('' = "" OR e.id = '')
                LEFT JOIN
                    db_customers b ON b.id = a.customer_id
                WHERE
                    a.sales_status = "Final"
                    AND ('no' = "yes" OR (a.sales_date >= '2023-09-04' AND a.sales_date <= '2023-09-04'))
                    AND ('2' = "" OR a.store_id = '2')
                ORDER BY
                    a.sales_date DESC, a.sales_code DESC) S USING ()
JOIN `db_salesreturn`.`return_store_id =` `db_sales`.`sales_store_id` USING ()
ORDER BY COALESCE(db_salesreturn.return_date, db_sales.sales_date) DESC, COALESCE(db_salesreturn.return_code, db_sales.sales_code) DESC
ERROR - 2023-09-04 11:14:02 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-04 11:15:30 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-04 11:16:43 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1278
ERROR - 2023-09-04 11:16:43 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1278
ERROR - 2023-09-04 11:16:43 --> Severity: Notice --> Undefined variable: str3 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1287
ERROR - 2023-09-04 11:16:43 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1444
ERROR - 2023-09-04 11:16:43 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1278
ERROR - 2023-09-04 11:16:43 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1278
ERROR - 2023-09-04 11:16:43 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1444
ERROR - 2023-09-04 11:16:43 --> Severity: Notice --> Undefined variable: res3 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 957
ERROR - 2023-09-04 11:16:43 --> Severity: error --> Exception: Call to a member function row() on null /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 957
ERROR - 2023-09-04 11:16:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:671) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 11:16:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:16:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:16:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:16:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:16:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:16:49 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:16:49 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:17:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND (a.purchase_date >= '2023-08-28' AND a.purchase_date <= '2023-09-04') UNI...' at line 10 - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id =  AND (a.purchase_date >= '2023-08-28' AND a.purchase_date <= '2023-09-04') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id =  AND (b.payment_date >= '2023-08-28' AND b.payment_date <= '2023-09-04') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id =  AND (c.return_date >= '2023-08-28' AND c.return_date <= '2023-09-04') ORDER BY `tr_date`, `created_time`
ERROR - 2023-09-04 11:18:18 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:18:18 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:18:18 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:18:18 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:18:18 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:18:18 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:18:18 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 11:48:41 --> Query error: Table 'mwclients_ruyahvip.db_salesitemss' doesn't exist - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitemss a WHERE 

						a.item_id =1  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_qty  as tr_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 11:49:51 --> Query error: Table 'mwclients_ruyahvip.db_salesitemss' doesn't exist - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitemss a WHERE 

						a.item_id =1  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									-- c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_qty  as tr_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 12:21:59 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-04 12:21:59 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
ERROR - 2023-09-04 09:24:39 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-04 12:28:59 --> Could not find the language line "company_address"
ERROR - 2023-09-04 12:30:47 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7800
ERROR - 2023-09-04 12:30:47 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7800
ERROR - 2023-09-04 12:42:00 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7800
ERROR - 2023-09-04 12:42:00 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7800
ERROR - 2023-09-04 12:42:00 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7800
ERROR - 2023-09-04 12:42:00 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7800
ERROR - 2023-09-04 13:02:48 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'item_name' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2569
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2628
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2720
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2772
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2793
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'item_name' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2569
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2628
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2720
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2772
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2793
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'item_name' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2569
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2628
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2720
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2772
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2793
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'item_name' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2569
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2628
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2720
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2772
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2793
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2615
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2615
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2618
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2618
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2635
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2615
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2615
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2618
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2618
ERROR - 2023-09-04 13:24:26 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2635
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2599
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:25:55 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2599
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2599
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:27:13 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2599
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2599
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:28:23 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2599
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2684
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2736
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2757
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2599
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2579
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2582
ERROR - 2023-09-04 13:39:32 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2599
ERROR - 2023-09-04 13:41:03 --> Query error: Unknown column 'a.sales_code' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,
	              					a.`sales_code` AS tr_code,

	              					'invoice' as tr_type,

	              					a.sales_qty as sales_quantity,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =1  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_qty  as retur_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_qty  as purchase_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =1  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 13:42:58 --> Severity: error --> Exception: syntax error, unexpected 'elseif' (T_ELSEIF) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2596
ERROR - 2023-09-04 13:43:22 --> Severity: Notice --> Undefined property: stdClass::$sales_qty /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2592
ERROR - 2023-09-04 13:45:59 --> Severity: Notice --> Undefined property: stdClass::$sales_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2605
ERROR - 2023-09-04 13:46:48 --> Query error: The used SELECT statements have a different number of columns - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,
	              					a.`sales_id` AS sales_id,

	              					'invoice' as tr_type,

	              					a.sales_qty as sales_quantity,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =2  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_qty  as retur_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =2  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_qty  as purchase_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =2  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 13:47:26 --> Query error: The used SELECT statements have a different number of columns - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,
	              					a.`sales_id` AS salesid,

	              					'invoice' as tr_type,

	              					a.sales_qty as sales_quantity,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =1  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_qty  as retur_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_qty  as purchase_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =1  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 13:48:45 --> Query error: The used SELECT statements have a different number of columns - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_qty as sales_quantity,
	              					a.sales_id as sales_id,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =1  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_qty  as retur_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_qty  as purchase_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =1  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 13:49:27 --> Query error: The used SELECT statements have a different number of columns - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_qty as sales_quantity,
	              					a.sales_id as sid,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =2  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_qty  as retur_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =2  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_qty  as purchase_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =2  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 13:49:37 --> Severity: Notice --> Undefined property: stdClass::$sales_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2607
ERROR - 2023-09-04 13:51:13 --> Severity: Notice --> Undefined property: stdClass::$sales_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2607
ERROR - 2023-09-04 13:53:27 --> Severity: Notice --> Undefined property: stdClass::$id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2546
ERROR - 2023-09-04 13:54:00 --> Query error: The used SELECT statements have a different number of columns - Invalid query:  SELECT 

	              					a.id as id,
											a.sales_id as sales_id,
	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_qty as sales_quantity,
	              					-- a.sales_id as sid,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =2  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_qty  as retur_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =2  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_qty  as purchase_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =2  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 13:58:54 --> Severity: Notice --> Undefined property: stdClass::$sales_quantity /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2594
ERROR - 2023-09-04 13:59:13 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-09-04 13:59:19 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-09-04 14:04:58 --> Could not find the language line "sales_return_list"
ERROR - 2023-09-04 14:06:37 --> Severity: Notice --> Undefined property: stdClass::$sales_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2594
ERROR - 2023-09-04 14:06:37 --> Severity: Notice --> Undefined property: stdClass::$sales_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2594
ERROR - 2023-09-04 14:06:37 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2594
ERROR - 2023-09-04 14:07:18 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-04 14:08:07 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 14:08:22 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 14:10:09 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 14:10:50 --> Severity: error --> Exception: syntax error, unexpected '".'>"' (T_CONSTANT_ENCAPSED_STRING), expecting ';' or ',' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2594
ERROR - 2023-09-04 14:11:32 --> Severity: error --> Exception: syntax error, unexpected ';' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2594
ERROR - 2023-09-04 14:14:58 --> Could not find the language line "purchase_return_list"
ERROR - 2023-09-04 14:15:59 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 14:15:59 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 14:17:36 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:36 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:36 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:36 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:36 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:36 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:36 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:36 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:48 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:17:48 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 8191
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2584
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2584
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Trying to get property 'reference_no' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Trying to get property 'sales_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2584
ERROR - 2023-09-04 14:21:32 --> Severity: Notice --> Trying to get property 'sales_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2584
ERROR - 2023-09-04 14:21:46 --> Could not find the language line "company_address"
ERROR - 2023-09-04 14:23:03 --> Could not find the language line "company_address"
ERROR - 2023-09-04 14:24:28 --> Query error: Unknown column 'c.purchase_code' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					-- a.sales_id as sid,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =1  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.purchase_code  as purchase_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_qty  as purchase_quantity,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =1  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 14:25:10 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-09-04 11:25:27 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-09-04 14:25:29 --> Query error: Unknown column 'd.purchase_code' in 'field list' - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					-- a.sales_id as sid,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =1  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_qty  as retur_quantity,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =1  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_code  as purchase_code,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =1  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 14:26:04 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:26:04 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:26:04 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:26:04 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:26:04 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:26:04 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2600
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:26:23 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2600
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:28:06 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:29:36 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2558
ERROR - 2023-09-04 14:29:40 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2558
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2600
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:30:12 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:30:56 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:30:56 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:30:56 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:30:56 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2549
ERROR - 2023-09-04 14:30:56 --> Severity: Notice --> Undefined property: stdClass::$purchase_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:30:56 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2581
ERROR - 2023-09-04 14:34:00 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2600
ERROR - 2023-09-04 14:34:00 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:34:17 --> Severity: Notice --> Undefined property: stdClass::$tr_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2600
ERROR - 2023-09-04 14:34:17 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:36:25 --> Severity: Notice --> Undefined property: stdClass::$purchase_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2596
ERROR - 2023-09-04 14:36:25 --> Severity: Notice --> Undefined property: stdClass::$purchase_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2596
ERROR - 2023-09-04 14:41:06 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2711
ERROR - 2023-09-04 14:41:06 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2744
ERROR - 2023-09-04 14:41:06 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2760
ERROR - 2023-09-04 14:41:06 --> Severity: Notice --> Trying to get property 'payment' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:41:06 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:41:43 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2711
ERROR - 2023-09-04 14:41:43 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2744
ERROR - 2023-09-04 14:41:43 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2760
ERROR - 2023-09-04 14:41:43 --> Severity: Notice --> Trying to get property 'payment' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:41:43 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:43:15 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2600
ERROR - 2023-09-04 14:43:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2560) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 14:43:41 --> Severity: Notice --> Undefined variable: total_columns_count /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7719
ERROR - 2023-09-04 14:45:20 --> Severity: Notice --> Undefined property: stdClass::$db_salesreturn /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 14:45:20 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2711
ERROR - 2023-09-04 14:45:20 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2744
ERROR - 2023-09-04 14:45:20 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2760
ERROR - 2023-09-04 14:45:20 --> Severity: Notice --> Trying to get property 'payment' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:45:20 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:48:25 --> Severity: Notice --> Trying to get property 'db_salesreturn' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 14:48:25 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2711
ERROR - 2023-09-04 14:48:25 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2744
ERROR - 2023-09-04 14:48:25 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2760
ERROR - 2023-09-04 14:48:25 --> Severity: Notice --> Trying to get property 'payment' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:48:25 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:48:40 --> Severity: Notice --> Trying to get property 'db_salesreturn' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 14:48:40 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2711
ERROR - 2023-09-04 14:48:40 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2744
ERROR - 2023-09-04 14:48:40 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2760
ERROR - 2023-09-04 14:48:40 --> Severity: Notice --> Trying to get property 'payment' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:48:40 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:49:32 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 14:49:32 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2711
ERROR - 2023-09-04 14:49:32 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2744
ERROR - 2023-09-04 14:49:32 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2760
ERROR - 2023-09-04 14:49:32 --> Severity: Notice --> Trying to get property 'payment' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:49:32 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2768
ERROR - 2023-09-04 14:50:52 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 14:51:16 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 14:51:16 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2712
ERROR - 2023-09-04 14:51:16 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2745
ERROR - 2023-09-04 14:51:16 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2761
ERROR - 2023-09-04 14:51:16 --> Severity: Notice --> Trying to get property 'payment' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 14:51:16 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 14:53:48 --> Severity: Notice --> Undefined property: stdClass::$return_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 14:53:48 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 14:53:48 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2712
ERROR - 2023-09-04 14:53:48 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2745
ERROR - 2023-09-04 14:53:48 --> Severity: Notice --> Trying to get property 'grand_total' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2761
ERROR - 2023-09-04 14:53:48 --> Severity: Notice --> Trying to get property 'payment' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 14:53:48 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 14:54:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					-- a.sales_id as sid,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_id  as return_id,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 14:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					-- a.sales_id as sid,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_id  as sales_id,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 14:55:57 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 14:55:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 14:56:39 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 14:56:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 14:57:18 --> Severity: error --> Exception: Cannot use object of type stdClass as array /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:57:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 14:57:39 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:57:39 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:57:39 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:57:39 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 14:57:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 14:58:08 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:58:08 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:58:08 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:58:08 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:58:08 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 14:58:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 14:58:28 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:58:28 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:58:28 --> Severity: Notice --> Undefined property: stdClass::$return_code /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 14:58:28 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 14:58:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 14:59:16 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 14:59:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:00:17 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:00:17 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:00:17 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:00:17 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:00:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:00:51 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:00:51 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:00:51 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:00:51 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:00:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:02:54 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:02:54 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:02:54 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:02:54 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:02:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:03:26 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:03:26 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:03:26 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:03:26 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 15:03:26 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:03:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:04:45 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:04:45 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:04:45 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:04:45 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:04:45 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:04:45 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:04:45 --> Severity: Notice --> Trying to get property 'return_code' of non-object /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:04:45 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:04:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:05:11 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:05:11 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:05:11 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:05:11 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:05:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2556) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:06:59 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:06:59 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:06:59 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:06:59 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:06:59 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:06:59 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:06:59 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:06:59 --> Severity: Notice --> Undefined variable: details2 /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2556
ERROR - 2023-09-04 15:10:56 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 15:10:56 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 15:13:23 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 15:13:28 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 15:13:28 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 15:13:28 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 15:13:35 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 15:13:35 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 15:13:35 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 15:14:11 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 15:14:11 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 15:27:33 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 15:27:33 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 967
ERROR - 2023-09-04 15:39:56 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:39:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2561) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:40:59 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:40:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2561) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:42:48 --> Severity: Notice --> Undefined property: stdClass::$return_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2553
ERROR - 2023-09-04 15:42:48 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:42:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2561) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:43:10 --> Severity: Notice --> Undefined property: stdClass::$return_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2553
ERROR - 2023-09-04 15:43:10 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:43:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2561) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:44:10 --> Severity: error --> Exception: syntax error, unexpected end of file /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1517
ERROR - 2023-09-04 15:44:18 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 15:45:36 --> Severity: Notice --> Undefined property: stdClass::$return_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 15:45:36 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 15:46:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION ...' at line 19 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,


	              					'invoice' as tr_type,

	              					a.sales_id as sales_id,
	              					-- a.sales_id as sid,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_salesitems a WHERE 

						a.item_id =  and

									(sales_date>='2023-09-04' and sales_date<='2023-09-04')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_id  as return_id,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesitemsreturn` c WHERE 

						c.item_id =  and

									(c.return_date>='2023-09-04' and c.return_date<='2023-09-04')  UNION  SELECT 

									d.id as id, 

									d.`purchase_date` AS tr_date,

									'purchase' as tr_type,

									d.purchase_id  as sales_id,

									d.`created_time_auto` AS created_time

								FROM 

									`db_purchaseitems` d WHERE 

						d.item_id =  and

									(d.purchase_date>='2023-09-04' and d.purchase_date<='2023-09-04')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-09-04 15:46:09 --> Severity: Notice --> Undefined property: stdClass::$return_id /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2552
ERROR - 2023-09-04 15:46:09 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 15:48:47 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 15:49:33 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 15:51:09 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:51:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2537) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:51:50 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:51:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:2561) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-09-04 15:53:18 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 15:54:40 --> Severity: error --> Exception: syntax error, unexpected '$details2' (T_VARIABLE), expecting ')' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:54:42 --> Severity: error --> Exception: syntax error, unexpected '$details2' (T_VARIABLE), expecting ')' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:54:44 --> Severity: error --> Exception: syntax error, unexpected '$details2' (T_VARIABLE), expecting ')' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:55:00 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:55:23 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:55:51 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2601
ERROR - 2023-09-04 15:56:36 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 12:56:55 --> 404 Page Not Found: Return/invoice
ERROR - 2023-09-04 15:57:36 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 15:58:20 --> Severity: Notice --> Undefined property: stdClass::$payment /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 2769
ERROR - 2023-09-04 21:18:35 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 21:23:18 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 21:23:18 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 21:26:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 21:26:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 172
ERROR - 2023-09-04 21:26:44 --> Severity: Notice --> Undefined variable: payment_type /home/mwclients/public_html/ruyahvip/application/controllers/Account_transactions.php 170
