<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lecture;

use App\File;

class LectureController extends Controller
{
         //show form to create post
    public function create()
    {
    	$courses = Course::orderBy('created_at', 'DESC')->get();
    	return view('cms.lecture.create_lecture', compact('courses'));
    }


    //save post
    public function save(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required|min:6',
    		'course'   => 'required'
    	]);

    	// dd($request);

    	$post = new Lecture;
    	$post->title = $request->title;
    	$post->description = $request->description;
    	$post->course_id  = decrypt($request->course);
        $post->save();

        return back()->with('successMsg', 'Lecture is created successfully!');
     }

     //list posts
     public function list($id)
     {
        $lectures = Lecture::orderBy('created_at', 'DESC')->where('course_id', decrypt($id))->paginate(2);

        return view('cms.lecture.list_lectures', compact('lectures'));
     }

     //delete
     public function delete($id)
     {
        $id = decrypt($id);

        $post = Lecture::find($id);
        $post->delete();

        return back()->with('successMsg', 'Deleted successfully!');
     }


     //update
     public function update($id)
     {
        $id = decrypt($id);

        $lecture = Lecture::find($id);

        $update =true;
        $courses = Course::orderBy('created_at', 'DESC')->get();
        return view('cms.lecture.create_lecture', compact('lecture', 'update', 'courses'));
     }


     //edit
     public function edit(Request $request)
     {

        	$this->validate($request, [
    		'title' => 'required|min:6',
    		'course'   => 'required'
    	]);

    	// dd($request);

    	$post =Lecture::findOrFail(decrypt($request->lecture_id));

    	$post->title = $request->title;
    	$post->description = $request->description;
    	$post->course_id  = decrypt($request->course);
        $post->update();

        return back()->with('successMsg', 'Lecture is updated successfully!');
     }


     //show details
     public function show_details($id)
     {
        $lecture = Lecture::findOrFail(decrypt($id));
        $isDetails = true;

        return view('cms.lecture.list_lectures', compact('lecture', 'isDetails'));
     }

     //add new file
     public function add_file(Request $request)
     {
        $this->validate($request, [
            'title' => 'required',
            'file'   => 'mimes:doc,pdf,docx,zip,image',
            'lecture_id' => 'required'
        ]);


        // dd($request);

        $lec_file = new File;
        $lec_file->title = $request->title;
        $file = $request->file('file');
        $lec_file->lecture_id = decrypt($request->lecture_id);

        $fileExtension = $file->getClientOriginalExtension();
        $dbPath = "/files/lecture/".time().'.'.$fileExtension;
        $file->move(public_path("/files/lecture/"), $dbPath);
        $lec_file->file = $dbPath;

        $lec_file->save();

        return back()->with('successMsg', 'File is added successfully!');
       

     }
}
