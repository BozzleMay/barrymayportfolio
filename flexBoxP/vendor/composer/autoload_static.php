<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit278095fd0184ee1ab76405d39e9ba2a2
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit278095fd0184ee1ab76405d39e9ba2a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit278095fd0184ee1ab76405d39e9ba2a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit278095fd0184ee1ab76405d39e9ba2a2::$classMap;

        }, null, ClassLoader::class);
    }
}
