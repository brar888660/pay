<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7898f072cffe428e546c73e7a6239c5
{
    public static $classMap = array (
        'App\\Classes\\PaymentServiceProviderFactory' => __DIR__ . '/../..' . '/classes/PaymentServiceProviderFactory.php',
        'App\\Classes\\PaymentServiceProviderFactoryImp' => __DIR__ . '/../..' . '/classes/PaymentServiceProviderFactoryImp.php',
        'App\\Classes\\ThirdPartPay\\MPGPaymentServiceProvider' => __DIR__ . '/../..' . '/classes/ThirdPartPay/MPGPaymentServiceProvider.php',
        'App\\Classes\\ThirdPartPay\\PaymentServiceProviderAbs' => __DIR__ . '/../..' . '/classes/ThirdPartPay/PaymentServiceProviderAbs.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd7898f072cffe428e546c73e7a6239c5::$classMap;

        }, null, ClassLoader::class);
    }
}