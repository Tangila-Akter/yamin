<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\SslCommerzPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user.home');
// });
// SSLCOMMERZ Start
Route::post('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/redirects', [HomeController::class, 'redirects']);
Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/cart/{id}', [HomeController::class, 'cart']);
Route::get('/remove/{id}', [HomeController::class, 'remove']);

// NavbarController
Route::get('/user_home', [NavbarController::class, 'user_home']);
Route::get('/user_course', [NavbarController::class, 'user_course']);
Route::get('/user_coursedetails/{id}', [NavbarController::class, 'user_coursedetails']);
Route::get('/user_service', [NavbarController::class, 'user_service']);
Route::get('/user_team', [NavbarController::class, 'user_team']);
Route::get('/user_teacher', [NavbarController::class, 'user_teacher']);
Route::get('/user_student', [NavbarController::class, 'user_student']);
Route::get('/user_contact', [NavbarController::class, 'user_contact']);
Route::get('/user_dashboard', [NavbarController::class, 'user_dashboard']);
Route::post('/upload_contact', [HomeController::class, 'upload_contact']);

// AdminController

Route::middleware(['auth'])->group(function () {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin/home');
        })->name('dashboard');
    });

    Route::get('/admin_register', [AdminController::class, 'admin_register']);
    Route::get('/admin_Online_Course', [AdminController::class, 'admin_Online_Course']);
    Route::get('/admin_Offline_Course', [AdminController::class, 'admin_Offline_Course']);
    Route::get('/admin_Video_Course', [AdminController::class, 'admin_Video_Course']);
    Route::get('/admin_management_team', [AdminController::class, 'admin_management_team']);
    Route::get('/admin_Service1', [AdminController::class, 'admin_Service1']);
    Route::get('/admin_Student_Consulting', [AdminController::class, 'admin_Student_Consulting']);
    Route::get('/admin_Video_Course', [AdminController::class, 'admin_Video_Course']);
    Route::get('/admin_management_team', [AdminController::class, 'admin_management_team']);
    Route::get('/admin_Student_Consulting', [AdminController::class, 'admin_Student_Consulting']);
    Route::get('/admin_Support_Team', [AdminController::class, 'admin_Support_Team']);
    Route::get('/admin_Web_Team', [AdminController::class, 'admin_Web_Team']);
    Route::get('/admin_All_Teacher', [AdminController::class, 'admin_All_Teacher']);
    Route::get('/admin_Success_Student', [AdminController::class, 'admin_Success_Student']);
    Route::get('/admin_order', [AdminController::class, 'order']);
    Route::get('/admin_contact', [AdminController::class, 'admin_contact']);

    // admin route
    Route::post('/admin_upload', [AdminController::class, 'admin_upload']);
    Route::get('/deleteadmin/{id}', [AdminController::class, 'deleteadmin']);

    Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
    Route::post('/uploadOnline_Course', [AdminController::class, 'uploadOnline_Course']);
    Route::get('/deleteOnline_Course/{id}', [AdminController::class, 'deleteOnline_Course']);
    Route::get('/updateOnline_Course/{id}', [AdminController::class, 'updateOnline_Course']);
    Route::post('/update_Online_Course/{id}', [AdminController::class, 'update_Online_Course']);
    Route::post('/uploadOffline_Course', [AdminController::class, 'uploadOffline_Course']);
    Route::get('/deleteOffline_Course/{id}', [AdminController::class, 'deleteOffline_Course']);
    Route::get('/updateOffline_Course/{id}', [AdminController::class, 'updateOffline_Course']);
    Route::post('/update_Offline_Course/{id}', [AdminController::class, 'update_Offline_Course']);
    Route::post('/uploadVideo_Course', [AdminController::class, 'uploadVideo_Course']);
    Route::get('/deleteVideo_Course/{id}', [AdminController::class, 'deleteVideo_Course']);
    Route::get('/updateVideo_Course/{id}', [AdminController::class, 'updateVideo_Course']);
    Route::post('/update_Video_Course/{id}', [AdminController::class, 'update_Video_Course']);
    Route::post('/uploadmanagement_team', [AdminController::class, 'uploadmanagement_team']);
    Route::get('/deletemanagement_team/{id}', [AdminController::class, 'deletemanagement_team']);
    Route::get('/updatemanagement_team/{id}', [AdminController::class, 'updatemanagement_team']);
    Route::post('/update_management_team/{id}', [AdminController::class, 'update_management_team']);
    Route::post('/uploadStudent_Consulting', [AdminController::class, 'uploadStudent_Consulting']);
    Route::get('/deleteStudent_Consulting/{id}', [AdminController::class, 'deleteStudent_Consulting']);
    Route::get('/updateStudent_Consulting/{id}', [AdminController::class, 'updateStudent_Consulting']);
    Route::post('/update_Student_Consulting/{id}', [AdminController::class, 'update_Student_Consulting']);
    Route::post('/uploadSupport_Team', [AdminController::class, 'uploadSupport_Team']);
    Route::get('/deleteSupport_Team/{id}', [AdminController::class, 'deleteSupport_Team']);
    Route::get('/updateSupport_Team/{id}', [AdminController::class, 'updateSupport_Team']);
    Route::post('/update_Support_Team/{id}', [AdminController::class, 'update_Support_Team']);
    Route::post('/uploadWeb_Team', [AdminController::class, 'uploadWeb_Team']);
    Route::get('/deleteWeb_Team/{id}', [AdminController::class, 'deleteWeb_Team']);
    Route::get('/updateWeb_Team/{id}', [AdminController::class, 'updateWeb_Team']);
    Route::post('/update_Web_Team/{id}', [AdminController::class, 'update_Web_Team']);
    Route::post('/uploadAll_Teacher', [AdminController::class, 'uploadAll_Teacher']);
    Route::get('/deleteAll_Teacher/{id}', [AdminController::class, 'deleteAll_Teacher']);
    Route::get('/updateAll_Teacher/{id}', [AdminController::class, 'updateAll_Teacher']);
    Route::post('/update_All_Teacher/{id}', [AdminController::class, 'update_All_Teacher']);
    Route::post('/uploadSuccess_Student', [AdminController::class, 'uploadSuccess_Student']);
    Route::get('/deleteSuccess_Student/{id}', [AdminController::class, 'deleteSuccess_Student']);
    Route::get('/updateSuccess_Student/{id}', [AdminController::class, 'updateSuccess_Student']);
    Route::post('/update_Success_Student/{id}', [AdminController::class, 'update_Success_Student']);
    Route::get('/deleteSuccess_Student/{id}', [AdminController::class, 'deleteadmin_contact']);
    Route::post('/uploadadmin_Service', [AdminController::class, 'uploadadmin_Service']);
    Route::get('/deleteadmin_Service/{id}', [AdminController::class, 'deleteadmin_Service']);
    Route::get('/updateadmin_Service/{id}', [AdminController::class, 'updateadmin_Service']);
    Route::post('/update_admin_Service/{id}', [AdminController::class, 'update_admin_Service']);
    Route::get('/updateprofile_update/{id}', [NavbarController::class, 'updateprofile_update']);
    Route::post('/profile_update/{id}', [NavbarController::class, 'profile_update']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
