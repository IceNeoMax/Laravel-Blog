<?php
class PostController extends \BaseController {
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $posts = Post::all();
        //$count = Post::count();
//        $demo = $this->getPostByTag("smile");
//        //$demo = $this->getPostByTag("love");
//        $userName = 'NhuanTD';
//        /*return View::make("Post/indexPost",
//            [
//                //'post'=>$post,
//                //'count'=>$count,
//                'userName'=>$userName,
//                'demo'=>$demo,
//            ]);*/
//        return View::make('Post/createPost');
        //print_r(Post::getCommentsOfPost(1));
        //print_r(Post::countComment("54f86f11f7839ee808000029"));
        return View::make('Post/indexPost',['posts'=>$posts]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        return View::make('Post/createPost');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $title = Input::get('title');
        $content= Input::get('content');
        $author_id = Session::get('user_name');
        $tags = explode(",",Input::get('tags'));
        $post = new Post();
        $post->title=$title;
        $post->content=$content;
        $post->author_id = Session::get('user_id');
        $post->tags = $tags;
		$result = $post->save();
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
        $post = Post::where('_id',$id)->get();
        //print_r($post);
        return View::make("Post/post",["posts"=>$post]);
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

}
