<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    //doLogin
    public function doLogin(Request $request)
    {
    	$this->validate($request, [
    		'username'=> 'required|min:4',
    		'password' => 'required|min:6'
    	]);

    	$username= $request->username;
    	$password = $request->password;

    	// dd($request);

    	if(Auth::attempt(['username' => $username, 'password' => $password , 'isActive'=>1])){
    		return redirect()->route('home');
    	}

    	return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }








    //show form to create post
    public function create()
    {
        return view('cms.user.create_user');
    }


    //save post
    public function save(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|min:4|unique:users',
            'password' => 'required|min:6',           
        ]);

         //dd($request);

        $post = new User;
        $post->firstname = $request->firstname;
        $post->lastname = $request->lastname;
        $post->username =$request->username;
        $post->password  = bcrypt($request->password);



        $post->save();

        return back()->with('successMsg', 'User is created successfully!');
     }

     //list posts
     public function list()
     {
        $users = User::orderBy('created_at', 'DESC')->where('id','<>',Auth::user()->id)->paginate(2);

        return view('cms.user.list_users', compact('users'));
     }

     //delete
     public function delete($id)
     {
        $id = decrypt($id);

        $post = User::find($id);
        $post->delete();

        return back()->with('successMsg', 'Deleted successfully!');
     }


     //update
     public function update($id)
     {
        $id = decrypt($id);

        $user = User::find($id);

        $update =true;

        return view('cms.user.create_user', compact('user', 'update'));
     }


     //edit
     public function edit(Request $request)
     {

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|min:4',
            'password' => 'required|min:6', 
            'user_id'  =>'required'          
        ]);

         //dd($request);

        $post =  User::findOrFail(decrypt($request->user_id));
        $post->firstname = $request->firstname;
        $post->lastname = $request->lastname;
        $post->username =$request->username;
        $post->password  = bcrypt($request->password);



        $post->update();

        return back()->with('successMsg', 'User is updated successfully!');
     }
}
