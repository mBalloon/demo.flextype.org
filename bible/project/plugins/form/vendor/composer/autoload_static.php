<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit787e929a0a357334de23c67f8a44a334
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
        'Flextype\\Plugin\\Form\\Models\\Fieldsets' => __DIR__ . '/../..' . '/app/Models/Fieldsets.php',
        'Flextype\\Plugin\\Form\\Models\\Form' => __DIR__ . '/../..' . '/app/Models/Form.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit787e929a0a357334de23c67f8a44a334::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit787e929a0a357334de23c67f8a44a334::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit787e929a0a357334de23c67f8a44a334::$classMap;

        }, null, ClassLoader::class);
    }
}
