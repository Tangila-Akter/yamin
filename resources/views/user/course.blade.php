<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
<style>

</style>

</head>
<body>

 <header class="header">
   @include('user.navbar')
    
 </header>
 
<!-- Online Courses -->
<div class="container" >
   <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">Online</span> Courses</h2>
   <div class="container" style="display: flex; flex-wrap: wrap;">
    @foreach ($data as $data)
    <div class="box">
     <div class="box1">
       <div class="box_item">
         <img src="Online_Course/{{ $data->image }}"  class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class=" card-title card-title0" id="">{{ $data->title }}</h5><br>
           <p class="card-text card-title1">Course Fee <span class="right">{{ $data->regular_fee }} BDT</span></p>
           <p class="card-text card-title1" style="color:red ;">Regular Fee <span class="right" style="text-decoration: line-through;">{{ $data->discount_fee }} BDT</span></p>
           <a href="{{ url('/user_coursedetails',$data->id) }}" class="btn btn-primary btn-hover-dark">View details</a>
         </div>
       </div>
     </div>
   
    </div>
    @endforeach
  </div>

 </div>
</div>
<br>


<!--  Offline Courses -->
<div class="container">
   <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">Offline</span> Courses</h2>
   <div class="container" style="display: flex; flex-wrap: wrap;">
    @foreach ($data1 as $data1)
    <div class="box">
     <div class="box1">
       <div class="box_item">
         <img src="Online_Course/{{ $data1->image }}"  class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class=" card-title card-title0" id="">{{ $data1->title }}</h5><br>
           <p class="card-text card-title1">Course Fee <span class="right">{{ $data1->regular_fee }} BDT</span></p>
           <p class="card-text card-title1" style="color:red ;">Regular Fee <span class="right" style="text-decoration: line-through;">{{ $data1->discount_fee }} BDT</span></p>
           <a href="{{ url('/user_coursedetails',$data1->id) }}" class="btn btn-primary btn-hover-dark">View details</a>
         </div>
       </div>
     </div>
   
    </div>
    @endforeach
  </div>
</div>
<br>



<!-- Video Courses -->
<div class="container">
   <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">Video</span> Courses</h2>
   <div class="container" style="display: flex; flex-wrap: wrap;">
    @foreach ($data2 as $data2)
    <div class="box">
     <div class="box1">
       <div class="box_item">
         <img src="Online_Course/{{ $data2->image }}"  class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class=" card-title card-title0" id="">{{ $data2->title }}</h5><br>
           <p class="card-text card-title1">Course Fee <span class="right">{{ $data2->regular_fee }} BDT</span></p>
           <p class="card-text card-title1" style="color:red ;">Regular Fee <span class="right" style="text-decoration: line-through;">{{ $data2->discount_fee }} BDT</span></p>
           <a href="{{ url('/user_coursedetails',$data2->id) }}" class="btn btn-primary btn-hover-dark">View details</a>
         </div>
       </div>
     </div>
   
    </div>
    @endforeach
  </div>
</div>
<br>





@include('user.footer')
@include('user.js')
</body>
</html>
