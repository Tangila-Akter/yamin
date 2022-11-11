<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
</head>
<body>

 <header class="header">
   @include('user.navbar')
    
 </header>
 

 <!-- Our Teacher -->
 <div class="container">
    <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">Our </span> Teacher</h2>
    <div class="container" style="display: flex; flex-wrap: wrap;">
      @foreach ($data as $data)
      <div class="box">
       <div class="box1">
         <div class="box_item">
          <img src="All_Teacher/{{ $data->image }}" class="card-img-top" alt="...">
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

@include('user.footer')
@include('user.js')
</body>
</html>
