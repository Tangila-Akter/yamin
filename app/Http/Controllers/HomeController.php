<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Online_Course;
use App\Models\Offline_Course;
use App\Models\Video_Course;
use App\Models\Contact;
use App\Models\Cart;

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
    public function index()
    {
        if (Auth::id()) {
            return redirect('redirects');
        } else {
            $data = online_Course::where('course_type', 'Online Course')->get();
        }
        $data1 = online_Course::where('course_type', 'Offline Course')->get();
        $data2 = online_Course::where('course_type', 'Video Course')->get();

        return view('user.home', compact('data', 'data1', 'data2'));
    }

    public function redirects()
    {
        $data = online_Course::where('course_type', 'Online Course')->get();
        $data1 = online_Course::where('course_type', 'Offline Course')->get();
        $data2 = online_Course::where('course_type', 'Video Course')->get();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.home', compact('data', 'data1', 'data2'));
        } else {
            $data = online_Course::where('course_type', 'Online Course')->get();
        }
        $data1 = online_Course::where('course_type', 'Offline Course')->get();
        $data2 = online_Course::where('course_type', 'Video Course')->get();
        $user_id = Auth::Id();
        $count = cart::where('user_id', $user_id)->count();

        return view('user.home', compact('data', 'data1', 'data2', 'count'));
    }

    public function upload_contact(Request $request)
    {
        $data = new contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->course_name = $request->course_name;
        $data->course_type = $request->course_type;
        $data->message = $request->message;

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
            $data->course_id = Auth::online_course()->id;
        }
        $data->save();

        return redirect()->back();
    }

    public function Online_Course_details($id)
    {
        $data = online_Course::find($id);

        return view('user.Online_Course_details', compact('data'));
    }

    //-------------cart start----------------
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::Id();
            $online_course_id = $id;
            $cart = new cart();
            $cart->user_id = $user_id;
            $cart->online_course_id = $online_course_id;
            $cart->save();

            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function cart(Request $request, $id)
    {
        if (Auth::id() == $id) {
            $count = cart::where('user_id', $id)->count();
            $data2 = cart::select('*')->where('user_id', '=', $id)->get();
            $data = cart::where('user_id', $id)->join('online__courses', 'carts.online_course_id', '=', 'online__courses.id')->get();

            return view('user.cart', compact('count', 'data', 'data2'));
        } else {
            return redirect()->back();
        }
    }

    public function remove($id)
    {
        $data = cart::find($id);
        $data->delete();

        return redirect()->back();
    }

    //-------------cart end----------------
}
