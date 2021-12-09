<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ2_0_0_alpha
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

        spl_autoload_register(array('ComposerAutoloaderInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ2_0_0_alpha', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ2_0_0_alpha', 'loadClassLoader'));

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require __DIR__ . '/autoload_static.php';

            call_user_func(\Composer\Autoload\ComposerStaticInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ2_0_0_alpha::getInitializer($loader));
        } else {
            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        if ($useStaticLoader) {
            $includeFiles = Composer\Autoload\ComposerStaticInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ2_0_0_alpha::$files;
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ2_0_0_alpha($fileIdentifier, $file);
        }

        return $loader;
    }
}

function composerRequireb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ2_0_0_alpha($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
