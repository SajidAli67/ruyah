<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-02 10:33:35 --> Could not find the language line "company_address"
ERROR - 2023-11-02 10:35:15 --> Query error: Unknown column 'b.sales_key' in 'field list' - Invalid query: SELECT b.sales_key,b.created_by, b.customer_previous_due,b.customer_total_due,b.store_id,a.customer_name,a.mobile,a.phone,a.gstin,a.tax_number,a.email,
                           a.opening_balance,a.country_id,a.state_id,a.additional_no,a.district,a.building_number,a.city,a.street_name,a.another_buyer,
                           a.postcode,a.address,b.sales_date,b.created_time,b.reference_no,
                           b.sales_code,b.sales_note,
                           coalesce(b.grand_total,0) as grand_total,
                           coalesce(b.subtotal,0) as subtotal,
                           coalesce(b.paid_amount,0) as paid_amount,
                           coalesce(b.other_charges_input,0) as other_charges_input,
                           other_charges_tax_id,
                           coalesce(b.other_charges_amt,0) as other_charges_amt,
                           discount_to_all_input,
                           b.discount_to_all_type,
                           coalesce(b.tot_discount_to_all_amt,0) as tot_discount_to_all_amt,
                           coalesce(b.round_off,0) as round_off,
                           b.payment_status

                           FROM db_customers a,
                           db_sales b 
                           WHERE 
                           a.`id`=b.`customer_id` AND 
                           b.`id`='35' 
                           
ERROR - 2023-11-02 10:35:33 --> Could not find the language line "company_address"
