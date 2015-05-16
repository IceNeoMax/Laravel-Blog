<?php
/**
 * Created by PhpStorm.
 * User: Nhuan
 * Date: 5/16/2015
 * Time: 3:19 PM
 */
class FacebookHelper
{
    private $helper;
    public function __construct()
    {
        FacebookSession::setDefaultApplication(Config::get('facebook.app_id'), Config::get('facebook.app_secret'));
    }
}