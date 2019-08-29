<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d20d852ca043a0e569cf183f17a5ac8
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wisdmlabs\\Todolist\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wisdmlabs\\Todolist\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d20d852ca043a0e569cf183f17a5ac8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d20d852ca043a0e569cf183f17a5ac8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
