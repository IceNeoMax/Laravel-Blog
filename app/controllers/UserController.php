<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *tested
	 * @return Response
	 */
	public function index()
	{
		//
        $users= User::all();
        //print_r($users);
//        foreach($users as $user)
//        {
//            echo '<br>';
//            echo $user['user_name'];
//        }
        return $users;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return $this->login();

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		//create a folder
        $user = new User;
        $userName = Input::get('userName');
        //Ma hoa password truoc khi luu vao db
        $password = Input::get('password');
        $hashPassword = Hash::make($password);
        $description = Input::get('description') or ("");
        $email = Input::get('email');
        $valid = User::checkValidEmail($email);
        if(!$valid) return false;
        //Luu thong tin
        $user->userName = $userName;
        $user->password = $hashPassword;
        $user->description = $description;
        $user->email = $email;
        //$user->save();
        //Tao thu muc dua theo ten cua userName
        $folderName =  str_replace(" ","",$userName);
        //$success = File::copyDirectory(defaultFolder,$folderName);
        //return $success;

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
        return User::where('_id',$id);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
     * tested
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
     * tested
	 */
	public function destroy($id)
	{
        $user = User::where('_id',$id)->delete();
        return $user;
	}
    /*
     * Login to website
     * tested
     */
    public function login()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        //print_r($this->destroy('54faa3287fd3630f1a47bb09'));
        //print_r(User::checkValidEmail($userName));
        $result =  User::login($email,$password);
        if($result == true)
            Redirect::to('/post/index');
    }

}
