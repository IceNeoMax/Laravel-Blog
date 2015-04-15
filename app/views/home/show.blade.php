@include('home.header')
@stop
@extends('home.layout.first')
@section('script')
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
<script src="{{ URL::asset('assets/js/comment/app.js') }}"></script>
<script src="{{ URL::asset('assets/js/comment/controller/mainCtrl.js') }}"></script>
<script src="{{ URL::asset('assets/js/comment/service/commentService.js') }}"></script>
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
<div ng-app="commentApp" ng-controller="mainController">
<b>Comment List:</b><br>
    <div ng-repeat = "comment in comments">
                        <img src="https://googledrive.com/host/0B8z8ereLRdjhZ1lCSEdvVVRHV00" class="img-circle" style="margin-right:10px; width:10%; height:10%">
                        <b><% comment.username %></b>
                        <p><% comment.content %></p>
                        <a href="#" ng-hide="!comment.owner" ng-click="deleteComment(comment._id,$index);$event.preventDefault(); $event.stopPropagation();">Delete</a>
     </div>
<hr>
<form  ng-submit = "submitComment()">
    <div class="form-group" >
        <label for="content" class="control-label">Comment:</label>
        <textarea name = "content" ng-model = "commentData.content" id="comment" class="form-control" rows="4" placeholder="Write a comment"></textarea>
    </div>
    <div class="form-group">
        .<button type="submit" class="btn btn-primary btn-lg">Post</button>
    </div>
</form>

</div>
@stop