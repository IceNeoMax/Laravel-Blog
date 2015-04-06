<?php

/**
 * Created by PhpStorm.
 * User: nhuan
 * Date: 20/02/2015
 * Time: 20:35
 */
class Post extends \Jenssegers\Mongodb\Model
{
    protected $collection="posts";
    public function convertToMongoDate($value)
    {
        return $this->fromDateTime($value);
    }
    /*
     * Find post by specific tag
     * @param string $tag
     * @return Post
     */
    public static function getPostByTag($tag)
    {
        $post = Post::where('tags',$tag)->get()->toJson();
        return $post;
    }
    /*
     * Get all comments and reply from the specific post
     * @param integer $post_id
     * @return Comment json
     */
    public static function getCommentsOfPost($post_id)
    {
        $comments = Post::where('post_id',$post_id)->get(array('comments'))->toJson();
        return $comments;
    }
    /*
     * Add a new comment to the specific post
     * @param integer $post_id
     * @return successful or not
     */
    public static function addCommentToPost($post_id,$comments)
    {
        $comments = array(array(
            'comment_id'=>1,
            'comment'=>'Imagination',
        ));
        $post = Post::where('post_id',$post_id)->update(array('comments'=>$comments));
    }
    /*
     * Count number of comments in the specific post
     */
    public static function countComment($post_id)
    {
        $post = Post::where('_id',$post_id)->get(array('comments'));
        $count = count($post);
        return $count;
    }
}