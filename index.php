<?php
include __DIR__ . '/vendor/autoload.php';

use Exelentshakil\Solid\Srp\Controllers\PaymentController;

header('Content-type: application/json; charset: utf-8');

echo PaymentController::pay();