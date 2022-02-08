<?php

class AdminController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // special authentication check for the entire controller: Note the check-ADMIN-authentication!
        // All methods inside this controller are only accessible for admins (= users that have role type 7)
        Auth::checkAdminAuthentication();
    }

    /**
     * This method controls what happens when you move to /admin or /admin/index in your app.
     */
    public function index()
    {
        $this->View->render('admin/index', array(
        'users' => UserModel::getPublicProfilesOfAllUsers(),
				'user_name' => Session::get('user_name'),
				'user_email' => Session::get('user_email'),
				'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
				'user_avatar_file' => Session::get('user_avatar_file'),
				'user_account_type' => Session::get('user_account_type'),
        'page_name' => 'Admin Overview')
        );
    }

    public function env_test()
    {
        Helper::writeEnv();
    }

    public function actionAccountSettings()
    {
        AdminModel::setAccountSuspensionAndDeletionStatus(
            Request::post('suspension'), Request::post('softDelete'), Request::post('user_id')
        );

        Redirect::to("admin");
    }

	public function siteSettings()
    {
        $this->View->render('admin/siteSettings', array(
            'user_name' => Session::get('user_name'),
            'user_email' => Session::get('user_email'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'user_account_type' => Session::get('user_account_type'),
            'page_name' => 'Site Settings'
        ));
    }
    public function updateSiteSettings()
    {
      ini_set('log_errors_max_len', '0');
      $update = AdminModel::updateSiteSettings();
      if($update){
        Redirect::to('admin/configuration');
      }else{
        Redirect::to('admin/configuration');
      }

    }

    public function configuration($route = "basic")
    {
      if($route == "basic"){
        $this->View->render('admin/configuration/basic', array(
        'users' => UserModel::getPublicProfilesOfAllUsers(),
        'user_name' => Session::get('user_name'),
        'user_email' => Session::get('user_email'),
        'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
        'user_avatar_file' => Session::get('user_avatar_file'),
        'user_account_type' => Session::get('user_account_type'),
        'page_name' => 'Site Settings - Basic')
        );
      }
      elseif ($route == "auth") {
        $this->View->render('admin/configuration/auth', array(
        'users' => UserModel::getPublicProfilesOfAllUsers(),
        'user_name' => Session::get('user_name'),
        'user_email' => Session::get('user_email'),
        'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
        'user_avatar_file' => Session::get('user_avatar_file'),
        'user_account_type' => Session::get('user_account_type'),
        'page_name' => 'Site Settings - Auth')
        );
      }
      elseif ($route == "mail") {
        $this->View->render('admin/configuration/mail', array(
        'users' => UserModel::getPublicProfilesOfAllUsers(),
        'user_name' => Session::get('user_name'),
        'user_email' => Session::get('user_email'),
        'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
        'user_avatar_file' => Session::get('user_avatar_file'),
        'user_account_type' => Session::get('user_account_type'),
        'page_name' => 'Site Settings - Mail')
        );
      }
      elseif ($route == "payment") {
        $this->View->render('admin/configuration/payment', array(
        'users' => UserModel::getPublicProfilesOfAllUsers(),
        'user_name' => Session::get('user_name'),
        'user_email' => Session::get('user_email'),
        'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
        'user_avatar_file' => Session::get('user_avatar_file'),
        'user_account_type' => Session::get('user_account_type'),
        'page_name' => 'Site Settings - Payments')
        );
      }
      elseif ($route == "backups") {
        $this->View->render('admin/configuration/backups', array(
        'users' => UserModel::getPublicProfilesOfAllUsers(),
        'user_name' => Session::get('user_name'),
        'user_email' => Session::get('user_email'),
        'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
        'user_avatar_file' => Session::get('user_avatar_file'),
        'user_account_type' => Session::get('user_account_type'),
        'page_name' => 'Site Settings - Backups')
        );
      }
      elseif ($route == "about") {
        $this->View->render('admin/configuration/about', array(
        'users' => UserModel::getPublicProfilesOfAllUsers(),
        'user_name' => Session::get('user_name'),
        'user_email' => Session::get('user_email'),
        'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
        'user_avatar_file' => Session::get('user_avatar_file'),
        'user_account_type' => Session::get('user_account_type'),
        'page_name' => 'Site Settings - About Page')
        );
      }
      else{
        $this->View->render('admin/configuration/basic', array(
        'users' => UserModel::getPublicProfilesOfAllUsers(),
        'user_name' => Session::get('user_name'),
        'user_email' => Session::get('user_email'),
        'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
        'user_avatar_file' => Session::get('user_avatar_file'),
        'user_account_type' => Session::get('user_account_type'),
        'page_name' => 'Site Settings - Basic')
        );
      }
    }

    public function updateConfiguration()
    {
      $update = Config::update();
      if($update){
        Redirect::to('admin/configuration');
      }else{
        Redirect::to('admin/configuration');
      }
    }

    public function users()
      {
          $this->View->render('admin/user/users', array(
              'users' => UserModel::getPublicProfilesOfAllUsers(),
              'user_name' => Session::get('user_name'),
              'user_email' => Session::get('user_email'),
              'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
              'user_avatar_file' => Session::get('user_avatar_file'),
              'user_account_type' => Session::get('user_account_type'),
              'page_name' => 'User Management - Users'
          ));
      }

      public function delete_user($user_id = null)
      {
        if(isset($user_id))
        {
          AdminModel::setAccountSuspensionAndDeletionStatus(0, "on", $user_id);
          Redirect::to('admin/users');
        }
        else
        {
          Redirect::to('admin/users');
        }
      }

      public function enable_user($user_id = null)
      {
        if(isset($user_id))
        {
          AdminModel::setAccountSuspensionAndDeletionStatus(0, "off", $user_id);
          Redirect::to('admin/users');
        }
        else
        {
          Redirect::to('admin/users');
        }
      }

      public static function auth_settings()
      {
        if(AdminModel::updateAuth()){
          Session::add('feedback_positive', 'Authentications settings updated');
          Redirect::to('admin/configuration/auth');
        }else{
          Session::add('feedback_positive', 'Authentications settings updated');
          Redirect::to('admin/configuration/auth');
        }
      }

      public static function mail_settings()
      {
        if(AdminModel::updateMail()){
          Session::add('feedback_positive', 'Mail settings updated');
          Redirect::to('admin/configuration/mail');
        }else{
          Session::add('feedback_positive', 'Mail settings updated');
          Redirect::to('admin/configuration/mail');
        }
      }

    public static function about_settings()
    {
        if(AdminModel::updateMail()){
            Session::add('feedback_positive', 'Mail settings updated');
            Redirect::to('admin/configuration/mail');
        }else{
            Session::add('feedback_positive', 'Mail settings updated');
            Redirect::to('admin/configuration/mail');
        }
    }
}
