<?php
class UserController extends Controller{
	public function getDangNhap(){
		return View::make('dang-nhap');
	}

	public function postDangNhap(){
		echo "user: ".Input::get('username');
		echo "<br> pass: ".Input::get('password');
	}

	public function getDetail($name1,$name2){
		echo "string".$name1.'-'.$name2;
	}

	public function start(){
		return View::make('hello');
	}
	// public function check(){
	// 	if (!Session::has('user') 
	// 		return Redirect::to('/');
		
	// }
}