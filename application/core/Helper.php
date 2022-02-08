<?php
class Helper
{
  public static $config;

  public static function dumpArray()
  {
    if (!self::$config) {

        $config_file = '../application/config/config.' . Environment::get() . '.php';

        if (!file_exists($config_file)) {
            return false;
        }

        self::$config = require $config_file;
    }

    return self::$config;
  }
  public static function writeEnv()
  {
    $writer = new \MirazMac\DotEnv\Writer('../.env');
    $config_file = Config::dumpArray();
    foreach($config_file as $key => $value)
    {
      $writer->set($key, $value);
      $writer->write();
    }
  }

  public static function writeEnvInstall()
  {
    $writer = new \MirazMac\DotEnv\Writer('../example.env');
    $config_file = self::dumpArray();
    foreach($config_file as $key => $value)
    {
      $writer->set($key, $value);
      $writer->write();
    }
  }
}
?>
