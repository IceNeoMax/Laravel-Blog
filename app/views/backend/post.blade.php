@extends('backend.layout.master')
@section('listing')
<script>
    console.log();
</script>
<div class="row">
    <div class="col-lg-12">
      	<h2>Posts &nbsp;<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><a target="_blank" href="{{URL::to('post/create')}}">New Post</a></button></h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                  	<tr>
                        <th><input type="checkbox"></th>
                        <th>Tiêu đề</th>
                        <th>Loại</th>
                        <th>Người đăng</th>
                        <!-- <th>Like</th>-->
                        <th>Comment</th>
                        <!-- <th>Lượt xem</th>-->
                        <th>Ngày đăng</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr id="tr{{$post['_id']}}">
                        <td><input type="checkbox"></td>
                        <td>
                        	<p>{{$post->title}}</p>
                        	<ul class="list-inline">
                    			<li><a target="_blank" href='{{URL::to('post/update/'.$post['_id'])}}'>Chỉnh sửa</a></li>
                    			<li><a target="_blank" href='{{URL::to('post/'.$post['_id'])}}'>Xem</a></li>
                    			<li><a target="_blank" href=''>Chia sẻ</a></li>
                    			<li><a id="delete" href='' onclick="Event.preventDefault();deletePost('{{$post['_id']}}')">Xóa</a></li>
                			</ul>
                        </td>
                        @if($post["type"]=="Draft")
                        <td>Bản nháp</td>
                        @else
                        <td>Bản chính</td>
                        @endif
                        <td><span>{{$post->username}}</span></td>
                        <td>{{$post["commentCount"]}}</td>
                        <td>@if(isset($post->updated_at))
                          {{$post->updated_time}}
                        @endif</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function deletePost(id)
    {
        $.ajax(
        {
            url:"{{URL::to('post/delete/')}}/id",
            type:"GET",
            success: function(data)
            {
                if(data.success==1)
                {
                    var name = "tr"+id;
                    $(name).remove();
                }
            }
        });
    }
</script>
@stop