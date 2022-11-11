<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Online_Course;
use App\Models\Offline_Course;
use App\Models\Video_Course;
use App\Models\Management_Team;
use App\Models\Student_Consulting;
use App\Models\Support_Team;
use App\Models\Web_Team;
use App\Models\All_Teacher;
use App\Models\Success_Student;
use App\Models\Contact;
use App\Models\admin_Service;
class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }
    // public function redirect()
    // {
    //     if(Auth::id())
    //     {
            
    //         if(Auth::user()->usertype=='0')
    //         {
    //             $data=online_Course::all();
    //     $data1=offline_Course::all();
    //     $data2=video_Course::all();
    //             return view('user.home',compact("data", "data1", "data2")); 
    //         }
    //         else
    //         {
    //             return view('admin.home');
    //         }
    //     }
    //     else
    //     {
    //         return redirect()->back();
    //     }
    // }
    public function index(){
        if(Auth::id())
        {
            return redirect('redirects');
        }
        else
        $data=online_Course::all();
        $data1=offline_Course::all();
        $data2=video_Course::all();

        return view('user.home',compact("data", "data1", "data2"));
    }
   
    
    public function redirects(){
        $data=online_Course::all();
        $data1=offline_Course::all();
        $data2=video_Course::all();
        $usertype= Auth::user()->usertype;
        if($usertype =='1')
        {
            return view('admin.home',compact("data", "data1", "data2"));
        }
        else
        $data=online_Course::all();
        $data1=offline_Course::all();
        $data2=video_Course::all();

        return view('user.home',compact("data", "data1", "data2"));
        
    }
    public function upload_contact(Request $request){
        $data = new contact;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->course_name=$request->course_name;
        $data->course_type=$request->course_type;
        $data->message=$request->message;
        
        if(Auth::id())
        {
           
            $data->user_id=Auth::user()->id;
            $data->course_id=Auth::online_course()->id;
        }
        $data->save();
        return redirect()->back();
    }
    public function Online_Course_details($id)
     {
          $data=online_Course::find($id);
         return view("user.Online_Course_details",compact("data"));
     }

}
