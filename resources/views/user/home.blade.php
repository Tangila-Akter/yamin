<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
</head>
<body>

 <header class="header">
   @include('user.navbar')
    
 </header>
 <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>
   <div class="carousel-inner">
     <div class="carousel-item active" data-bs-interval="10000">
       <img src="user/assets/img/bg.png" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>First slide label</h5>
         <p>Some representative placeholder content for the first slide.</p>
       </div>
     </div>
     <div class="carousel-item" data-bs-interval="2000">
       <img src="user/assets/img/bg.png" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Second slide label</h5>
         <p>Some representative placeholder content for the second slide.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="user/assets/img/bg.png" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Third slide label</h5>
         <p>Some representative placeholder content for the third slide.</p>
       </div>
     </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
   </button>
 </div>
 
<!-- Online Courses -->
<div class="container">
   <h2 class="main-title"><span style="color:#ff6810;">Online</span> Courses</h2>
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
<br>


<!--  Offline Courses -->
<div class="container">
   <h2 class="main-title"><span style="color:#ff6810;">Offline</span> Courses</h2>
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
   <h2 class="main-title"><span style="color:#ff6810;">Video</span> Courses</h2>
   <div class="container" style="display: flex; flex-wrap: wrap;">
    @foreach ($data2 as $data2)
    <div class="box">
     <div class="box1">
       <div class="box_item">
         <img src="Online_Course/{{ $data2->image }}"  class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class=" card-title card-title0" id="">{{ $data2->title }}</h5><br>
           <p class="card-text card-title1">Course Fee <span class="right">{{ $data2->regular_fee }} BDT</span></p>
           <p class="card-text card-title1" style="color:red ;">Regular Fee <span class="right" style="text-decoration: line-through;">
            {{ $data2->discount_fee }} BDT</span></p>
           <a href="{{ url('/user_coursedetails',$data2->id) }}" class="btn btn-primary btn-hover-dark">View details</a>
         </div>
       </div>
     </div>
   
    </div>
    @endforeach
  </div>
</div>
<br>




 <div class="section slider-cont">
   <div class="container">
   <div class="row2" style="align-items: center;">
      <div class="col-md-6">
      <div class="slider-content">
      <h5 class="sub-title">Ready to start?</h5>
      <h2 class="main-title" style="font-size: 30px; color: #f16522;;">Join Our Event start your course.</h2>
      </div>
      </div>
      <div class="col-md-6" >
         <a class="btn btn-primary btn-hover-dark" href="http://"> +8801810139951-8 </a>
         <a class="btn btn-primary btn-hover-dark" href="http://">Join Our Group</a>
         </div>
      </div>
   </div>
 </div>
<br>

<div class="container">
   <div class="row">
   <div class="col-3 row3 ">
      <div class="card card1">
         <div class="card-body ">
            <i class="fas fa-chalkboard-teacher fa-2x" style="color:#ff6810;"></i>
            <h4 class="title"> Teacher </h4>
            <span class="number">5</span>
         </div>
       </div>
   </div>
   <div class="col-3 row3">
      <div class="card card1">
         <div class="card-body ">
            <i class="fas fa-user-graduate fa-2x" style="color:#ff6810;"></i>
            <h4 class="title">  Fiverr Level 1/2  </h4>
            <span class="number"> 1000+ </span>
         </div>
       </div>
   </div>
   <div class="col-3 row3 ">
      <div class="card card1">
         <div class="card-body ">
            <i class="fas fa-users fa-2x" style="color:#ff6810;"></i>
            <h4 class="title">  Completed Students  </h4>
            <span class="number"> 6000+ </span>
         </div>
       </div>
   </div>
   <div class="col-3 row3">
      <div class="card card1">
         <div class="card-body ">
            <i class="fas fa-users fa-2x" style="color:#ff6810;"></i>
            <h4 class="title">  Total Students  </h4>
            <span class="number"> 8000+ </span>
         </div>
       </div>
   </div>
   </div>
</div>
<br>



<!-- Success Story -->
<div class="container">
   <h2 class="main-title"><span style="color:#ff6810;">Success</span> Story</h2>
<div class="container">
<div class="section">
<div class="gallery">
              
        <div class="itembox videos">
          <iframe width="300" height="300" src="https://www.youtube.com/embed/iy6elsVL6S4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="itembox videos">
            <iframe width="300" height="300" src="https://www.youtube.com/embed/A3gyXLMrJkk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="itembox videos">
              <iframe width="300" height="300" src="https://www.youtube.com/embed/XOFvwRKHEQI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="itembox videos">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/997z8Y7SscI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
</div>
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
</div>
<br>

@include('user.footer')
@include('user.js')
</body>
</html>
