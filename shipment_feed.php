<?php
header('Content-type: text/plain'); // We need tab-delimited text file format as output

$array = array();
$array[0]['order_id'] = 231;
$array[0]['tracking_num'] = '2323232323242424';
$array[0]['carrier_code'] = 'UPS';
$array[0]['other_carrier'] = '';
$array[0]['ship_date'] = '2012-07-29';

if(!empty($array)) {
    foreach ($array as $arr) {
        $output = "merchant order id" . "\t" . "tracking number" . "\t" . "carrier code" . "\t" . "other carrier name" . "\t" . "ship date\r\n";
        $output .= "{$arr['order_id']}\t{$arr['tracking_num']}\t{$arr['carrier_code']}\t\t{$arr['ship_date']}\r\n";
    }
}
print $output;