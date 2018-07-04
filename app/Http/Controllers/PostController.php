<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    //show form to create post
    public function create()
    {
    	return view('cms.post.create_post');
    }


    //save post
    public function save(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required|min:6',
    		'content' => 'required|min:10',
    		'file'   => 'mimes:doc,pdf,docx,zip,image'
    	]);

    	// dd($request);

    	$post = new Post;
        $post->type = $request->type;
    	$post->title = $request->title;
    	$post->content = $request->content;
    	$post->file_type =$request->filetype;
    	$post->user_id  = Auth::user()->id;


    	$file = $request->file('file');



        if($file){
            $fileExtension = $file->getClientOriginalExtension();
            $dbPath = "/files/posts/".time().'.'.$fileExtension;
            $file->move(public_path("/files/posts/"), $dbPath);
            $post->file = $dbPath;
        }

        $post->save();

        return back()->with('successMsg', 'Post is created successfully!');
     }

     //list posts
     public function list()
     {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(2);

        return view('cms.post.list_post', compact('posts'));
     }

     //delete
     public function delete($id)
     {
        $id = decrypt($id);

        $post = Post::find($id);
        $post->delete();

        return back()->with('successMsg', 'Deleted successfully!');
     }


     //update
     public function update($id)
     {
        $id = decrypt($id);

        $post = Post::find($id);

        $update =true;

        return view('cms.post.create_post', compact('post', 'update'));
     }


     //edit
     public function edit(Request $request)
     {

        $this->validate($request, [
            'title' => 'required|min:6',
            'content' => 'required|min:10',
            'file'   => 'mimes:doc,pdf,docx,zip,image'
        ]);

        // dd($request);

        $id = decrypt($request->post_id);

        $post = Post::find($id);
        $post->type = $request->type;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->file_type =$request->filetype;
        $post->user_id  = Auth::user()->id;


        $file = $request->file('file');



        if($file){
            $fileExtension = $file->getClientOriginalExtension();
            $dbPath = "/files/posts/".time().'.'.$fileExtension;
            $file->move(public_path("/files/posts/"), $dbPath);
            $post->file = $dbPath;
        }

        $post->update();

        return back()->with('successMsg', 'Post is updated successfully!');

     }
}
