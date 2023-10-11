<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-09 11:04:42 --> Query error: Unknown column 'a.ref_moneytransfer_id' in 'where clause' - Invalid query: SELECT *
FROM `ac_moneytransfer` as `a`
WHERE `a`.`store_id` = '2'
AND   (
`a`.`id` LIKE '%00%' ESCAPE '!'
OR  `a`.`transfer_code` LIKE '%00%' ESCAPE '!'
OR  `a`.`transfer_date` LIKE '%00%' ESCAPE '!'
OR  `a`.`reference_no` LIKE '%00%' ESCAPE '!'
OR  `a`.`debit_account_id` LIKE '%00%' ESCAPE '!'
OR  `a`.`credit_account_id` LIKE '%00%' ESCAPE '!'
OR  `a`.`amount` LIKE '%00%' ESCAPE '!'
OR  `a`.`created_by` LIKE '%00%' ESCAPE '!'
OR  `a`.`ref_moneytransfer_id` LIKE '%00%' ESCAPE '!'
OR  `a`.`ref_moneydeposits_id` LIKE '%00%' ESCAPE '!'
 )
ORDER BY `a`.`id` DESC
 LIMIT 10
ERROR - 2023-10-09 11:04:46 --> Query error: Unknown column 'a.ref_moneytransfer_id' in 'where clause' - Invalid query: SELECT *
FROM `ac_moneytransfer` as `a`
WHERE `a`.`store_id` = '2'
AND   (
`a`.`id` LIKE '%000%' ESCAPE '!'
OR  `a`.`transfer_code` LIKE '%000%' ESCAPE '!'
OR  `a`.`transfer_date` LIKE '%000%' ESCAPE '!'
OR  `a`.`reference_no` LIKE '%000%' ESCAPE '!'
OR  `a`.`debit_account_id` LIKE '%000%' ESCAPE '!'
OR  `a`.`credit_account_id` LIKE '%000%' ESCAPE '!'
OR  `a`.`amount` LIKE '%000%' ESCAPE '!'
OR  `a`.`created_by` LIKE '%000%' ESCAPE '!'
OR  `a`.`ref_moneytransfer_id` LIKE '%000%' ESCAPE '!'
OR  `a`.`ref_moneydeposits_id` LIKE '%000%' ESCAPE '!'
 )
ORDER BY `a`.`id` DESC
 LIMIT 10
ERROR - 2023-10-09 11:04:51 --> Query error: Unknown column 'a.ref_moneytransfer_id' in 'where clause' - Invalid query: SELECT *
FROM `ac_moneytransfer` as `a`
WHERE `a`.`store_id` = '2'
AND   (
`a`.`id` LIKE '%0000%' ESCAPE '!'
OR  `a`.`transfer_code` LIKE '%0000%' ESCAPE '!'
OR  `a`.`transfer_date` LIKE '%0000%' ESCAPE '!'
OR  `a`.`reference_no` LIKE '%0000%' ESCAPE '!'
OR  `a`.`debit_account_id` LIKE '%0000%' ESCAPE '!'
OR  `a`.`credit_account_id` LIKE '%0000%' ESCAPE '!'
OR  `a`.`amount` LIKE '%0000%' ESCAPE '!'
OR  `a`.`created_by` LIKE '%0000%' ESCAPE '!'
OR  `a`.`ref_moneytransfer_id` LIKE '%0000%' ESCAPE '!'
OR  `a`.`ref_moneydeposits_id` LIKE '%0000%' ESCAPE '!'
 )
ORDER BY `a`.`id` DESC
 LIMIT 10
