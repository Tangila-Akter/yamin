<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
<style>
   body {
     font-family: Arial, Helvetica, sans-serif;
   }
   
   .flip-card {
     background-color: transparent;
     width: 300px;
     height: 300px;
     perspective: 1000px;
     border-radius: 15px;
     margin: 22px;
   }
   
   .flip-card-inner {
     position: relative;
     width: 100%;
     height: 100%;
     text-align: center;
     transition: transform 0.6s;
     transform-style: preserve-3d;
     box-shadow:0 4px 14px 0 rgb(0 0 0 / 52%);
     border-radius: 15px;
   }
   
   .flip-card:hover .flip-card-inner {
     transform: rotateY(180deg);
     border-radius: 15px;
   }
   
   .flip-card-front, .flip-card-back {
     position: absolute;
     width: 100%;
     height: 100%;
     -webkit-backface-visibility: hidden;
     backface-visibility: hidden;
     border-radius: 15px;
   }
   
   .flip-card-front {
     background-color: #bbb;
     color: black;
     border-radius: 15px;
   }
   
   .flip-card-back {
     background-color: #b7e6ff54;
     color: rgb(17, 1, 1);
     transform: rotateY(180deg);
     border-radius: 15px;
   }
   @media(max-width:991px){

.flip-card {

  margin: 22px 74px;
}
}
@media(max-width:727px){
  .flip-card {

margin: 22px 189px;
}
}
@media(max-width:400px){
  .flip-card {

margin: 22px 28px;
}

}
   </style>
</head>
<body>

 <header class="header">
   @include('user.navbar')
    
 </header>
 <!-- Service -->
<div class="container">
    <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">Our</span> Service</h2>
    <div class="container" style="display: flex; flex-wrap: wrap;">
      @foreach ($data as $data)
      <div class="flip-card">
         <div class="flip-card-inner">
           <div class="flip-card-front">
             <img src="admin_Service/{{ $data->image }}" alt="Avatar" style="width:300px;height:300px; border-radius:15px;">
           </div>
           <div class="flip-card-back">
             <h1>{{ $data->title }}</h1> 
             <p>{{ $data->Details }}</p> 
             
           </div>
         </div>


    </div>
    @endforeach


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
