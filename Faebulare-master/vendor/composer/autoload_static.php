<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaed3be270594b1f28a1bafba407fb64e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaed3be270594b1f28a1bafba407fb64e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaed3be270594b1f28a1bafba407fb64e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
