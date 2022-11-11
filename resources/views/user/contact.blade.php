<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
</head>
<body>

 <header class="header">
   @include('user.navbar')
    
 </header>
 <!-- Contact us -->
<div class="container">
    <h2 class="main-title" style="text-align:center; margin-bottom: 18px; margin-top: 18px;"><span style="color:#ff6810;">Contact</span> Us</h2>
    <div class="row contact">
     <div class="cont col">
         <h4><b> Get In Touch</b></h4><br>
         <form class="main-form" action="{{ url('upload_contact') }}" method="post">
          @csrf
         
             <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Name:</label>
                 <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
               </div>
               <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Phone number:</label>
                 <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="01********">
               </div>
                <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Email address:</label>
                 <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
               </div>
               <div class="row">
                <div class="col-7">
                  <label for="exampleFormControlInput1" class="form-label">Course name:</label>
                 <input type="text" name="course_name" class="form-control" id="exampleFormControlInput1" placeholder="Course Name">
                </div>
                <div class="col-5"><label for="exampleFormControlInput1" class="form-label">Course type:</label><br>
                  <select name="course_type" class="form-control custom-select" required>
                    <option placeholder="">Select a course type</option>
                    <option value="Online Course" >Online Course</option>
                    <option value="Offline Course" >Offline Course</option>
                    <option value="Video Course" >Video Course</option>
                  </select>
                </div>
              </div>
               
                 <div class="mb-3">
                   <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
                   <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Message"></textarea>
                 </div>
                 <div class="mb-3">
                   {{-- <a href="" type="submit" class="btn btn-primary btn-hover-dark">Submit</a> --}}
                   <button type="submit" style=" background-color:darkcyan;" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
                 </div>
               </div>
               
               
         </form>
 
         <div class="cont col ">
           <h4> <b >Head Office</b> </h4><br><br>
           <div>
             <h5>Phone number</h5>
             <p>01******</p>
           </div><br><br>
           <div>
             <h5>Address</h5>
             <p>House# 82, Road# 19/A,
                 Block# E, Banani, Dhaka-1213</p>
           </div><br><br>
           <div>
             <h5>Email Us</h5>
             <p> webcoderit@gmail.com</p>
           </div><br>
         </div>
     </div>
     
     
     
    
 </div>
 </div>
 <br>
 

@include('user.footer')
@include('user.js')
</body>
</html>
