<?php

class ProfileController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This method controls what happens when you move to /overview/index in your app.
     * Shows a list of all users.
     */
    public function index()
    {
        Auth::checkAuthentication();
        $this->View->render('profile/index', array(
          'users' => UserModel::getPublicProfilesOfAllUsers(),
          'user_name' => Session::get('user_name'),
          'user_email' => Session::get('user_email'),
          'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
          'user_avatar_file' => Session::get('user_avatar_file'),
          'user_account_type' => Session::get('user_account_type'),
          'page_name' => 'User Accounts')
        );
    }

    /**
     * This method controls what happens when you move to /overview/showProfile in your app.
     * Shows the (public) details of the selected user.
     * @param $user_id int id the the user
     */
    public function u($user_name = null)
    {
        if (isset($user_name)) {
            $this->View->render('profile/showProfile', array(
                'user' => UserModel::getPublicProfileOfUser($user_name),
        				'user_name' => Session::get('user_name'),
        				'user_email' => Session::get('user_email'),
        				'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
        				'user_avatar_file' => Session::get('user_avatar_file'),
        				'user_account_type' => Session::get('user_account_type'),
                'page_name' => 'User Profile')
            );
        } else {
            Redirect::to('dashboard');
        }
    }
}
