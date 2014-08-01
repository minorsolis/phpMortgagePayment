<?php
/**
 * Class phpMortgagePayment
 * Description: I have it as a class but it can also be used as a regular function
 */

Class phpMortgagePayment {

    /**
     * @param $amount
     * @param $interest
     * @param $months
     * @return float
     */
    function calculatePayment($amount, $interest, $months) {
        $intA = $interest/1200;
        $intB = 1+$intA;
        $r1 = pow($intB, $months);
        $payment = $amount*($intA*$r1)/($r1-1);
        return number_format($payment,2);
    }

}