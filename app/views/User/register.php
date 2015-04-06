<?php
/**
 * Created by PhpStorm.
 * User: Nhuan
 * Date: 3/13/2015
 * Time: 9:23 PM
 */
echo Form::open(array(
    'url'=>'user',
));
echo Form::text('email');
echo Form::text('password');
echo Form::submit('Submit');