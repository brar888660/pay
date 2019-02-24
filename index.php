<?php
require_once 'vendor/autoload.php';
$config = require_once __DIR__.'/config/development.config.php';

use App\Classes\PaymentServiceProviderFactoryImp;

//藍新金流testing
$mid=uniqid();
$t=time();

$paymetGetway = PaymentServiceProviderFactoryImp::make('MPG');

$paymetGetway->setServiceUrl($config['cash-flow']['MPG']['serviceUrl']);

$paymetGetway->setSendParams('MerchantID', $config['cash-flow']['MPG']['MerchantID']);
$paymetGetway->setSendParams('RespondType', 'JSON');
$paymetGetway->setSendParams('TimeStamp', $t);
$paymetGetway->setSendParams('Version', "1.2");
$paymetGetway->setSendParams('MerchantOrderNo', $mid);
$paymetGetway->setSendParams('Amt', '200');
$paymetGetway->setSendParams('ItemDesc', 'eatEating');
$paymetGetway->setSendParams('Email', 'cccccccccc@gmail.com');
$paymetGetway->setSendParams('LoginType', '0');

$paymetGetway->setCheckParams('HashKey', $config['cash-flow']['MPG']['HashKey']);
$paymetGetway->setCheckParams('Amt', '200');
$paymetGetway->setCheckParams('MerchantID', $config['cash-flow']['MPG']['MerchantID']);
$paymetGetway->setCheckParams('MerchantOrderNo', $mid);
$paymetGetway->setCheckParams('TimeStamp', $t);
$paymetGetway->setCheckParams('Version', '1.2');
$paymetGetway->setCheckParams('HashIV', $config['cash-flow']['MPG']['HashIV']);

$paymetGetway->checkout();




