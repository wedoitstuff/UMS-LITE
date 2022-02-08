<?php
class Build
{
  public function __construct()
  {
    //print_r($_POST);
    $config = file_get_contents("../application/config/config.sample.test.txt");
    $newConfig = ("../application/config/config.live.php");
    foreach ($_POST as $key => $value){
      $config = str_replace('{{ ' . $key . ' }}', $value, $config);
    }
    fopen("../.env", "w");

    //echo nl2br(htmlentities($config));

    $writeToConfig = file_put_contents($newConfig, $config);
    $siteName = $_POST['siteName'];
    $siteEmail = $_POST['siteEmail'];
    $userPass = '$2y$10$OvprunjvKOOhM1h9bzMPs.vuwGIsOqZbw88rzSyGCTJTcE61g5WXi';
    $sql = array(
    "CREATE TABLE `notes` (
      `note_id` int UNSIGNED NOT NULL,
      `note_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      `user_id` int UNSIGNED NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci COMMENT='user notes';",

    "CREATE TABLE `users` (
      `user_id` int NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
      `session_id` varchar(48) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'stores session cookie id to prevent session concurrency',
      `user_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
      `user_password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password in salted and hashed format',
      `user_email` varchar(254) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
      `user_full_name` varchar(254) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s full name',
      `user_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s activation status',
      `user_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s deletion status',
      `user_account_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'user''s account type (basic, premium, etc)',
      `user_has_avatar` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 if user has a local avatar, 0 if not',
      `user_remember_me_token` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s remember-me cookie token',
      `user_creation_timestamp` bigint DEFAULT NULL COMMENT 'timestamp of the creation of user''s account',
      `user_suspension_timestamp` bigint DEFAULT NULL COMMENT 'Timestamp till the end of a user suspension',
      `user_last_login_timestamp` bigint DEFAULT NULL COMMENT 'timestamp of user''s last login',
      `user_failed_logins` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s failed login attempts',
      `user_last_failed_login` int DEFAULT NULL COMMENT 'unix timestamp of last failed login attempt',
      `user_activation_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email verification hash string',
      `user_password_reset_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password reset code',
      `user_password_reset_timestamp` bigint DEFAULT NULL COMMENT 'timestamp of the password reset request',
      `user_provider_type` text CHARACTER SET utf8 COLLATE utf8_unicode_ci
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci COMMENT='user data';",

    "INSERT INTO `users` (`user_id`, `session_id`, `user_name`, `user_password_hash`, `user_email`, `user_full_name`, `user_active`, `user_deleted`, `user_account_type`, `user_has_avatar`, `user_remember_me_token`, `user_creation_timestamp`, `user_suspension_timestamp`, `user_last_login_timestamp`, `user_failed_logins`, `user_last_failed_login`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_provider_type`) VALUES (1, NULL, 'demo', '$userPass', 'demo@demo.com','Demo Admin', 1, 0, 7, 0, NULL, 1422205178, NULL, 1422209189, 0, NULL, NULL, NULL, NULL, 'DEFAULT');",

    "CREATE TABLE `user_group` (
      `user_group_id` int NOT NULL,
      `user_group_name` varchar(255) NOT NULL,
      `user_group_desc` longtext NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;",

  "INSERT INTO `user_group` (`user_group_id`, `user_group_name`, `user_group_desc`) VALUES
    (1, 'Free Tier', 'The standard user tier'),
    (2, 'Pro User', 'The upgraded tier'),
    (7, 'Super User', 'Administrative User');",

    "ALTER TABLE `notes`
    ADD PRIMARY KEY (`note_id`);",

    "ALTER TABLE `users`
    ADD PRIMARY KEY (`user_id`),
    ADD UNIQUE KEY `user_name` (`user_name`),
    ADD UNIQUE KEY `user_email` (`user_email`);",

  "  ALTER TABLE `user_group`
    ADD PRIMARY KEY (`user_group_id`);",

    "ALTER TABLE `notes`
    MODIFY `note_id` int UNSIGNED NOT NULL AUTO_INCREMENT;",

    "ALTER TABLE `users`
    MODIFY `user_id` int NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=3;",

    "ALTER TABLE `user_group`
    MODIFY `user_group_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;");

    $servername = Request::post('dbHost');
    $username = Request::post('dbUser');
    $password = Request::post('dbPass');
    $dbname = Request::post('dbName');


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }




    foreach($sql as $sql){
      if($conn->query($sql) === TRUE){
        $continue = 1;
      }else{
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
        die();
      }
    }


    $conn->close();

    if($continue == 1){
      if($writeToConfig){
        $dotenv = Dotenv\Dotenv::createImmutable("../");
        $dotenv->load();
        self::writeEnvInstall();
        unlink($newConfig);
        unlink($config);
        include "installation/installed.php";
      }else{
        die("Failed to install");
      }
    }else{
      die("FAILED");
    }
  }

  public static function writeEnvInstall()
  {
    $writer = new \MirazMac\DotEnv\Writer('../.env');
    $config_file = self::dumpArray();
    foreach($config_file as $key => $value)
    {
      $writer->set($key, $value);
      $writer->write();
    }
  }
  public static $config;
  public static function dumpArray()
  {
    if (!self::$config) {

        $config_file = '../application/config/config.live.php';

        if (!file_exists($config_file)) {
            return false;
        }

        self::$config = require $config_file;
    }

    return self::$config;
  }


}
?>
