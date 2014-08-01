<?php
/**
 * @Description: this is an example of how to use the formula.
 */
require('phpMortgagePayment.php');
$phpMortgagePayment = new phpMortgagePayment();

$amount = 50000;
$interest = 6.5;
$months = 360;

echo "Amount: $$amount <br />Interest: $interest <br />Months: $months <hr>";
echo "The monthly payment is: $".$phpMortgagePayment->calculatePayment($amount,$interest,$months);
