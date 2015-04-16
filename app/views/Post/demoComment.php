<?php
$user = User::find("552293d05ee69af003000029");
print_r($user);
var_dump(Auth::login($user));
var_dump(Auth::check());
echo Auth::user()->username;
?>