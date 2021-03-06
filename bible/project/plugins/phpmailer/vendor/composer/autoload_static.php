<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4481c01296b1c82d4d1a5b676b60809
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

    public static $classMap = array (
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4481c01296b1c82d4d1a5b676b60809::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4481c01296b1c82d4d1a5b676b60809::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4481c01296b1c82d4d1a5b676b60809::$classMap;

        }, null, ClassLoader::class);
    }
}
