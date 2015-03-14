<?php
class User extends \Jenssegers\Mongodb\Model implements \Illuminate\Auth\UserInterface, \Illuminate\Auth\Reminders\RemindableInterface{

    protected $collection="users";

    public static function getUserById($user_id)
    {
        $user = User::where('user_id',$user_id)->get();
        return $user;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        // TODO: Implement getReminderEmail() method.
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
        if($success!=null) return false;
        return true;
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
            return true;
        }
        else
        {
            echo "You cannot access!!!";
            return false;
        }
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}