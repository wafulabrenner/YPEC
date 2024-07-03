<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c87eabdcf64eb459aa7a629d858c0dc
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
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c87eabdcf64eb459aa7a629d858c0dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c87eabdcf64eb459aa7a629d858c0dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c87eabdcf64eb459aa7a629d858c0dc::$classMap;

        }, null, ClassLoader::class);
    }
}
