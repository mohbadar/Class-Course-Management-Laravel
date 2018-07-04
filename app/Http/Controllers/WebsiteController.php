<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Course;
use App\Lecture;
use App\Subscriber;

class WebsiteController extends Controller
{
    //index
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->where('type', 'announcement')->limit(5)->get();

        $articles = Post::orderBy('created_at', 'DESC')->where('type', 'article')->limit(5)->get();

        $courses = Course::orderBy('year', 'DESC')->limit(5)->get();
    	return view('website.index', ['posts' => $posts, 'courses' =>$courses, 'articles' => $articles]);
    }

    //show login form
    public function showLoginForm()
    {
    	return view('website.login');
    }

    //post_details
    public function post_details($id)
    {
        $id = decrypt($id);

        $post = Post::findOrFail($id);

        return view('website.post', compact('post'));
    }


    //list announcements
    public function list_announcements()
    {
        $posts = Post::orderBy('created_at', 'DESC')->where('type', 'announcement')->paginate(2);

        return view('website.post',compact('posts'));
    }

    //articles

    public function articles()
    {
        $posts = Post::orderBy('created_at', 'DESC')->where('type', 'article')->paginate(2);
        $isArticle = true;

        return view('website.post',compact('posts', 'isArticle'));
    }


    //course details
    public function course_details($id)
    {
        $id = decrypt($id);

        $course = Course::findOrFail($id);
        $lectures = Lecture::where('course_id', $id)->get();

        return view('website.course', compact('course', 'lectures'));
    }

    //list courses
    public function list_courses_web()
    {
        $courses = Course::orderBy('created_at', 'DESC')->paginate(2);

        return view('website.course', compact('courses'));

    }


    //lecture_details
    public function lecture_details($id)
    {
        $id = decrypt($id);

        $lecture = Lecture::findOrFail($id);

        return view('website.lecture', compact('lecture'));
    }

    //subscribe
    public function subscribe()
    {
        return view('website.subscriber');
    }

    //subscriber_register
    public function subscriber_register(Request $request){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|unique:subscribers',
            'year'  => 'required',
            'semester' => 'required'
        ]);


        // dd($request);

        $sub = new Subscriber;
        $sub->firstname = $request->firstname;
        $sub->lastname = $request->lastname;
        $sub->email = $request->email;
        $sub->phone = $request->phone;
        $sub->year = $request->year;
        $sub->semester = $request->semester;
        $sub->bio=$request->bio;
        $sub->save();

        return back()->with('successMsg', 'Congradualations! You are added to our community.');
    }
}
