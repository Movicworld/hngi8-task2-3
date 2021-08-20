<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1873f30ef3a4d53b9f074836a1139994
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1873f30ef3a4d53b9f074836a1139994::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1873f30ef3a4d53b9f074836a1139994::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1873f30ef3a4d53b9f074836a1139994::$classMap;

        }, null, ClassLoader::class);
    }
}