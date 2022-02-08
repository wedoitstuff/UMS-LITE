<?php

/**
 * This is under development. Expect changes!
 * Class Request
 * Abstracts the access to $_GET, $_POST and $_COOKIE, preventing direct access to these super-globals.
 * This makes PHP code quality analyzer tools very happy.
 * @see http://php.net/manual/en/reserved.variables.request.php
 */
class Request
{
    /**
     * Gets/returns the value of a specific key of the POST super-global.
     * When using just Request::post('x') it will return the raw and untouched $_POST['x'], when using it like
     * Request::post('x', true) then it will return a trimmed and stripped $_POST['x'] !
     *
     * @param mixed $key key
     * @param bool $clean marker for optional cleaning of the var
     * @return mixed the key's value or nothing
     */
    public static function post($key, $clean = false)
    {
        if (isset($_POST[$key])) {
            // we use the Ternary Operator here which saves the if/else block
            // @see http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            return ($clean) ? trim(strip_tags($_POST[$key])) : $_POST[$key];
        }
    }

    /**
     * Returns the state of a checkbox.
     *
     * @param mixed $key key
     * @return mixed state of the checkbox
     */
    public static function postCheckbox($key)
    {
        return isset($_POST[$key]) ? 1 : null;
    }

    /**
     * gets/returns the value of a specific key of the GET super-global
     * @param mixed $key key
     * @return mixed the key's value or nothing
     */
    public static function get($key)
    {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        }
    }

    /**
     * gets/returns the value of a specific key of the COOKIE super-global
     * @param mixed $key key
     * @return mixed the key's value or nothing
     */
    public static function cookie($key)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }
    }

    public static function siteLogo($col)
    {


    	if($_ENV[$col] != null){
    		$logoPath = 'uploads/'.$_ENV[$col];
    		$logoPath = "<img src = '$logoPath' class= 'logo h-30px' height = '30px'>";
    		if(file_exists('uploads/'.$_ENV[$col])){
    			$logoPath = $logoPath;
    		}else{
                if($col == "filePathLight"){$tCol = "light";}else{$tCol = "dark";}
                $logoPath = "<span class = 'lead text-$tCol fw-bold logo'>" . $_ENV['siteTitle'] . "</span>";
    		}
    	}else{
            if($col == "filePathLight"){$tCol = "light";}else{$tCol = "dark";}
    		$logoPath = "<span class = 'lead text-$tCol fw-bold logo'>" . $_ENV['siteTitle'] . "</span>";
    	}
    	return $logoPath;
    }

    public static function siteDetails($data)
    {
      return $_ENV[$data];
    }

    public static function userFullName()
    {
      $user_id = Session::get('user_id');
      $sql = "SELECT * FROM users WHERE user_id = $user_id";
      $database = DatabaseFactory::getFactory()->getConnection();

      $query = $database->prepare($sql);
      $query->execute();

      $stmt = $query->fetch(PDO::FETCH_ASSOC);
      return $stmt['user_full_name'];
    }

    public static function themesDropown()
    {
      $themes = [];
      $dir = new DirectoryIterator($path = "themes");
        foreach ($dir as $fileinfo) {
            if ($fileinfo->isDir() && !$fileinfo->isDot()) {
                $themes[] = $fileinfo->getFilename().'<br>';
            }
        }

      $select .= '<select class="form-control" id = "theme" name="theme"><option value = "' . Config::get("THEME") . '">Current Theme</option>' ;
      foreach($themes as $x){
        $select .= '<option value = "' . $x . '">' . $x . '</option>';
      }
      $select .= "</select>";

      echo $select;
    }

    public static function breadcrumb()
    {

      $uri = $_SERVER['REQUEST_URI'];

      $uri = explode("/", $uri);
      array_shift($uri);
      array_shift($uri);
      $return = '';
      foreach($uri as $u){
        $return.= '
        <!--begin::Item-->
        <li class="breadcrumb-item">
          <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">' . $u . '</li>
        <!--end::Item-->
        ';
      }

      return $return;
    }

    public static function show($child)
    {
      $uri = $_SERVER['REQUEST_URI'];

      $uri = explode("/", $uri);
      if(in_array($child, $uri)){
        return "show";
      }
    }

    public static function showParentChild($child)
    {
      $uri = $_SERVER['REQUEST_URI'];
      $child = explode(",", $child);
      $uri = explode("/", $uri);
      $x = 0;
      foreach ($child as $c)
      {
        if(in_array($c, $uri)){
          $x++;
        }
      }
      if($x > 0){
        return "show";
      }
    }

    public static function active($pageName, $child){
      if($pageName == $child){
        return "active";
      }
    }

    public static function userLevel()
    {
      $level = Session::get("user_account_type");
      $sql = "SELECT * FROM user_group WHERE user_group_id = $level";
      $database = DatabaseFactory::getFactory()->getConnection();

      $query = $database->prepare($sql);
      $query->execute();

      $stmt = $query->fetch(PDO::FETCH_ASSOC);
      return $stmt['user_group_name'];
    }

    public static function userLevelByInt($level)
    {
      $sql = "SELECT * FROM user_group WHERE user_group_id = $level";
      $database = DatabaseFactory::getFactory()->getConnection();

      $query = $database->prepare($sql);
      $query->execute();

      $stmt = $query->fetch(PDO::FETCH_ASSOC);
      return $stmt['user_group_name'];
    }

    public static function userIP()
    {
      if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
      }
      $client  = @$_SERVER['HTTP_CLIENT_IP'];
      $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
      $remote  = $_SERVER['REMOTE_ADDR'];

      if(filter_var($client, FILTER_VALIDATE_IP))
      {
          $ip = $client;
      }
      elseif(filter_var($forward, FILTER_VALIDATE_IP))
      {
          $ip = $forward;
      }
      else
      {
          $ip = $remote;
      }

      return $ip;
    }

    public static function userCount()
    {
      $sql = "SELECT COUNT(*) as 'users' FROM users";
      $database = DatabaseFactory::getFactory()->getConnection();

      $query = $database->prepare($sql);
      $query->execute();

      $stmt = $query->fetch(PDO::FETCH_ASSOC);
      return $stmt['users'];
    }

    public static function userGroupCount()
    {
      $sql = "SELECT COUNT(*) as 'users' FROM user_group";
      $database = DatabaseFactory::getFactory()->getConnection();

      $query = $database->prepare($sql);
      $query->execute();

      $stmt = $query->fetch(PDO::FETCH_ASSOC);
      return $stmt['users'];
    }

    public static function userSubCount()
    {
      $sql = "SELECT COUNT(*) as 'users' FROM users WHERE user_account_type IN (2,3,4,5,6)";
      $database = DatabaseFactory::getFactory()->getConnection();

      $query = $database->prepare($sql);
      $query->execute();

      $stmt = $query->fetch(PDO::FETCH_ASSOC);
      return $stmt['users'];
    }

    public static function UMSversion()
    {
      $local_ver = Config::get("VERSION");
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, 'https://updc.umsframework.io/');
      $result = curl_exec($ch);
      curl_close($ch);

      $obj = json_decode($result);

      $remote_ver = $obj->version;

      if($local_ver == $remote_ver)
      {
        return "<span class = 'text-success'> - up to date</span>";
      }else{
        return "<strong class = 'text-warning'> - update available</strong>";
      }

    }

    public static function RemoteVersion()
    {

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, 'https://updc.umsframework.io/');
      $result = curl_exec($ch);
      curl_close($ch);

      $obj = json_decode($result);

      return $obj->version_long_title;

    }

    public static function updateRequired()
    {
      $local_ver = Config::get("VERSION");
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, 'https://updc.umsframework.io/');
      $result = curl_exec($ch);
      curl_close($ch);

      $obj = json_decode($result);

      $remote_ver = $obj->version;

      if($local_ver == $remote_ver)
      {
        return false;
      }else{
        return true;
      }

    }
}
