<?php
header('Content-type: text/plain'); // We need tab-delimited text file format as output
$output = "merchant order id" . "\t" . "reason\r\n";
/*
 * An example of list of orders
 */
$array = array();
$array[0]['order_id'] = 231;
$array[0]['cancelled_reason'] = 'tMerchantCanceled';

if(!empty($array)) {
    foreach ($array as $arr) {
        $output .= "{$arr['order_id']}\t{$arr['cancelled_reason']}\r\n";
    }
}


print $output;
/*
 * Please note, reason much be any one of the followings
 * BuyerCanceled, MerchantCanceled, DuplicateInvalid, FraudFake
 */