<?php


namespace Exelentshakil\Solid\Srp\Controllers;


use Exelentshakil\Solid\Srp\Services\PaymentService;

class PaymentController
{
    public static function pay() {
        $payment = PaymentService::init('bkash');
        return $payment->pay();
    }
}