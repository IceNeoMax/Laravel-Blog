<?php
define('defaultFolder','default');
class UserController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//create a folder

        $userName = Input::get('userName');
        $user = User::where('userName','=',$userName)->first();
        if(isset($user)) return false;
        //Ma hoa password truoc khi luu vao db
        $password = Input::get('password');
        $hashPassword = Hash::make($password);
        $description = Inputt::get('description') or ("");
        $email = Input::get('email');
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
        return User::all()->toJson();
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
        $user = User::find($id)->toJson();
        return $user;
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
	 */
	public function destroy($id)
	{
		//
	}

    /**
     * Login to user
     */
    public function login()
    {
        $userName = Input::get('userName');
        $password = Input::get('password');
        if(!$userName)
            return View::make('login');
        if($userName=="admin"&&$password!=null)
        {
            return View::make('Theme/index');
        }
        else return "You cannot access!!!";
    }
}
