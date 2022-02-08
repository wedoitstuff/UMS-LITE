<?php

/**
 * This controller shows an area that's only visible for logged in users (because of Auth::checkAuthentication(); in line 16)
 */
class GoogleController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This method controls what happens when you move to /dashboard/index in your app.
     */
    public function callback()
    {
      if(isset($_GET['code'])){
        Google::handleLogin();
      }else{
        Session::add('feedback_negative', "Login With Google Failed");
        Redirect::to('login');
      }
    }
}
