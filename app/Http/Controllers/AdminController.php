<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Online_Course;
use App\Models\Management_Team;
use App\Models\Student_Consulting;
use App\Models\Support_Team;
use App\Models\Web_Team;
use App\Models\All_Teacher;
use App\Models\Success_Student;
use App\Models\Contact;
use App\Models\admin_Service;
use App\Models\Cart;
class AdminController extends Controller
{
    public function admin_register()
    {
        $users = User::where('usertype','1')->get();
        $users1 = User::where('usertype','0')->get();
        // $data=User::all();
         return view('admin.register',compact("users", "users1"));
     }
     public function admin_upload(Request $request)
     {
         $user = new user;
          $user->name=$request->name;
          $user->phone=$request->phone;
          $user->email=$request->email;
          $user->usertype=$request->usertype;
          $user->password=Hash::make($request->password);
          $user->save();

  
          return redirect()->back(); 
     }
     public function deleteadmin($id)
     {
         $data=user::find($id);
         $data->delete();
         return redirect()->back();
     }
     public function deleteuser($id)
     {
         $data=user::find($id);
         $data->delete();
         return redirect()->back();
     }
     public function updateregister($id)
     {
          $data=user::find($id);
         return view("admin.updateregister",compact("data"));
     }

     public function update_updateregister(Request $request,$id)
     {
         $user=user::find($id);
         $user->name=$request->name;
          $user->phone=$request->phone;
          $user->email=$request->email;
         $user->save();
 
         return redirect()->back();
     }
     public function admin_Online_Course()
    {
        $data=online_Course::all();
         return view('admin.Online_Course',compact("data"));
     }

     public function uploadOnline_Course( Request $request)
     {
         $data = new online_Course;
         $image=$request->image;
          $imagename=time().'.'.$image->getClientOriginalExtension() ;
          $request->image->move('Online_Course',$imagename);
          $data->image=$imagename;
         $data->title=$request->title;
         $data->course_type=$request->course_type;
         $data->regular_fee=$request->regular_fee;
         $data->discount_fee=$request->discount_fee;
         $data->course_purpuse=$request->course_purpuse;
         $data->course_about=$request->course_about;
         $data->course_slybus=$request->course_slybus;
         $data->ins_name=$request->ins_name;
         $data->ins_details=$request->ins_details;

        //  $imageOne=$request->ins_image;
        //   $imageIns=time().'.'.$imageOne->getClientOriginalExtension() ;
        //   $request->imageOne->move('Online_Course',$imageIns);
        //   $data->imageOne=$imageIns;
        $img=$request->ins_image;
        $imgIns=time().'.'.$img->getClientOriginalExtension() ;
        $request->ins_image->move('ins',$imgIns);
        $data->ins_image=$imagename;

         $data->video_link=$request->video_link;
         $data->save();
 
         return redirect()->back();
     }
     public function deleteOnline_Course($id)
     {
         $data=online_Course::find($id);
         $data->delete();
         return redirect()->back();
     }
     public function updateOnline_Course($id)
     {
          $data=online_Course::find($id);
         return view("admin.updateOnline_Course",compact("data"));
     }

     public function update_Online_Course(Request $request,$id)
     {
         $data=online_Course::find($id);
         $image=$request->image;
          $imagename=time().'.'.$image->getClientOriginalExtension() ;
          $request->image->move('Online_Course',$imagename);
          $data->image=$imagename;
         $data->title=$request->title;
         $data->regular_fee=$request->regular_fee;
         $data->discount_fee=$request->discount_fee;
         $data->save();
 
         return redirect()->back();
     }

     public function admin_management_team()
     {
         $data=management_team::all();
          return view('admin.management_team',compact("data"));
      }
 
      public function uploadmanagement_team( Request $request)
      {
          $data = new management_team;
          $image=$request->image;
           $imagename=time().'.'.$image->getClientOriginalExtension() ;
           $request->image->move('management_team',$imagename);
           $data->image=$imagename;
           $data->title=$request->title;
          $data->Position=$request->Position;
          $data->Facebook=$request->Facebook;
          $data->YouTube=$request->YouTube;
          $data->Linkedin=$request->Linkedin;
  
          $data->save();
  
          return redirect()->back();
      }
      public function deletemanagement_team($id)
      {
          $data=management_team::find($id);
          $data->delete();
          return redirect()->back();
      }
      public function updatemanagement_team($id)
      {
           $data=management_team::find($id);
          return view("admin.updatemanagement_team",compact("data"));
      }
 
