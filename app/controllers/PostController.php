<?php
class PostController extends \BaseController {
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

<<<<<<< HEAD
        $post = Post::all();//->toJson();
=======
        //$post = Post::all()->toJson();
>>>>>>> b9d25ade8fc3a270431a9da96f872fef67395913
        //$count = Post::count();
//        $demo = $this->getPostByTag("smile");
//        //$demo = $this->getPostByTag("love");
//        $userName = 'NhuanTD';
        return View::make("Post/index",
            [
                'posts'=>$post,
                //'count'=>$count,
            ]);
        //return View::make('Post/index',[]);
        //print_r(Post::getCommentsOfPost(1));
<<<<<<< HEAD
        //print_r(Post::countComment("54f86f11f7839ee808000029"));
=======
        print_r(Post::countComment("54f86f11f7839ee808000029"));
>>>>>>> b9d25ade8fc3a270431a9da96f872fef67395913
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
<<<<<<< HEAD

        $result = Auth::check();
	    if($result)
		    return View::make('Post/createPost');
	    else return Redirect::to('/login');
=======
	   $result = Auth::check();
	   if($result)				       	 
		return View::make('Post/createPost');
	   else return Redirect::to('/login');		
>>>>>>> b9d25ade8fc3a270431a9da96f872fef67395913
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
<<<<<<< HEAD
        $post->author_id = Auth::id();
        $post->tags = $tags;
		$result = $post->save();
=======
        $post->author_id = Session::get('user_id');
        $post->tags = $tags;
		$result = $post->save();
//        echo $title;
>>>>>>> b9d25ade8fc3a270431a9da96f872fef67395913
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
