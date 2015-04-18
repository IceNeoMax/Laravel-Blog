<?php
class User extends \Jenssegers\Mongodb\Model implements \Illuminate\Auth\UserInterface, \Illuminate\Auth\Reminders\RemindableInterface {
	protected $collection="users";
	protected $hidden = array('password');
    public static function getUserById($user_id)
    {
        $user = User::where('_id',$user_id)->get();
        return $user;
    }
    public static function addFieldToUser($user_id,$field)
    {
        $success = User::where('_id',$user_id)->update(array($field));
        return $success;
    }
    /*
     * check valid email, user
     */
    public static function check_Email($email)
    {
        $success = User::where('email',$email)->first();
        if($success!=null) return true;
        return false;
    }

    public static function check_Username($username)
    {
        $success = User::where('username',$username)->first();
        if($success!=null) return true;
        return false;
    }

    /**
     * Login to user
     */
    public static function check_login($user_input,$password)
    {
        //$result = User::where('username',$user_input)->where('password',$password)->first();	
<<<<<<< HEAD
        $data = array('email'=>$user_input,'password'=>$password);
        $result=Auth::attempt($data,true);
=======
	$data = array('email'=>$user_input,'password'=>$password);
	$result=Auth::attempt($data,true);
>>>>>>> fc21e7b75f4613e0a2bbf77188dc8a2c8fb03657
        if(!$result)
        {
          return false;
        }
        else{
<<<<<<< HEAD
            //          //Luu session
//            Session::put('user_id',$result['_id']);
//            Session::put('user_name',$result['username']);
            return $result;
=======
                //          //Luu session
                Session::put('user_id',$result['_id']);
                Session::put('user_name',$result['username']);
                //echo $result[0]['user_name'];
                return $result;
>>>>>>> fc21e7b75f4613e0a2bbf77188dc8a2c8fb03657
        }
    }

    /**
     * check logged
    */

    public static function check_logged($username){
        if(Session::has('user_name')){
            if(Session::get('user_name')==$username){
                return true;
            }
            else return false;
        }
        else return false;
    }

    public static function logout(){
        Session::flush();
    }
/**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        // TODO: Implement getReminderEmail() method.
	return $this->email;
    }
/**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
	return $this->password;
    }
    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
<<<<<<< HEAD

        return $this->remember_token;
=======
	return $this->remember_token;
>>>>>>> fc21e7b75f4613e0a2bbf77188dc8a2c8fb03657

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
<<<<<<< HEAD
        $this->remember_token = $value;
        $this->save();
        //var_dump($this);
=======
	 $this->remember_token = $value;
>>>>>>> fc21e7b75f4613e0a2bbf77188dc8a2c8fb03657
    }
    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
	
	return "remember_token";
    }
 /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
       return $this->getKey();
    }

}
