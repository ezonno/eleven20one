<?php

// autoload_real.php generated by Composer

require __DIR__ . '/ClassLoader.php';

class ComposerAutoloaderInit
{
    private static $loader;

    public static function getLoader()
    {
        if (null !== static::$loader) {
            return static::$loader;
        }

        static::$loader = $loader = new \Composer\Autoload\ClassLoader();
        $vendorDir = dirname(__DIR__);
        $baseDir = dirname($vendorDir);

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->add($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register();

        require $vendorDir . '/kriswallsmith/assetic/src/functions.php';

        return $loader;
    }
}
