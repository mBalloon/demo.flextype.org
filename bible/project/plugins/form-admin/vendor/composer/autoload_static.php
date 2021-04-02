<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6efb4606db267f601c78d781342fbf00
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Flextype\\Component\\Filesystem\\' => 30,
            'Flextype\\Component\\Arrays\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Flextype\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/flextype-components/filesystem',
        ),
        'Flextype\\Component\\Arrays\\' => 
        array (
            0 => __DIR__ . '/..' . '/flextype-components/arrays/src',
        ),
    );

    public static $classMap = array (
        'Flextype\\Component\\Arrays\\Arrays' => __DIR__ . '/..' . '/flextype-components/arrays/src/Arrays.php',
        'Flextype\\Component\\Filesystem\\Filesystem' => __DIR__ . '/..' . '/flextype-components/filesystem/Filesystem.php',
        'Flextype\\Plugin\\FormAdmin\\Controllers\\FormAdminFieldsetsController' => __DIR__ . '/../..' . '/app/Controllers/FormAdminFieldsetsController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6efb4606db267f601c78d781342fbf00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6efb4606db267f601c78d781342fbf00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6efb4606db267f601c78d781342fbf00::$classMap;

        }, null, ClassLoader::class);
    }
}
