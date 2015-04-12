@include('home.header')
@stop
@extends('home.layout.first')
@section('listing')
<div class="panel-heading">
		<h3 class="panel-title"><h2><a href="post/{{$post['_id']}}">{{$post->title}}</a></h2></h3>
</div>
<div>
		<p>Author: &nbsp; {{$post->username}} &nbsp; on {{$post->create_time}}</p>
</div>
<div class="panel-body">
<img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:30%; height:30%; float:left">
{{$post->content}}
</div>
<div>
<b>Comment List:</b><br>

<img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-circle" style=" margin-right:10px; width:09%; height:15%; float:left">
<b>Nhuận Trần</b><br>
First demo
<hr>
<form action="#">
<div class="form-group" >
<br>
<label for="content" class="control-label">Comment:</label>
<input type="text" class="form-control input-lg" id="inputlg"
 name="title" id="title" required placeholder="Write a comment">
</div>
<div class="form-group">
.<btn class="btn btn-primary btn-lg">Post</btn>
</div>
</form>

</div>
@stop