<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

 <header class="header">
   @include('user.navbar')
    
 </header>
 <!-- Profile -->



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/profile_update',auth::user()->id) }}" method="post" enctype="multipart/form-data">
          @csrf
         
          
          <div>
             <label>Name:</label>
             <input type="text" name="name" class="form-control mb-2" value="{{ auth::user()->name }}" placeholder="Write a name" required>
         </div>
         <div>
            <label>Phone Number:</label>
            <input type="text" name="phone" class="form-control mb-2" value="{{ auth::user()->phone }}" placeholder="Write phone number" required>
        </div>
        <div>
            <label>Email Address:</label>
            <input type="email" name="email" class="form-control mb-2" value="{{ auth::user()->email }}" placeholder="Write email " required>
        </div>

         <div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" style=" background-color:darkcyan;" style=" background-color:darkcyan;" class="btn btn-primary">Save changes</button>
              
                 
             </div>
         </div>
          
      </form>
      </div>

    </div>
  </div>
</div>

<div class="container">
    <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">Dashboard</span></h2>
     <div class="card">
      <div class="card-header d-flex justify-content-center" style="font-weight: 650; font-size: 23px;">
      Profile
      </div>
      
      <div class="card-body">
        <div class="row" style="border:1px solid rgb(231, 231, 231); margin: 35px 20px; padding: 9px 30px;">
          <div class="col-sm-4 "> <b> Name:</b></div>
          <div class="col-sm-8 ">{{ auth::user()->name }}</div>
          <div class="col-sm-4 "><b> Email:</b></div>
          <div class="col-sm-8 ">{{ auth::user()->email }}</div>
          <div class="col-sm-4 "><b>Phone Number:</b> </div>
          <div class="col-sm-8 ">{{ auth::user()->phone }}</div>
          <div class="col-sm-4 "><b>Action:</b> </div>
          <div class="col-sm-8 ">
            <a type="submit" data-toggle="modal" data-target="#exampleModal" style=" background-color:darkcyan;" class="btn btn-primary mt-2 wow zoomIn">Edit</a>
          </div>
        </div>
      </div>
    </div>
  </div>

 <br>

 <div class="container">
  <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">My Course</span></h2>
  <div class="container" style="display: flex; flex-wrap: wrap;">
    
    <div class="box">
     <div class="box1">
       <div class="box_item ">
       <div class="c_img">
        <img src="https://picsum.photos/200/300"  class="card-img-top"  alt="...">
         <div class="card-body">
           <h5 class=" card-title card-title0" id="">hjh</h5><br>
       </div>
         
       </div>
         </div>
       </div>
     </div>
   
    </div>
    
  </div>
 </div>
</div>

@include('user.footer')
@include('user.js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
