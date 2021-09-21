<?php
namespace Exelentshakil\Solid\Srp\Services;

use Exelentshakil\Solid\Srp\Contracts\PaymentInterface;
use Exelentshakil\Solid\Srp\PaymentMethods\bKash;
use Exelentshakil\Solid\Srp\PaymentMethods\Paypal;
use Exelentshakil\Solid\Srp\PaymentMethods\Stripe;
use Exelentshakil\Solid\Srp\PaymentMethods\Bank;
use Exelentshakil\Solid\Srp\PaymentMethods\Cash;

class PaymentService
{
    public static function init(string $paymentMethod = '') : PaymentInterface
    {
        switch ( $paymentMethod ) {
            case 'paypal':
                return new Paypal();
            case 'stripe':
                return new Stripe();
            case 'bank':
                return new Bank();
            case 'bkash':
                return new bKash();
            default:
                return new Cash();
        }
    }
}