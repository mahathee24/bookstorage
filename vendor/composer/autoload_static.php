<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6fd23398f44b4ea74a90d1844b4c59c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PDFShift\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PDFShift\\' => 
        array (
            0 => __DIR__ . '/..' . '/pdfshift/pdfshift-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6fd23398f44b4ea74a90d1844b4c59c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6fd23398f44b4ea74a90d1844b4c59c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6fd23398f44b4ea74a90d1844b4c59c::$classMap;

        }, null, ClassLoader::class);
    }
}
