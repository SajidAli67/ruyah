<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-28 09:01:50 --> Could not find the language line "purchase_return_list"
ERROR - 2023-08-28 09:17:52 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:17:52 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:18:01 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:18:01 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:22:34 --> Severity: error --> Exception: syntax error, unexpected 'store_number_format' (T_STRING) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 966
ERROR - 2023-08-28 09:23:19 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:23:19 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:23:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:23:58 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:23:58 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:23:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:24:22 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:24:22 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:24:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:24:31 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-02' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:24:31 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:24:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:32:55 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:32:55 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:32:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:33:16 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:33:16 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:33:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:34:45 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:34:45 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:34:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:35:11 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:35:11 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:35:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:35:14 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-02' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:35:14 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:35:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:37:42 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:37:42 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:37:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:655) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:38:17 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:38:17 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:38:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:655) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:38:20 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:38:20 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:38:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:655) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:39:02 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:39:02 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:39:26 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:39:26 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:40:07 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:40:07 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 06:41:54 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-28 09:41:57 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:41:57 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:42:32 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:42:32 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:43:24 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-04' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:43:24 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:43:53 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:43:53 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:44:03 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE `a`.`warehouse_id` = '2'
AND `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:44:03 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:44:16 --> Could not find the language line "purchase_return_list"
ERROR - 2023-08-28 09:44:27 --> Could not find the language line "purchase_return_list"
ERROR - 2023-08-28 09:44:58 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:44:58 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:45:37 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:45:37 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:45:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:656) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 09:46:22 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:46:22 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:47:07 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:47:07 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:50:09 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:50:09 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:50:41 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:50:41 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:51:04 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2023-08-21' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:51:04 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:51:47 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 09:51:47 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 09:54:07 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-07-31')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:54:07 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 884
ERROR - 2023-08-28 09:54:29 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:54:29 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 884
ERROR - 2023-08-28 09:55:06 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:55:06 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 884
ERROR - 2023-08-28 09:55:13 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-07-31')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:55:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 884
ERROR - 2023-08-28 09:55:49 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-04' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-03')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:55:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 884
ERROR - 2023-08-28 09:56:12 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:56:12 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 884
ERROR - 2023-08-28 09:56:49 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:56:49 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 884
ERROR - 2023-08-28 09:57:23 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:58:02 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:58:04 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:58:05 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:58:20 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2023-08-22' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-21')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:58:24 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2023-08-22' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-21')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:58:34 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:59:13 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:59:13 --> Severity: Warning --> Use of undefined constant console - assumed 'console' (this will throw an Error in a future version of PHP) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 883
ERROR - 2023-08-28 09:59:16 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:59:16 --> Severity: Warning --> Use of undefined constant console - assumed 'console' (this will throw an Error in a future version of PHP) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 883
ERROR - 2023-08-28 09:59:26 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:59:26 --> Severity: Warning --> Use of undefined constant console - assumed 'console' (this will throw an Error in a future version of PHP) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 883
ERROR - 2023-08-28 09:59:27 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:59:27 --> Severity: Warning --> Use of undefined constant console - assumed 'console' (this will throw an Error in a future version of PHP) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 883
ERROR - 2023-08-28 09:59:51 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 09:59:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 884
ERROR - 2023-08-28 10:01:20 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/DB_driver.php 1048
ERROR - 2023-08-28 10:01:20 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 322
ERROR - 2023-08-28 10:01:20 --> Severity: Warning --> mysqli::query() expects parameter 1 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-08-28 10:01:20 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 10:01:20 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 10:01:48 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/DB_driver.php 1048
ERROR - 2023-08-28 10:01:48 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 322
ERROR - 2023-08-28 10:01:48 --> Severity: Warning --> mysqli::query() expects parameter 1 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-08-28 10:02:09 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/DB_driver.php 1048
ERROR - 2023-08-28 10:02:09 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 322
ERROR - 2023-08-28 10:02:09 --> Severity: Warning --> mysqli::query() expects parameter 1 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-08-28 10:02:27 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/DB_driver.php 1048
ERROR - 2023-08-28 10:02:27 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 322
ERROR - 2023-08-28 10:02:27 --> Severity: Warning --> mysqli::query() expects parameter 1 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-08-28 10:06:13 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:06:16 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-07-31')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:08:16 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 10:08:16 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 10:08:54 --> Could not find the language line "company_address"
ERROR - 2023-08-28 10:10:17 --> Severity: error --> Exception: syntax error, unexpected '$from_date' (T_VARIABLE) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 598
ERROR - 2023-08-28 10:10:18 --> Severity: error --> Exception: syntax error, unexpected '$from_date' (T_VARIABLE) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 598
ERROR - 2023-08-28 10:10:20 --> Severity: error --> Exception: syntax error, unexpected '$from_date' (T_VARIABLE) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 598
ERROR - 2023-08-28 10:12:01 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 10:12:01 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 10:12:31 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 10:12:31 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 10:13:18 --> Query error: Column 'store_id' in where clause is ambiguous - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 10:13:18 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 10:21:57 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-07-31')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:22:23 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-07-31')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:25:28 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:26:35 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/DB_driver.php 1048
ERROR - 2023-08-28 10:26:35 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 322
ERROR - 2023-08-28 10:26:35 --> Severity: Warning --> mysqli::query() expects parameter 1 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-08-28 10:26:57 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/DB_driver.php 1048
ERROR - 2023-08-28 10:26:57 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 322
ERROR - 2023-08-28 10:26:57 --> Severity: Warning --> mysqli::query() expects parameter 1 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-08-28 10:26:57 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-07-31')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 10:26:57 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 10:27:34 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/DB_driver.php 1048
ERROR - 2023-08-28 10:27:34 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 322
ERROR - 2023-08-28 10:27:34 --> Severity: Warning --> mysqli::query() expects parameter 1 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-08-28 10:27:39 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/DB_driver.php 1048
ERROR - 2023-08-28 10:27:39 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 322
ERROR - 2023-08-28 10:27:39 --> Severity: Warning --> mysqli::query() expects parameter 1 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-08-28 10:30:37 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/DB_driver.php 1048
ERROR - 2023-08-28 10:30:37 --> Severity: Warning --> preg_match() expects parameter 2 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 322
ERROR - 2023-08-28 10:30:37 --> Severity: Warning --> mysqli::query() expects parameter 1 to be string, object given /home/mwclients/public_html/ruyahvip/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-08-28 10:30:37 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, count(*) as warehouse_count
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`, `db_warehouse`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `store_id` = '2'
AND `status` = 1
ERROR - 2023-08-28 10:30:37 --> Severity: error --> Exception: Call to a member function row() on bool /home/mwclients/public_html/ruyahvip/application/helpers/custom_helper.php 853
ERROR - 2023-08-28 10:31:25 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-08-27')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:31:28 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-07-31')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:31:34 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-07-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-06-30')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:31:38 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-07-01' and `a`.`purchase_date` <= '2023-08-01')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '2000-08-01' and `a`.`purchase_date` <= '2023-06-30')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:33:21 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-28' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '28-08-2023' and `a`.`purchase_date` <= '28-08-2023')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:33:24 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '01-08-2023' and `a`.`purchase_date` <= '28-08-2023')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:33:27 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE `a`.`warehouse_id` = '2'
AND (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `a`.`warehouse_id` = '2'
AND (`a`.`purchase_date` >= '01-08-2023' and `a`.`purchase_date` <= '28-08-2023')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:33:30 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE `a`.`warehouse_id` = '2'
AND `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '2023-08-01' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND `a`.`warehouse_id` = '2'
AND `a`.`supplier_id` = 1
AND (`a`.`purchase_date` >= '01-08-2023' and `a`.`purchase_date` <= '28-08-2023')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:39:54 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-23' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '23-08-2023' and `a`.`purchase_date` <= '28-08-2023')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:39:58 --> Query error: Not unique table/alias: 'a' - Invalid query: SELECT `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`, `a`.`id`, `a`.`warehouse_id`, `a`.`purchase_code`, `a`.`purchase_date`, `b`.`supplier_name`, `b`.`supplier_code`, `a`.`grand_total`, `a`.`paid_amount`, `a`.`store_id`
FROM `db_purchase` as `a`, `db_suppliers` as `b`, `db_purchase` as `a`, `db_suppliers` as `b`
WHERE (`a`.`purchase_date` >= '2023-08-22' and `a`.`purchase_date` <= '2023-08-28')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
AND (`a`.`purchase_date` >= '22-08-2023' and `a`.`purchase_date` <= '28-08-2023')
AND `b`.`id` = `a`.`supplier_id`
AND `a`.`purchase_status` = 'Received'
AND `a`.`store_id` = '2'
ERROR - 2023-08-28 10:48:14 --> Severity: error --> Exception: Too few arguments to function Reports_model::show_purchase_report123(), 1 passed in /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php on line 660 and exactly 2 expected /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 802
ERROR - 2023-08-28 10:48:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:658) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 10:48:18 --> Severity: error --> Exception: Too few arguments to function Reports_model::show_purchase_report123(), 1 passed in /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php on line 660 and exactly 2 expected /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 802
ERROR - 2023-08-28 10:48:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:658) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 10:55:24 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 5390
ERROR - 2023-08-28 10:57:29 --> Severity: error --> Exception: Call to a member function result() on null /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 874
ERROR - 2023-08-28 10:57:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:658) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 10:57:33 --> Severity: error --> Exception: Call to a member function result() on null /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 874
ERROR - 2023-08-28 10:57:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:658) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 11:07:05 --> Severity: error --> Exception: /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php exists, but doesn't declare class Reports_model /home/mwclients/public_html/ruyahvip/system/core/Loader.php 340
ERROR - 2023-08-28 11:07:54 --> Severity: error --> Exception: Call to a member function num_rows() on null /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 864
ERROR - 2023-08-28 11:07:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:658) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 11:32:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-08-21')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-21')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-21')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-21')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-28 11:32:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7223
ERROR - 2023-08-28 11:32:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:1907) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 11:32:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-28 11:32:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7223
ERROR - 2023-08-28 11:32:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:1907) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 11:32:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-28 11:32:55 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7223
ERROR - 2023-08-28 11:32:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:1907) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 11:53:45 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting variable (T_VARIABLE) or '{' or '$' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 735
ERROR - 2023-08-28 11:53:56 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting variable (T_VARIABLE) or '{' or '$' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 735
ERROR - 2023-08-28 11:54:41 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting variable (T_VARIABLE) or '{' or '$' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 735
ERROR - 2023-08-28 11:54:50 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting variable (T_VARIABLE) or '{' or '$' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 735
ERROR - 2023-08-28 11:55:01 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting variable (T_VARIABLE) or '{' or '$' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 735
ERROR - 2023-08-28 11:55:03 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO), expecting variable (T_VARIABLE) or '{' or '$' /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 735
ERROR - 2023-08-28 11:57:32 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 734
ERROR - 2023-08-28 09:42:45 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-28 13:22:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-28 13:22:02 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7225
ERROR - 2023-08-28 13:22:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:1909) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 10:22:29 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-28 13:23:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-08-27')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-27')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-27')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-27')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-28 13:23:13 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7225
ERROR - 2023-08-28 13:23:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:1909) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 13:23:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-28 13:23:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7225
ERROR - 2023-08-28 13:23:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:1909) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 13:24:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(sales_date>='2000-08-01' and sales_date<='2023-08-27')  UNION ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`sales_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.sales_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_sales a WHERE 

						a.customer_id =  and

									(sales_date>='2000-08-01' and sales_date<='2023-08-27')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_salespayments` b WHERE 

						b.customer_id =  and

									(b.payment_date>='2000-08-01' and b.payment_date<='2023-08-27')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_salesreturn` c WHERE 

						c.customer_id =  and

									(c.return_date>='2000-08-01' and c.return_date<='2023-08-27')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-28 13:24:25 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7225
ERROR - 2023-08-28 13:24:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:1909) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 13:24:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-28 13:24:27 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 7225
ERROR - 2023-08-28 13:24:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:1909) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 13:37:22 --> Severity: error --> Exception: Call to undefined function get_purchase_details() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 721
ERROR - 2023-08-28 13:40:04 --> Severity: error --> Exception: Call to undefined function get_purchase_details() /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 721
ERROR - 2023-08-28 14:33:54 --> Could not find the language line "Date"
ERROR - 2023-08-28 14:34:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-28' and purchase_date<='2023-08-28')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-28' and purchase_date<='2023-08-28')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-28' and b.payment_date<='2023-08-28')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-28' and c.return_date<='2023-08-28')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-28 14:34:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-28 14:34:20 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1244
ERROR - 2023-08-28 14:34:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 14:51:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

									(purchase_date>='2023-08-28' and purchase_date<='2023-08-28')  ...' at line 17 - Invalid query:  SELECT 

	              					a.id as id,

	              					a.`purchase_date` AS tr_date,

	              					'invoice' as tr_type,

	              					a.purchase_code as tr_code,

	              					a.`created_time_auto` AS created_time

              					FROM 

              						db_purchase a WHERE 

						a.supplier_id =  and

									(purchase_date>='2023-08-28' and purchase_date<='2023-08-28')  UNION  SELECT 

									b.id as id, 

									b.`payment_date` AS tr_date,

									'payments' as tr_type,

									b.payment_code as tr_code,

									b.`created_time_auto` AS created_time

								FROM 

									`db_purchasepayments` b WHERE 

						b.supplier_id =  and

									(b.payment_date>='2023-08-28' and b.payment_date<='2023-08-28')  UNION  SELECT 

									c.id as id, 

									c.`return_date` AS tr_date,

									'return' as tr_type,

									c.return_code  as tr_code,

									c.`created_time_auto` AS created_time

								FROM 

									`db_purchasereturn` c WHERE 

						c.supplier_id =  and

									(c.return_date>='2023-08-28' and c.return_date<='2023-08-28')  ORDER BY `tr_date`,`created_time` 
ERROR - 2023-08-28 14:51:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and

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
ERROR - 2023-08-28 14:51:46 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php 1244
ERROR - 2023-08-28 14:51:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahvip/application/models/Reports_model.php:721) /home/mwclients/public_html/ruyahvip/system/core/Common.php 570
ERROR - 2023-08-28 12:33:02 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-28 15:35:07 --> Could not find the language line "sales_return_list"
ERROR - 2023-08-28 15:35:55 --> Could not find the language line "purchase_return_list"
ERROR - 2023-08-28 13:48:43 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-28 13:52:57 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-08-28 13:54:21 --> 404 Page Not Found: Theme/plugins
