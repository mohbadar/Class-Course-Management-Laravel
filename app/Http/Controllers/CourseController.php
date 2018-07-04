<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Auth;

class CourseController extends Controller
{
        //show form to create post
    public function create()
    {
    	return view('cms.course.create_course');
    }


    //save post
    public function save(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required|min:6',
   
    		'year'   => 'int'
    	]);

    	// dd($request);

    	$post = new Course;
    	$post->title = $request->title;
    	$post->description = $request->description;
    	$post->year =$request->year;
    	$post->user_id  = Auth::user()->id;

        $post->save();

        return back()->with('successMsg', 'Course is created successfully!');
     }

     //list posts
     public function list()
     {
        $courses = Course::orderBy('created_at', 'DESC')->paginate(2);

        return view('cms.course.list_course', compact('courses'));
     }

     //delete
     public function delete($id)
     {
        $id = decrypt($id);

        $post = Course::find($id);
        $post->delete();

        return back()->with('successMsg', 'Deleted successfully!');
     }


     //update
     public function update($id)
     {
        $id = decrypt($id);

        $course = Course::find($id);

        $update =true;

        return view('cms.course.create_course', compact('course', 'update'));
     }


     //edit
     public function edit(Request $request)
     {

    	$this->validate($request, [
    		'title' => 'required|min:6',
   
    		'year'   => 'int'
    	]);

    	// dd($request);

    	$post =Course::findOrFail(decrypt($request->course_id));
    	$post->title = $request->title;
    	$post->description = $request->description;
    	$post->year =$request->year;
    	$post->user_id  = Auth::user()->id;

        $post->update();

        return back()->with('successMsg', 'Course is updated successfully!');

     }
}
