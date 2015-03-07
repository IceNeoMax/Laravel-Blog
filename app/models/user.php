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
    public static function login($email,$password)
    {
        $result = User::where('email',$email)->where('password',$password)->take(1)->get();
        if(count($result)!=0)
        {
//            //Luu session
         Session::put('user_id',$result[0]['_id']);
         Session::put('user_name',$result[0]['user_name']);
            //echo $result[0]['user_name'];
            return "Welcome";
        }
        else return "You cannot access!!!";
    }
}