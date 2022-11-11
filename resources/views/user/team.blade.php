<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
</head>
<body>

 <header class="header">
   @include('user.navbar')
    
 </header>

<!-- Management Team -->
<div class="container">
    <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">Management</span> Team</h2>
    <div class="container" style="display: flex; flex-wrap: wrap;">
      @foreach ($data as $data)
      <div class="box">
       <div class="box1">
         <div class="box_item">
          <img src="management_team/{{ $data->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class=" card-title card-title0 center">{{ $data->title }}</h5><br>
            <p class="card-text card-title2" style="text-align:center;">{{ $data->Position }}</p>
            <p class="icon">
            <a href="{{ $data->Facebook }}"><i class='fab fa-facebook-f' style="margin: 2px;"></i></a>
            <a href="{{ $data->YouTube }}"><i class='fab fa-youtube' style="margin: 2px;"></i></a>
            <a href="{{ $data->Linkedin }}"><i class='fab fa-linkedin-in' style="margin: 2px;"></i></a>
            </p>
          </div>
         </div>
       </div>
     
      </div>
      @endforeach
    </div>

 </div>
 <br>
 
 <!-- Student Consulting Team -->
 <div class="container">
     <h2 class="main-title" style="text-align:center; margin-bottom: 18px;"><span style="color:#ff6810;">Student</span> Consulting Team</h2>
     <div class="container" style="display: flex; flex-wrap: wrap;">
      @foreach ($data1 as $data1)
      <div class="box">
       <div class="box1">
         <div class="box_item">
          <img src="Student_Consulting/{{ $data1->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class=" card-title card-title0 center">{{ $data1->title }}</h5><br>
            <p class="card-text card-title2" style="text-align:center;">{{ $data1->Position }}</p>
            <p class="icon">
            <a href="{{ $data1->Facebook }}"><i class='fab fa-facebook-f' style="margin: 2px;"></i></a>
            <a href="{{ $data1->YouTube }}"><i class='fab fa-youtube' style="margin: 2px;"></i></a>
            <a href="{{ $data1->Linkedin }}"><i class='fab fa-linkedin-in' style="margin: 2px;"></i></a>
            </p>
          </div>
         </div>
       </div>
     
      </div>
      @endforeach
    </div>
  </div>
  <br>
 
 <!-- Support Team -->
 <div class="container">
     <h2 class="main-title" style="text-align:center; margin-bottom: 18px;"><span style="color:#ff6810;">Support</span> Team</h2>
     <div class="container" style="display: flex; flex-wrap: wrap;">
      @foreach ($data2 as $data2)
      <div class="box">
       <div class="box1">
         <div class="box_item">
          <img src="Support_Team/{{ $data2->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class=" card-title card-title0 center">{{ $data2->title }}</h5><br>
            <p class="card-text card-title2" style="text-align:center;">{{ $data2->Position }}</p>
            <p class="icon">
            <a href="{{ $data2->Facebook }}"><i class='fab fa-facebook-f' style="margin: 2px;"></i></a>
            <a href="{{ $data2->YouTube }}"><i class='fab fa-youtube' style="margin: 2px;"></i></a>
            <a href="{{ $data2->Linkedin }}"><i class='fab fa-linkedin-in' style="margin: 2px;"></i></a>
            </p>
          </div>
         </div>
       </div>
     
      </div>
      @endforeach
    </div>
  </div>
  <br>
 
  <!-- Web Team -->
 <div class="container">
     <h2 class="main-title" style="text-align:center; margin-bottom: 18px;"><span style="color:#ff6810;">Web</span> Team</h2>
     <div class="container" style="display: flex; flex-wrap: wrap;">
      @foreach ($data3 as $data3)
      <div class="box">
       <div class="box1">
         <div class="box_item">
          <img src="Web_Team/{{ $data3->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class=" card-title card-title0 center">{{ $data3->title }}</h5><br>
            <p class="card-text card-title2" style="text-align:center;">{{ $data3->Position }}</p>
            <p class="icon">
            <a href="{{ $data3->Facebook }}"><i class='fab fa-facebook-f' style="margin: 2px;"></i></a>
            <a href="{{ $data3->YouTube }}"><i class='fab fa-youtube' style="margin: 2px;"></i></a>
            <a href="{{ $data3->Linkedin }}"><i class='fab fa-linkedin-in' style="margin: 2px;"></i></a>
            </p>
          </div>
         </div>
       </div>
     
      </div>
      @endforeach
    </div>
  </div>
  <br>
 
 
 <!-- How It Work? -->
 <div class="container">
    <h2 class="main-title" style="text-align:center;">How It <span style="color:#ff6810;">Work?</span></h2>
 <div class="row">
    <div class="col-3 row3 ">
       <div class="card card1">
          <div class="card-body ">
          <div class="wicon ">
          <i class="fas fa-search fa-2x"></i>
          </div>
             <h3 class="title"> Find Your Course </h3>
          <p class="work">We are offering the best skill development course for your freelancing and job ! </p>
          </div>
        </div>
    </div>
 <div class=" w_margin col-1">  
 <img class="" src="user/assets/img/arrow.PNG">
 </div>
    <div class="col-3 row3 ">
       <div class="card card1">
          <div class="card-body ">
          <div class="wicon ">
          <i class="far fa-file-alt fa-2x"></i>
          </div>
             <h3 class="title"> Find Your Course </h3>
          <p class="work">We are offering the best skill development course for your freelancing and job ! </p>
          </div>
        </div>
    </div>
 <div class="w_margin col-1">  
 <img class="" src="user/assets/img/arrow.PNG">
 </div>
    <div class="col-3 row3 ">
       <div class="card card1">
          <div class="card-body ">
          <div class="wicon ">
     <i class='fas fa-award fa-2x'></i>
          </div>
             <h3 class="title"> Find Your Course </h3>
          <p class="work">We are offering the best skill development course for your freelancing and job ! </p>
          </div>
        </div>
    </div>
 </div>
 </div>
 <br>
@include('user.footer')
@include('user.js')
</body>
</html>
