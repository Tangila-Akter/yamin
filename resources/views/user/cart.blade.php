<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')

</head>
<body>

 <header class="header">
   @include('user.navbar')
    
 </header>
 <!-- Cart -->
<div class="container">
    <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">Cart</span> List</h2>
    <div class="container" style="display: flex; flex-wrap: wrap;">
      <div class="">
        <table id="" class="display">
          <thead>
            <tr class="table-success" style="color: black !important;">
              <th style="padding: 40px">Course Name</th>
              <th style="padding: 40px">Course Type</th>
              <th style="padding: 40px">Action</th>
            </tr>
          </thead>
       <?php   $cart=$data2; ?>
   
          @foreach ($data as $data)
          <tbody>
            <tr style="background-color: #ffffff; color:black; text-align: center;" class="item">
              <td style="padding: 25px">{{ $data->title }}</td>
              <td style="padding: 25px"> <input type="text" name="quality[]" value="{{ $data->course_type }}" hidden="">{{ $data->course_type }}</td>
              @endforeach
              @foreach ($data2 as $data2)
              <td style="position: relative; top:-60px; right:-4px;"><a href="{{ url('/remove',$data2->id) }}" class="btn btn-warning">Remove</a></td> 
            </tr>
          </tbody>
          @endforeach
          
        </table>
       
      </div>


 </div>
 <br>
 
 <div align="center" style="padding: 10px;">
  <button class="btn btn-primary" type="button" id="order">Enroll Now</button>

</div>
<form  method="post" action="{{ url('/checkout') }}">
  @csrf
<div id="appear" align="center" style="padding: 10px; display:none;">
<div style="padding: 10px;">
<label>Name</label>
<input type="text" name="name" placeholder="Enter name">

@foreach($cart as $cart)
<input type="hidden" name="cart[]" value="{{ $cart->id }}" placeholder="Enter name">
@endforeach
</div>
<div style="padding: 10px;">
  <label>Phone</label>
  <input type="number" name="phone" placeholder="Enter phone">
  </div>
<div style="padding: 10px;">
  <label>Address</label>
  <input type="text" name="address" placeholder="Enter address">
</div>
<div style="padding: 10px;">
  <input class="btn btn-success" type="submit" value="Order confirm">
  <button  id="close" type="button"  class="btn btn-secondary">close</button>
</div>
</div>
</form >



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
 <img class="" src="{{ url('user/assets/img/arrow.PNG') }}">
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
 <img class="" src="{{ url('user/assets/img/arrow.PNG') }}">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $("#order").click(
     function()
     {
         $("#appear").show();
     }
  );
  $("#close").click(
     function()
     {
         $("#appear").hide();
     }
     
  );
  
  </script>
@include('user.js')
</body>
</html>
