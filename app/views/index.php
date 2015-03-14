<?php

$data = array(
    'email'=>'tranducnhuan1994@gmail.com',
    'password'=>'nhuan');

$rules = array(
    'email'=>'required | unique',
    'password'=>'required',
);

//echo Hash::make('123456789');
//print_r($result);
//if($result) echo "Nhuan";
var_dump(Auth::attempt($data));
var_dump(Auth::check());