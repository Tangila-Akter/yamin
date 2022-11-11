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

class NavbarController extends Controller
{
    public function user_home()
    {
        $data=online_Course::where('course_type','1')->get();
        $data1=online_Course::where('course_type','2')->get();
        $data2=online_Course::where('course_type','3')->get();
         return view('user.home',compact("data", "data1", "data2"));
     }
     public function user_course()
    {
        
        $data=online_Course::where('course_type','1')->get();
        $data1=online_Course::where('course_type','2')->get();
        $data2=online_Course::where('course_type','3')->get();
         return view('user.course',compact("data", "data1", "data2"));
     }
     public function user_service()
    {
        $data=admin_Service::all();
         return view('user.service',compact("data"));
     }
     public function user_team()
    {
        $data=management_team::all();
        $data1=Student_Consulting::all();
        $data2=Support_Team::all();
        $data3=Web_Team::all();
         return view('user.team',compact("data", "data1", "data2", "data3"));
     }
     public function user_teacher()
     {
        $data=All_Teacher::all();
          return view('user.teacher',compact("data"));
      }
      public function user_student()
     {
        $data=Success_Student::all();
          return view('user.student',compact("data"));
      }
      public function user_dashboard()
     {
        $data=user::all();
          return view('user.dashboard',compact("data"));
     }
      public function user_contact()
     {
        $data=contact::all();
          return view('user.contact',compact("data"));
      }
      public function user_coursedetails($id)
     {
        $data=online_Course::find($id);
       // dd($data);
          return view('user.course_details',compact("data"));
      }

}