      public function update_management_team(Request $request,$id)
      {
          $data=management_team::find($id);
          $image=$request->image;
           $imagename=time().'.'.$image->getClientOriginalExtension() ;
           $request->image->move('management_team',$imagename);
           $data->image=$imagename;
           $data->title=$request->title;
          $data->Position=$request->Position;
          $data->Facebook=$request->Facebook;
          $data->YouTube=$request->YouTube;
          $data->Linkedin=$request->Linkedin;
          $data->save();
  
          return redirect()->back();
      }
      public function admin_Student_Consulting()
      {
          $data=Student_Consulting::all();
           return view('admin.Student_Consulting',compact("data"));
       }
       public function uploadStudent_Consulting( Request $request)
       {
           $data = new Student_Consulting;
           $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension() ;
            $request->image->move('Student_Consulting',$imagename);
            $data->image=$imagename;
            $data->title=$request->title;
            $data->Position=$request->Position;
            $data->Facebook=$request->Facebook;
            $data->YouTube=$request->YouTube;
            $data->Linkedin=$request->Linkedin;
   
           $data->save();
   
           return redirect()->back();
       }
       public function deleteStudent_Consulting($id)
       {
           $data=Student_Consulting::find($id);
           $data->delete();
           return redirect()->back();
       }
       public function updateStudent_Consulting($id)
       {
            $data=Student_Consulting::find($id);
           return view("admin.updateStudent_Consulting",compact("data"));
       }
  
       public function update_Student_Consulting(Request $request,$id)
       {
           $data=Student_Consulting::find($id);
           $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension() ;
            $request->image->move('Student_Consulting',$imagename);
            $data->image=$imagename;
            $data->title=$request->title;
            $data->Position=$request->Position;
            $data->Facebook=$request->Facebook;
            $data->YouTube=$request->YouTube;
            $data->Linkedin=$request->Linkedin;
           $data->save();
   
           return redirect()->back();
       }
       public function admin_Support_Team()
       {
           $data=Support_Team::all();
            return view('admin.Support_Team',compact("data"));
        }
   
        public function uploadSupport_Team( Request $request)
        {
            $data = new Support_Team;
            $image=$request->image;
             $imagename=time().'.'.$image->getClientOriginalExtension() ;
             $request->image->move('Support_Team',$imagename);
             $data->image=$imagename;
             $data->title=$request->title;
            $data->Position=$request->Position;
            $data->Facebook=$request->Facebook;
            $data->YouTube=$request->YouTube;
            $data->Linkedin=$request->Linkedin;
    
            $data->save();
    
            return redirect()->back();
        }
        public function deleteSupport_Team($id)
        {
            $data=Support_Team::find($id);
            $data->delete();
            return redirect()->back();
        }
        public function updateSupport_Team($id)
        {
             $data=Support_Team::find($id);
            return view("admin.updateSupport_Team",compact("data"));
        }
   
        public function update_Support_Team(Request $request,$id)
        {
            $data=Support_Team::find($id);
            $image=$request->image;
             $imagename=time().'.'.$image->getClientOriginalExtension() ;
             $request->image->move('Support_Team',$imagename);
             $data->image=$imagename;
             $data->title=$request->title;
            $data->Position=$request->Position;
            $data->Facebook=$request->Facebook;
            $data->YouTube=$request->YouTube;
            $data->Linkedin=$request->Linkedin;
            $data->save();
    
            return redirect()->back();
        }
        public function admin_Web_Team()
        {
            $data=Web_Team::all();
             return view('admin.Web_Team',compact("data"));
         }
    
         public function uploadWeb_Team( Request $request)
         {
             $data = new Web_Team;
             $image=$request->image;
              $imagename=time().'.'.$image->getClientOriginalExtension() ;
              $request->image->move('Web_Team',$imagename);
              $data->image=$imagename;
              $data->title=$request->title;
             $data->Position=$request->Position;
             $data->Facebook=$request->Facebook;
             $data->YouTube=$request->YouTube;
             $data->Linkedin=$request->Linkedin;
     
             $data->save();
     
             return redirect()->back();
         }
         public function deleteWeb_Team($id)
         {
             $data=Web_Team::find($id);
             $data->delete();
             return redirect()->back();
         }
         public function updateWeb_Team($id)
         {
              $data=Web_Team::find($id);
             return view("admin.updateWeb_Team",compact("data"));
         }
    
         public function update_Web_Team(Request $request,$id)
         {
             $data=Web_Team::find($id);
             $image=$request->image;
              $imagename=time().'.'.$image->getClientOriginalExtension() ;
              $request->image->move('Web_Team',$imagename);
              $data->image=$imagename;
              $data->title=$request->title;
             $data->Position=$request->Position;
             $data->Facebook=$request->Facebook;
             $data->YouTube=$request->YouTube;
             $data->Linkedin=$request->Linkedin;
             $data->save();
     
             return redirect()->back();
         }
         public function admin_All_Teacher()
         {
             $data=All_Teacher::all();
              return view('admin.All_Teacher',compact("data"));
          }
     
