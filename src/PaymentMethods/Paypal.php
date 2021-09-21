<?php

namespace Exelentshakil\Solid\Srp\PaymentMethods;

use Exelentshakil\Solid\Srp\Contracts\PaymentInterface;

class Paypal implements PaymentInterface
{

    public function pay()
    {
        // sent api request to pay
        // payment success
        // return json
        return json_encode([
            'messsage' => 'payment successful',
            'payment_method' => get_called_class()
        ]);

    }
}