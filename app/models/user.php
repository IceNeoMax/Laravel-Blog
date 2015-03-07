<?php
class User extends \Jenssegers\Mongodb\Model {
	protected $collection="users";
    public static function getUserById($user_id)
    {
        $user = User::where('user_id',$user_id)->get();
        return $user;
    }
    public static function addFieldToUser($user_id,$field)
    {
        $success = User::where('user_id',$user_id)->update(array($field));
        return $success;
    }
    /*
     * check valid email
     */
    public static function checkValidEmail($email)
    {
        $success = User::where('email',$email)->first();
        if($success!=null) return "Co thong tin";
        return "Khong co tai khoan";
    }

    /**
     * Login to user
     */
    public static function login($userName,$password)
    {
        $result = User::where('user_name',$userName)->where('password',$password)->get();
        if(isset($result))
        {
            //Luu session
            return "Welcome";
        }
        else return "You cannot access!!!";
    }
}