          public function uploadAll_Teacher( Request $request)
          {
              $data = new All_Teacher;
              $image=$request->image;
               $imagename=time().'.'.$image->getClientOriginalExtension() ;
               $request->image->move('All_Teacher',$imagename);
               $data->image=$imagename;
               $data->title=$request->title;
              $data->Position=$request->Position;
              $data->Facebook=$request->Facebook;
              $data->YouTube=$request->YouTube;
              $data->Linkedin=$request->Linkedin;
      
              $data->save();
      
              return redirect()->back();
          }
          public function deleteAll_Teacher($id)
          {
              $data=All_Teacher::find($id);
              $data->delete();
              return redirect()->back();
          }
          public function updateAll_Teacher($id)
          {
               $data=All_Teacher::find($id);
              return view("admin.updateAll_Teacher",compact("data"));
          }
     
          public function update_All_Teacher(Request $request,$id)
          {
              $data=All_Teacher::find($id);
              $image=$request->image;
               $imagename=time().'.'.$image->getClientOriginalExtension() ;
               $request->image->move('All_Teacher',$imagename);
               $data->image=$imagename;
               $data->title=$request->title;
              $data->Position=$request->Position;
              $data->Facebook=$request->Facebook;
              $data->YouTube=$request->YouTube;
              $data->Linkedin=$request->Linkedin;
              $data->save();
      
              return redirect()->back();
          }
          public function admin_Success_Student()
          {
              $data=Success_Student::all();
               return view('admin.Success_Student',compact("data"));
           }
      
           public function uploadSuccess_Student( Request $request)
           {
               $data = new Success_Student;
               $image=$request->image;
                $imagename=time().'.'.$image->getClientOriginalExtension() ;
                $request->image->move('Success_Student',$imagename);
                $data->image=$imagename;
                $data->title=$request->title;
               $data->Position=$request->Position;
               $data->Facebook=$request->Facebook;
               $data->YouTube=$request->YouTube;
               $data->Linkedin=$request->Linkedin;
       
               $data->save();
       
               return redirect()->back();
           }
           public function deleteSuccess_Student($id)
           {
               $data=Success_Student::find($id);
               $data->delete();
               return redirect()->back();
           }
           public function updateSuccess_Student($id)
           {
                $data=Success_Student::find($id);
               return view("admin.updateSuccess_Student",compact("data"));
           }
      
           public function update_Success_Student(Request $request,$id)
           {
               $data=Success_Student::find($id);
               $image=$request->image;
                $imagename=time().'.'.$image->getClientOriginalExtension() ;
                $request->image->move('Success_Student',$imagename);
                $data->image=$imagename;
                $data->title=$request->title;
               $data->Position=$request->Position;
               $data->Facebook=$request->Facebook;
               $data->YouTube=$request->YouTube;
               $data->Linkedin=$request->Linkedin;
               $data->save();
       
               return redirect()->back();
           }

           public function admin_contact()
          {
              $data=contact::all();
               return view('admin.admin_contact',compact("data"));
           }
           public function deleteadmin_contact($id)
           {
               $data=contact::find($id);
               $data->delete();
               return redirect()->back();
           }
           public function admin_Service1()
          {
              $data=admin_Service::all();
               return view('admin.admin_Service',compact("data"));
           }
           public function uploadadmin_Service( Request $request)
           {
               $data = new admin_Service;
               $image=$request->image;
                $imagename=time().'.'.$image->getClientOriginalExtension() ;
                $request->image->move('admin_Service',$imagename);
                $data->image=$imagename;
                $data->title=$request->title;
               $data->Details=$request->Details;       
               $data->save();
       
               return redirect()->back();
           }
           public function deleteadmin_Service($id)
           {
               $data=admin_Service::find($id);
               $data->delete();
               return redirect()->back();
           }
           public function updateadmin_Service($id)
           {
                $data=admin_Service::find($id);
               return view("admin.updateadmin_Service",compact("data"));
           }
      
           public function update_admin_Service(Request $request,$id)
           {
               $data=admin_Service::find($id);
               $image=$request->image;
                $imagename=time().'.'.$image->getClientOriginalExtension() ;
                $request->image->move('admin_Service',$imagename);
                $data->image=$imagename;
                $data->title=$request->title;
               $data->Details=$request->Details; 
               $data->save();
       
               return redirect()->back();
           }
           
}