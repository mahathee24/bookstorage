<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite6fd23398f44b4ea74a90d1844b4c59c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite6fd23398f44b4ea74a90d1844b4c59c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite6fd23398f44b4ea74a90d1844b4c59c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite6fd23398f44b4ea74a90d1844b4c59c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
