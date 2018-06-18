<?php
/**
 * Created by Mahesh Kathiriya.
 * User: Mahesh Kathiriya
 * Product: paypal-ipn-master-php
 * Date: 18.06.2018
 * Time: 16:21
 * All rights and copyrights are owned by Mahesh Kathiriya®
 */

if ($_REQUEST['payment_status'] == "Completed") {

   echo $item_transaction = $_REQUEST['txn_id'];
  // echo $item_price = $_REQUEST['mc_gross'];
    $item_currency = $_REQUEST['cc'];
    $item_no = $_REQUEST['mc_currency'];

    echo "Payment Done Successfully";
}
?>