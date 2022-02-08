<?php

class Config
{
    public static $config;
    public static $custom;

    public static function get($key)
    {
        // if (!self::$config) {
        //
        //     // $config_file = '../application/config/config.' . Environment::get() . '.php';
        //
        //     if (!file_exists($config_file)) {
        //         return false;
        //     }
        //
        //     self::$config = require $config_file;
        // }
        // return self::$config[$key];
        return $_ENV[$key];
    }

    public static function dumpArray()
    {
      // if (!self::$config) {
      //
      //     $config_file = '../application/config/config.' . Environment::get() . '.php';
      //
      //     if (!file_exists($config_file)) {
      //         return false;
      //     }
      //
      //     self::$config = require $config_file;
      // }
      //
      // return self::$config;

      return $_ENV;
    }
}
