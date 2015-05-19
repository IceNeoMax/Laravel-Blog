<?php

class LoginFacebookController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
  
    public function callback()
    {
//        if($this->fb->generateSessionFromRedirect())
//        {
//            echo "Session login";
//        }
//        dd($this->fb->getGraph());
        return Config::get('facebook.app_id');
    }
}
