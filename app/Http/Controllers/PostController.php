<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }

    public function addPost(){
        return view('add-post');
    }

    public function addPostSubmit(Request $request){
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_created', 'Post Has Been Created Successfully!');
    }

    public function getPostById($id){
        $post = DB::table('posts')->where('id', $id)->first();
        return view('single-post', compact('post'));
    }

    public function deletePost($id){
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'Post Has Been Deleted Sucessfully');
    }

    public function editPost($id){
        $post = DB::table('posts')->where('id', $id)->first();
        return view('edit-post', compact('post'));
    }
    public function updatePost(Request $request){
        DB::table('posts')->where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_updated', 'Post Has Been Deleted Sucessfully');
    }
    public function innerJoinCaluse(){
        $request = DB::table('users')
                       ->join('posts', 'users.id', '=', 'posts.user_id')
                       ->select('users.name', 'posts.title', 'posts.body')
                       ->get();
        return $request;
    }
    public function leftJoinCaluse(){
        $request = DB::table('users')
                       ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
                       ->get();
        return $request;
    }
    public function rightJoinCaluse(){
        $request = DB::table('users')
                       ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
                       ->get();
        return $request;
    }
    public function getAllPostsUsingModel(){
            $post = Post::all();
            return $post;
    }


}
