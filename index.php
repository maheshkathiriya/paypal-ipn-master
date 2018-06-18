<?php
/**
 * Created by Mahesh Kathiriya.
 * User: Mahesh Kathiriya
 * Product: paypal-ipn-master-php
 * Date: 18.06.2018
 * Time: 16:21
 * All rights and copyrights are owned by Mahesh Kathiriya®
 */

$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
$paypal_id = 'yourbusiness@emailid.com'; // Business email ID
?>
<html>
    <body>
        <div class="product_div">
            <p class="image"><img src="product1.jpg"/></p>
            <p class="name">Sample Product 1</p>
            <p class="price">Price:$1</p>
            <div class="paypal_button">
                <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
                    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="Sample Product 1">
                    <input type="hidden" name="item_number" value="1">
                    <input type="hidden" name="credits" value="300">
                    <input type="hidden" name="userid" value="1">
                    <input type="hidden" name="amount" value="1">
                    <input type="hidden" name="cpp_header_image" value="http://localhost/mk/paypal/product1.jpg">
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="handling" value="0">
                    <input type="hidden" name="rm" value="2">                    
                    <input type="hidden" name="notify_url" value="http://localhost/mk/paypal/success1.php">
                    <input type="hidden" name="cancel_return" value="http://localhost/mk/paypal/cancel.php">
                    <input type="hidden" name="return" value="http://localhost/mk/paypal/success.php">
                    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </body>
</html>