ERROR - 2023-10-09 14:57:51 --> Severity: Notice --> Trying to get property 'max_users' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2408
ERROR - 2023-10-09 14:57:51 --> Severity: Notice --> Trying to get property 'subscription_date' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2240
ERROR - 2023-10-09 14:57:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `store_id` = '3'' at line 4 - Invalid query: SELECT count(*) as count_id
FROM `db_users`
WHERE `store_id` = '3'
AND `created_date` > `IS` `NULL`
AND `store_id` = '3'
ERROR - 2023-10-09 14:57:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-10-09 14:58:18 --> Could not find the language line "import_package"
ERROR - 2023-10-09 14:59:18 --> Severity: Notice --> Trying to get property 'max_users' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2408
ERROR - 2023-10-09 14:59:18 --> Severity: Notice --> Trying to get property 'subscription_date' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2240
ERROR - 2023-10-09 14:59:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `store_id` = '3'' at line 4 - Invalid query: SELECT count(*) as count_id
FROM `db_users`
WHERE `store_id` = '3'
AND `created_date` > `IS` `NULL`
AND `store_id` = '3'
ERROR - 2023-10-09 14:59:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-10-09 14:59:46 --> Severity: Notice --> Trying to get property 'max_users' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2408
ERROR - 2023-10-09 14:59:46 --> Severity: Notice --> Trying to get property 'subscription_date' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2240
ERROR - 2023-10-09 14:59:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `store_id` = '3'' at line 4 - Invalid query: SELECT count(*) as count_id
FROM `db_users`
WHERE `store_id` = '3'
AND `created_date` > `IS` `NULL`
AND `store_id` = '3'
ERROR - 2023-10-09 14:59:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-10-09 15:00:27 --> Severity: Notice --> Trying to get property 'max_users' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2408
ERROR - 2023-10-09 15:00:27 --> Severity: Notice --> Trying to get property 'subscription_date' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2240
ERROR - 2023-10-09 15:00:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `store_id` = '3'' at line 4 - Invalid query: SELECT count(*) as count_id
FROM `db_users`
WHERE `store_id` = '3'
AND `created_date` > `IS` `NULL`
AND `store_id` = '3'
ERROR - 2023-10-09 15:00:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-10-09 15:05:42 --> Severity: Notice --> Trying to get property 'state' of non-object /home/mwclients/public_html/ruyahupdates/application/models/Store_model.php 240
ERROR - 2023-10-09 15:09:36 --> Severity: Notice --> Trying to get property 'max_users' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2408
ERROR - 2023-10-09 15:09:36 --> Severity: Notice --> Trying to get property 'subscription_date' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/custom_helper.php 2240
ERROR - 2023-10-09 15:09:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `store_id` = '4'' at line 4 - Invalid query: SELECT count(*) as count_id
FROM `db_users`
WHERE `store_id` = '4'
AND `created_date` > `IS` `NULL`
AND `store_id` = '4'
ERROR - 2023-10-09 15:09:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/mwclients/public_html/ruyahupdates/system/core/Exceptions.php:271) /home/mwclients/public_html/ruyahupdates/system/core/Common.php 570
ERROR - 2023-10-09 12:43:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-09') UNI...' at line 10 - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id =  AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-09') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id =  AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-09') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id =  AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-09') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-09 14:24:23 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 14:24:23 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 14:24:40 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 14:30:11 --> Severity: Notice --> Undefined index: payment_type /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 57
ERROR - 2023-10-09 14:30:58 --> Severity: Notice --> Undefined index: payment_type /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 57
ERROR - 2023-10-09 17:06:24 --> Severity: Notice --> Undefined property: stdClass::$category_name /home/mwclients/public_html/ruyahupdates/application/views/expense_print.php 206
ERROR - 2023-10-09 17:06:55 --> Severity: Notice --> Undefined property: stdClass::$category_name /home/mwclients/public_html/ruyahupdates/application/views/expense_print.php 206
ERROR - 2023-10-09 17:07:05 --> Severity: Notice --> Undefined property: stdClass::$category_name /home/mwclients/public_html/ruyahupdates/application/views/expense_print.php 206
ERROR - 2023-10-09 19:34:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-09') UNI...' at line 10 - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id =  AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-09') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id =  AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-09') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id =  AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-09') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-09 17:08:44 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-09 17:11:36 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-09 20:14:37 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 20:14:54 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 20:15:39 --> Severity: Notice --> Undefined index: payment_type /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 57
ERROR - 2023-10-09 20:22:24 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:24:27 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:27:37 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:28:05 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:28:21 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:28:27 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:28:27 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:28:27 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:30:15 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:30:24 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:30:25 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:30:25 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:31:44 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`mwclients_ruyahupdates`.`ac_moneytransfer`, CONSTRAINT `ac_moneytransfer_ibfk_2` FOREIGN KEY (`credit_account_id`) REFERENCES `ac_accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `ac_moneytransfer` (`count_id`, `store_id`, `transfer_code`, `transfer_date`, `debit_account_id`, `credit_account_id`, `amount`, `payment_type`, `note`, `reference_no`, `created_date`, `created_time`, `created_by`, `system_ip`, `system_name`, `status`) VALUES ('1', '2', '00001', '2023-10-09', '3', '1', '100', 'مدي / تحويلة بنك', 'pay to supplier', '', '2023-10-09', '08:31:44 pm', 'admin', '31.166.14.116', '31.166.14.116', 1)
ERROR - 2023-10-09 20:33:16 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`mwclients_ruyahupdates`.`ac_moneytransfer`, CONSTRAINT `ac_moneytransfer_ibfk_2` FOREIGN KEY (`credit_account_id`) REFERENCES `ac_accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `ac_moneytransfer` (`count_id`, `store_id`, `transfer_code`, `transfer_date`, `debit_account_id`, `credit_account_id`, `amount`, `payment_type`, `note`, `reference_no`, `created_date`, `created_time`, `created_by`, `system_ip`, `system_name`, `status`) VALUES ('1', '2', '00001', '2023-10-09', '3', '1', '150', 'مدي / تحويلة بنك', 'pay', '', '2023-10-09', '08:33:16 pm', 'admin', '31.166.14.116', '31.166.14.116', 1)
ERROR - 2023-10-09 20:42:55 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:44:03 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:44:03 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:44:03 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:45:27 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:47:37 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`mwclients_ruyahupdates`.`ac_moneytransfer`, CONSTRAINT `ac_moneytransfer_ibfk_2` FOREIGN KEY (`credit_account_id`) REFERENCES `ac_accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `ac_moneytransfer` (`count_id`, `store_id`, `transfer_code`, `transfer_date`, `debit_account_id`, `credit_account_id`, `amount`, `payment_type`, `note`, `reference_no`, `created_date`, `created_time`, `created_by`, `system_ip`, `system_name`, `status`) VALUES ('1', '2', '00001', '2023-10-09', '2', '1', '150', 'نقدي', 'paid', '', '2023-10-09', '08:47:37 pm', 'admin', '31.166.14.116', '31.166.14.116', 1)
ERROR - 2023-10-09 20:49:10 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:49:59 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:51:11 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`mwclients_ruyahupdates`.`ac_moneytransfer`, CONSTRAINT `ac_moneytransfer_ibfk_2` FOREIGN KEY (`credit_account_id`) REFERENCES `ac_accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `ac_moneytransfer` (`count_id`, `store_id`, `transfer_code`, `transfer_date`, `debit_account_id`, `credit_account_id`, `amount`, `payment_type`, `note`, `reference_no`, `created_date`, `created_time`, `created_by`, `system_ip`, `system_name`, `status`) VALUES ('1', '2', '00001', '2023-10-09', '2', '1', '200', 'نقدي', 'pay', '', '2023-10-09', '08:51:11 pm', 'admin', '31.166.14.116', '31.166.14.116', 1)
ERROR - 2023-10-09 20:51:43 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:54:22 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 20:54:22 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 20:55:32 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 20:55:32 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 20:55:57 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:56:11 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:56:52 --> Severity: Notice --> Trying to get property 'balance' of non-object /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 220
ERROR - 2023-10-09 20:57:15 --> Severity: Notice --> Trying to get property 'customer_name' of non-object /home/mwclients/public_html/ruyahupdates/application/controllers/Account_transactions.php 181
ERROR - 2023-10-09 20:57:45 --> Severity: Notice --> Undefined index: payment_type /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 57
ERROR - 2023-10-09 20:59:10 --> Severity: Notice --> Undefined index: payment_type /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 57
ERROR - 2023-10-09 21:00:29 --> Severity: Notice --> Undefined index: payment_type /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 57
ERROR - 2023-10-09 21:07:20 --> Severity: Notice --> Undefined index: payment_type /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 57
ERROR - 2023-10-09 21:08:04 --> Severity: Notice --> Undefined index: payment_type /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 57
ERROR - 2023-10-09 18:18:41 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-09 21:18:51 --> Severity: Notice --> Undefined index: payment_type /home/mwclients/public_html/ruyahupdates/application/helpers/accounts_helper.php 57
ERROR - 2023-10-09 21:36:10 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:41:11 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:47:52 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:47:53 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:47:54 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:47:55 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:48:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:48:05 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:48:06 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:48:07 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 7330
ERROR - 2023-10-09 21:53:29 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 872
ERROR - 2023-10-09 21:54:40 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 872
ERROR - 2023-10-09 21:55:44 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 872
ERROR - 2023-10-09 22:01:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 872
ERROR - 2023-10-09 22:01:18 --> Severity: Notice --> Undefined property: stdClass::$paid_amount /home/mwclients/public_html/ruyahupdates/application/models/Reports_model.php 872
