<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-12 07:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNI...' at line 10 - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id =  AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id =  AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id =  AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-12') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 07:40:00 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 872
ERROR - 2023-10-12 06:40:57 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-12 07:41:01 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 872
ERROR - 2023-10-12 07:50:06 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id = 1 AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id = 1 AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id = 1 AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-12') UNION SELECT
            d.id as id,
            d.`transfer_date` AS tr_date,
            'suppler_transfer' as tr_type,
            d.transfer_code as tr_code,
            d.`created_time` AS created_time
         FROM
            `ac_moneytransfersuppler` d ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 07:51:26 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 883
ERROR - 2023-10-12 07:54:58 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 7385
ERROR - 2023-10-12 06:55:04 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-12 07:55:10 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 7385
ERROR - 2023-10-12 07:59:14 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 892
ERROR - 2023-10-12 08:00:52 --> Query error: Unknown column 'c.credit_account_id' in 'where clause' - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id = 1 AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id = 1 AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id = 1 AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-12') UNION SELECT
            d.id as id,
            d.`transfer_date` AS tr_date,
            'return' as tr_type,
            d.transfer_code as tr_code,
            d.`created_time` AS created_time
         FROM
            `ac_moneytransfersuppler` d
         WHERE
            c.credit_account_id = 1 AND (d.transfer_date >= '2023-10-09' AND d.transfer_date <= '2023-10-12') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 08:01:04 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id = 1 AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id = 1 AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id = 1 AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-12') UNION SELECT
            d.id as id,
            d.`transfer_date` AS tr_date,
            'return' as tr_type,
            d.transfer_code as tr_code,
            d.`created_time` AS created_time
         FROM
            `ac_moneytransfersuppler` d
         WHERE
            d.credit_account_id = 1 AND (d.transfer_date >= '2023-10-09' AND d.transfer_date <= '2023-10-12') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 08:04:34 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id = 1 AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id = 1 AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id = 1 AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-12') UNION SELECT
            d.id as id,
            d.`transfer_date` AS tr_date,
            'return' as tr_type,
            d.transfer_code as tr_code,
            d.`created_time` AS created_time
         FROM
            `ac_moneytransfersuppler` d
         WHERE
            d.credit_account_id = 1 AND (d.transfer_date >= '2023-10-09' AND d.transfer_date <= '2023-10-12') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 08:12:02 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id = 1 AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id = 1 AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id = 1 AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-12') UNION SELECT
            d.id as id,
            d.`transfer_date` AS tr_date,
            'return' as tr_type,
            d.transfer_code as tr_code,
            d.`created_time` AS created_time
         FROM
            `ac_moneytransfersuppler` d
         WHERE
            d.credit_account_id = 1 AND (d.transfer_date >= '2023-10-09' AND d.transfer_date <= '2023-10-12') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 08:16:29 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 07:29:37 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-12 08:29:47 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id = 1 AND (a.purchase_date >= '2023-10-10' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id = 1 AND (b.payment_date >= '2023-10-10' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id = 1 AND (c.return_date >= '2023-10-10' AND c.return_date <= '2023-10-12') UNION SELECT
            d.id as id,
            '2023-10-09' AS tr_date,
            'return' as tr_type,
            d.transfer_code as tr_code,
            d.`created_time` AS created_time
         FROM
            `ac_moneytransfersuppler` d
         WHERE
            d.credit_account_id = 1 AND (d.transfer_date >= '2023-10-10' AND d.transfer_date <= '2023-10-12') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 08:30:18 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:30:18 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:30:18 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 810
ERROR - 2023-10-12 08:30:18 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 832
ERROR - 2023-10-12 08:30:18 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 834
ERROR - 2023-10-12 08:30:18 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 863
ERROR - 2023-10-12 08:30:18 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 864
ERROR - 2023-10-12 08:30:18 --> Severity: Notice --> Undefined variable: res3 C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 882
ERROR - 2023-10-12 08:30:18 --> Severity: error --> Exception: Call to a member function row() on null C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 882
ERROR - 2023-10-12 08:30:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\ruyah\ruyah\system\core\Exceptions.php:271) C:\xampp\htdocs\ruyah\ruyah\system\core\Common.php 570
ERROR - 2023-10-12 07:31:05 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 810
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 832
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 834
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 863
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 864
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 884
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'payment' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 810
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 832
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 834
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 863
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 864
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 884
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'payment' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 810
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 832
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 834
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 863
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 864
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 884
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'payment' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:15 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:56 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 810
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 832
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 834
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 863
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 864
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 884
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'payment' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 810
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 832
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 834
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 863
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 864
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 884
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'payment' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 810
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 832
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 834
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 863
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 864
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'grand_total' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 884
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'payment' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:31:57 --> Severity: Notice --> Trying to get property 'paid_amount' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:32:25 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id = 1 AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id = 1 AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id = 1 AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-12') UNION SELECT
            d.id as id,
            d.`transfer_date` AS tr_date,
            'transfer_suppler' as tr_type,
            d.transfer_code as tr_code,
            d.`created_time` AS created_time
         FROM
            `ac_moneytransfersuppler` d
         WHERE
            d.credit_account_id = 1 AND (d.transfer_date >= '2023-10-09' AND d.transfer_date <= '2023-10-12') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 08:32:37 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id = 1 AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id = 1 AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id = 1 AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-12') UNION SELECT
            d.id as id,
            d.`transfer_date` AS tr_date,
            'transfer_suppler' as tr_type,
            d.transfer_code as tr_code,
            d.`created_time` AS created_time
         FROM
            `ac_moneytransfersuppler` d
         WHERE
            d.credit_account_id = 1 AND (d.transfer_date >= '2023-10-09' AND d.transfer_date <= '2023-10-12') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 07:32:40 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-12 07:32:46 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-12 08:34:26 --> Query error: Illegal mix of collations for operation 'UNION' - Invalid query: SELECT
            a.id as id,
            a.`purchase_date` AS tr_date,
            'invoice' as tr_type,
            a.purchase_code as tr_code,
            a.`created_time_auto` AS created_time
         FROM
            db_purchase a
         WHERE
            a.supplier_id = 1 AND (a.purchase_date >= '2023-10-09' AND a.purchase_date <= '2023-10-12') UNION SELECT
            b.id as id,
            b.`payment_date` AS tr_date,
            'payments' as tr_type,
            b.payment_code as tr_code,
            b.`created_time_auto` AS created_time
         FROM
            `db_purchasepayments` b
         WHERE
            b.supplier_id = 1 AND (b.payment_date >= '2023-10-09' AND b.payment_date <= '2023-10-12') UNION SELECT
            c.id as id,
            c.`return_date` AS tr_date,
            'return' as tr_type,
            c.return_code as tr_code,
            c.`created_time_auto` AS created_time
         FROM
            `db_purchasereturn` c
         WHERE
            c.supplier_id = 1 AND (c.return_date >= '2023-10-09' AND c.return_date <= '2023-10-12') UNION SELECT
            d.id as id,
            d.`transfer_date` AS tr_date,
            'transfer_suppler' as tr_type,
            d.transfer_code	 as tr_code,
            d.`created_time` AS created_time
         FROM
            `ac_moneytransfersuppler` d
         WHERE
            d.credit_account_id = 1 AND (d.transfer_date >= '2023-10-09' AND d.transfer_date <= '2023-10-12') ORDER BY `tr_date`, `created_time`
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:02 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 890
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 720
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'purchase_id' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 08:35:45 --> Severity: Notice --> Trying to get property 'purchase_code' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 724
ERROR - 2023-10-12 07:38:45 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-12 08:38:52 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:38:52 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:38:52 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:38:52 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:39:06 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 893
ERROR - 2023-10-12 08:39:06 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:39:06 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:39:06 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:39:06 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:39:06 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:39:06 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:10 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 897
ERROR - 2023-10-12 08:40:10 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:10 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:10 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:10 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:10 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:10 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:40 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 900
ERROR - 2023-10-12 08:40:40 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:40 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:40 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:40 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:40 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:40:40 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 723
ERROR - 2023-10-12 08:41:37 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 901
ERROR - 2023-10-12 08:41:37 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 726
ERROR - 2023-10-12 08:41:37 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 726
ERROR - 2023-10-12 08:41:37 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 726
ERROR - 2023-10-12 08:41:37 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 726
ERROR - 2023-10-12 08:41:37 --> Severity: Notice --> Undefined property: stdClass::$purchase_id C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 726
ERROR - 2023-10-12 08:41:37 --> Severity: Notice --> Trying to get property 'reference_no' of non-object C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 726
ERROR - 2023-10-12 08:43:03 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 904
ERROR - 2023-10-12 08:43:33 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 904
ERROR - 2023-10-12 08:43:59 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 904
ERROR - 2023-10-12 08:45:01 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 907
ERROR - 2023-10-12 08:45:49 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ';' or ',' C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 857
ERROR - 2023-10-12 07:46:36 --> 404 Page Not Found: Theme/plugins
ERROR - 2023-10-12 08:46:45 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 912
ERROR - 2023-10-12 08:47:51 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 915
ERROR - 2023-10-12 08:48:13 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 915
ERROR - 2023-10-12 08:49:09 --> Severity: Notice --> Undefined property: stdClass::$paid_amount C:\xampp\htdocs\ruyah\ruyah\application\models\Reports_model.php 915
