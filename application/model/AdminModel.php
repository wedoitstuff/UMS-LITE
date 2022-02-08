<?php

/**
 * Handles all data manipulation of the admin part
 */
class AdminModel
{
    /**
     * Sets the deletion and suspension values
     *
     * @param $suspensionInDays
     * @param $softDelete
     * @param $userId
     */
    public static function setAccountSuspensionAndDeletionStatus($suspensionInDays = 0, $softDelete, $userId)
    {

        // Prevent to suspend or delete own account.
        // If admin suspend or delete own account will not be able to do any action.
        if ($userId == Session::get('user_id')) {
            Session::add('feedback_negative', Text::get('FEEDBACK_ACCOUNT_CANT_DELETE_SUSPEND_OWN'));
            return false;
        }

        if ($suspensionInDays > 0) {
            $suspensionTime = time() + ($suspensionInDays * 60 * 60 * 24);
        } else {
            $suspensionTime = null;
        }

        // FYI "on" is what a checkbox delivers by default when submitted. Didn't know that for a long time :)
        if ($softDelete == "on") {
            $delete = 1;
        } else {
            $delete = 0;
        }

        // write the above info to the database
        self::writeDeleteAndSuspensionInfoToDatabase($userId, $suspensionTime, $delete);

        // if suspension or deletion should happen, then also kick user out of the application instantly by resetting
        // the user's session :)
        if ($suspensionTime != null OR $delete = 1) {
            self::resetUserSession($userId);
        }
    }

