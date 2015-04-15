@extends('home.layout.first')
@section('head')
<div class="col-md-1"></div>
	<div class="col-md-2">
		<span class="word-top"> Imagine</span>
	</div>
<div class="col-md-3"></div>
<div class="col-md-6">
	<ul class="nav navbar-nav">
		<li class="active"><a href="">Home</a></li>
		<li><a href="">Post</a></li>
		<li><a href="">Contact</a></li>
		<li><a href="">About</a></li>
		<li><a href="">Tags</a></li>
		<li><a href="">{{Auth::user()->username}}</a></li>
	</ul>
</div>
@stop