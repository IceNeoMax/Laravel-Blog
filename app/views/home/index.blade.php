@include('home.header')
@stop
@extends('home.layout.first')
@section('listing')
@foreach($posts as $post)
<div class="panel-heading">
		<h3 class="panel-title"><h2><a href="{{$post['_id']}}">{{$post->title}}</a></h2></h3>
</div>
<div>
		<p>Author: &nbsp; {{$post->username}} &nbsp; on {{$post->create_time}}</p>
</div>
<div class="panel-body">
			<img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-rounded" style=" margin-right:10px; width:30%; height:30%; float:left">
            <p>
                @if(strlen($post->content)<400)
                {{$post->content}}
                @else
                {{substr($post->content,0,400)}}
                @endif
            </p>
			<a href="{{$post['_id']}}" style="">Read More...</a>
</div>
<div class="panel-footer">
			<span>
			@foreach($post['tags'] as $key => $tag)
			    <a href="">{{$tag}} &nbsp;</a>
			@endforeach
			</span>
</div>
@endforeach
@stop