    /**
     * Simply write the deletion and suspension info for the user into the database, also puts feedback into session
     *
     * @param $userId
     * @param $suspensionTime
     * @param $delete
     * @return bool
     */
    private static function writeDeleteAndSuspensionInfoToDatabase($userId, $suspensionTime, $delete)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET user_suspension_timestamp = :user_suspension_timestamp, user_deleted = :user_deleted  WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(
                ':user_suspension_timestamp' => $suspensionTime,
                ':user_deleted' => $delete,
                ':user_id' => $userId
        ));

        if ($query->rowCount() == 1) {
            Session::add('feedback_positive', Text::get('FEEDBACK_ACCOUNT_SUSPENSION_DELETION_STATUS'));
            return true;
        }
    }

    /**
     * Kicks the selected user out of the system instantly by resetting the user's session.
     * This means, the user will be "logged out".
     *
     * @param $userId
     * @return bool
     */
    private static function resetUserSession($userId)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE users SET session_id = :session_id  WHERE user_id = :user_id LIMIT 1");
        $query->execute(array(
                ':session_id' => null,
                ':user_id' => $userId
        ));

        if ($query->rowCount() == 1) {
            Session::add('feedback_positive', Text::get('FEEDBACK_ACCOUNT_USER_SUCCESSFULLY_KICKED'));
            return true;
        }
    }

    public static function updateSiteSettings()
    {
        if(empty($_POST['GOOGLE_ANALYTICS'])){
            $_POST['GOOGLE_ANALYTICS'] = "false";
        }
        if(empty($_POST['GOOGLE_META'])){
            $_POST['GOOGLE_META'] = "false";
        }
        if(empty($_POST['CUSTOM_SCRIPT'])){
            $_POST['CUSTOM_SCRIPT'] = "false";
        }
        if(empty($_POST['CUSTOM_HEADER'])){
            $_POST['CUSTOM_HEADER'] = "false";
        }
        if(isset($_POST['CUSTOM_HEADER_CONTENT'])){
            $_POST['CUSTOM_HEADER_CONTENT'] = str_replace(array(" ","\n", "\t", "\r"), '&nbsp;', $_POST['CUSTOM_HEADER_CONTENT']);
        }
        if(isset($_POST['CUSTOM_SCRIPT_CONTENT'])){
            $_POST['CUSTOM_SCRIPT_CONTENT'] = str_replace(array(" ","\n", "\t", "\r"), '&nbsp;', $_POST['CUSTOM_SCRIPT_CONTENT']);
        }
      $siteTitle = strip_tags(Request::post('siteTitle'));
      $contactEmail = strip_tags(Request::post('contactEmail'));
      $topBarTheme = strip_tags(Request::post('topBarTheme'));
      $sideBarTheme = strip_tags(Request::post('sideBarTheme'));
      $version = strip_tags(Request::post('version'));

      if(!empty($_FILES["filePathLight"]["tmp_name"])){
        $file = $_FILES["filePathLight"]["name"];
        $target_dir = "uploads/";
        $file = explode(".", $file);
        $file = round(microtime(true)) . '-light.' . end($file);
        $target_file = $target_dir . basename($file);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["filePathLight"]["tmp_name"]);
        if($check == false) {
          Session::add('feedback_negative', 'We couldn\'t upload your logo - Fake file detected');
          return false;
        }
        if ($_FILES["filePathLight"]["size"] > 500000) {
          Session::add('feedback_negative', 'We couldn\'t upload your logo - File too large');
          return false;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
          Session::add('feedback_negative', 'We couldn\'t upload your logo - Unsupported file type');
          return false;
        }
        if (!move_uploaded_file($_FILES["filePathLight"]["tmp_name"], $target_file)) {
          Session::add('feedback_negative', 'We couldn\'t upload your logo - Error moving');
          return false;
        }
          $_FILES["filePathLight"]["tmp_name"] = $file;
      }else{
        if(!Request::siteDetails('filePathLight')){
            $_FILES["filePathLight"]["tmp_name"] = 'null';
        }else{
            $_FILES["filePathLight"]["tmp_name"] = Request::siteDetails('filePathLight');
        }
      }

        if(!empty($_FILES["filePathDark"]["tmp_name"])){
            $file = $_FILES["filePathDark"]["name"];
            $target_dir = "uploads/";
            $file = explode(".", $file);
            $file = round(microtime(true)) . '-dark.' . end($file);
            $target_file = $target_dir . basename($file);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["filePathDark"]["tmp_name"]);
            if($check == false) {
                Session::add('feedback_negative', 'We couldn\'t upload your logo - Fake file detected');
                return false;
            }
            if ($_FILES["filePathDark"]["size"] > 500000) {
                Session::add('feedback_negative', 'We couldn\'t upload your logo - File too large');
                return false;
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                Session::add('feedback_negative', 'We couldn\'t upload your logo - Unsupported file type');
                return false;
            }
            if (!move_uploaded_file($_FILES["filePathDark"]["tmp_name"], $target_file)) {
                Session::add('feedback_negative', 'We couldn\'t upload your logo - Error moving');
                return false;
            }
            $_FILES["filePathDark"]["tmp_name"] = $file;
        }else{
            if(!Request::siteDetails('filePathDark')){
                $_FILES["filePathDark"]["tmp_name"] = 'null';
            }else{
                $_FILES["filePathDark"]["tmp_name"] = Request::siteDetails('filePathDark');
            }
        }

        $writer = new \MirazMac\DotEnv\Writer('../.env');
        $config_file = $_POST;


        foreach($config_file as $key => $value)
        {
            $writer->set($key, $value);
            $writer->write();
        }

        $writer->set('filePathDark', $_FILES["filePathDark"]["tmp_name"]);
        $writer->write();
        $writer->set('filePathLight', $_FILES["filePathLight"]["tmp_name"]);
        $writer->write();
        Session::add('feedback_positive', "Settings successfully updated");
        return true;
    }

    public static function updateAuth()
    {
      if(empty($_POST['REG_ENABLE'])){
        $_POST['REG_ENABLE'] = "false";
      }
      if(empty($_POST['VERIFY_EMAIL'])){
        $_POST['VERIFY_EMAIL'] = "false";
      }
      $writer = new \MirazMac\DotEnv\Writer('../.env');
      $config_file = $_POST;
      foreach($config_file as $key => $value)
      {
        $writer->set($key, $value);
        $writer->write();
      }
      return true;
    }

    public static function updateMail()
    {
      if(empty($_POST['VERIFY_EMAIL'])){
        $_POST['VERIFY_EMAIL'] = "false";
      }
      $writer = new \MirazMac\DotEnv\Writer('../.env');
      $config_file = $_POST;
      foreach($config_file as $key => $value)
      {
        $writer->set($key, $value);
        $writer->write();
      }
      return true;
    }
}
