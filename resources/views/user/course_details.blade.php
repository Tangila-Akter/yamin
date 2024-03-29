<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
<style>
  
    .detail_p{
        font-size: 15px;
    }
    ul.a {
      
      list-style-position: outside;
      list-style-type: square ;
}
  </style>
</head>
<body>

 <header class="header">
   @include('user.navbar')
    
 </header>
 <div class="container">
    <div class="row">
        
            <div class="col" style="margin-top: 25px;">
              
                <section></section>
                <h1 class="text-4xl font-semibold text-gray mb-4">{{ $data->title}}</h1>
                <h2 class="mb-10"></h2>
                <div class="mb-10">
                    <h3 class="text-xl mb-4 font-medium">কোর্স ইন্সট্রাক্টর</h3>
                    <div class="row">
                        <div class="col ">
                            <div class="ins">
                                <div>
                                    @isset($data->ins_image)
                                    <img src="{{ asset('ins/'.$data->ins_image) }}" class="ins_pic" alt="" >
                                    @endisset
                                </div>
                                <div>
                                    <h3 class="text_lg">
                                    
                                      @isset($data->ins_name)
                                      {{ $data->ins_name }}
                                       @else
                                       nam nai Amar
                                      @endisset
                                  </h3>
                                    <p class="text-sm">
                                      @isset( $data->ins_details )
                                      {{ $data->ins_details }}
                                      @endisset
                                    </p>
                                </div>
                            </div>
                          
                        </div>
                        
                      </div>
                <div>
                    <h5 class="text-xl mb-4 font-medium">কোর্সটি করে যা শিখবেন</h5>
                    
                    <article class="detail_p">
                        {{$data->course_purpuse}}
                    </article><hr>
                    
                    <h4 class="text-xl mb-4 font-medium"><b>কোর্সটি সম্পর্কে</b></h4>
                    <p>{{$data->course_about}}<span id="dots">...</span><span id="more">ধরে নিতে পারেন, আপনার টার্গেট কাস্টমারের একটা বিরাট অংশ দিনের একটা উল্লেখযোগ্য পরিমাণ সময় ফেসবুকে কাটায়। আপনি যদি একজন ব্যবসায়ী বা উদ্যোক্তা হন, তবে আপনার কাস্টমারদের সাথে কার্যকর যোগাযোগের সর্বোত্তম মাধ্যম হলো ফেসবুক। সোশ্যাল মিডিয়ায় ব্র্যান্ডের অবস্থান শক্ত করতে সঠিক প্রোডাক্ট আর মূল্য নির্ধারণের পাশাপাশি আপনার জানা প্রয়োজন:

                            সঠিকভাবে ফেসবুকের অ্যালগরিদম-ফ্রেন্ডলি কনটেন্ট কিভাবে বানাতে হয়?
                            কিভাবে অল্প পরিশ্রম ও স্বল্প সময়ে কনটেন্ট re-purposing করতে হয়?
                            কিভাবে ফেসবুকের মার্কেটিং স্ট্র্যাটেজি তৈরি করতে হয়?
                            কী করে অর্গানিক রিচ বাড়াতে হয়?
                            কিভাবে ফেসবুকে অ্যাড রান করাতে হয়?
                            কিভাবে বুদ্ধিদীপ্তভাবে নিজের ব্র্যান্ডকে প্রতিযোগী ব্র্যান্ডের থেকে সুরক্ষিত রাখতে হয়?
                            আপনার অনলাইন ব্র্যান্ডের ফেসবুক উপস্থিতিকে সফল করার যাত্রায় আপনাকে সাহায্য করতেই টেন মিনিট স্কুলের “Facebook Marketing” কোর্স। কোর্সটি ডিজাইন করেছেন ডিজিটাল মার্কেটিং বিষয়ে ইন্ডাস্ট্রি এক্সপার্ট আয়মান সাদিক এবং সাদমান সাদিক।
                            
                            আজই এনরোল করুন এবং মাত্র ২৫ ঘণ্টায় হয়ে উঠুন ফেসবুক মার্কেটিং-এ এক্সপার্ট!
                            
                        
                        
                        
                        
                        
                        </span></p>

<button onclick="myFunction()" id="myBtn">Read more</button>

<br>

<div class="mb-10">
    <h5 class="text-xl mb-4 font-medium">কোর্স সিলেবাস</h5>
    <ul class="a">
      {!! $data->course_slybus !!}
    </ul>
<br>




      <div class="mb-10">
        <h5 class="text-xl mb-4 font-medium">যেভাবে পেমেন্ট করবেন</h5>
        <div class="payment_section">
            <p>
                কীভাবে পেমেন্ট করবেন তা বিস্তারিত জানতে
                <a href="" class="color">এই ভিডিওটি দেখুন</a>
            </p>
        </div>
      </div><br>
      <div class="mb-10">
        <h5 class="text-xl mb-4 font-medium">সার্টিফিকেট পেতে আজই শেখা শুরু করুন</h5>
        <div class="payment_section">
<p>কোর্সটি সফলভাবে শেষ করলে আপনার জন্য আছে সার্টিফিকেট যা আপনি-</p>
<br>
<ul>
    <li><i class="fa fa-check" style="font-size:20px;color:#ff6810"></i> আপনার সিভিতে যোগ করতে পারবেন</li>
    <li><i class="fa fa-check" style="font-size:20px;color:#ff6810"></i> লিংকডইন প্রোফাইলে সরাসরি শেয়ার করতে পারবেন</li>
    <li><i class="fa fa-check" style="font-size:20px;color:#ff6810"></i> ফেসবুকে এক ক্লিকেই শেয়ার করতে পারবেন</li>
</ul>
<img src="assets/img/bg.png" alt="" srcset="">
        </div>
      </div><br>
      <div class="mb-10">
        <h5 class="text-xl mb-4 font-medium">ক্লাস করার জন্য প্রয়োজন হবে</h5>
        <div class="payment_section">

<ul>
    <li><i class="fa fa-check" style="font-size:20px;color:#ff6810"></i> ইন্টারনেট সংযোগ (ওয়াইফাই বা মোবাইল ইন্টারনেট)</li>
    <li><i class="fa fa-check" style="font-size:20px;color:#ff6810"></i> স্মার্টফোন অথবা পিসি</li>
</ul>
        </div>
      </div>
</div>




</div>
            
            
                </div>
              </div>
       
              
      <div class="col">
        <section  class="sticky-top">
            <div class="card sticky_card" >
              <form action="{{ url('/addcart',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <iframe  class="detail_video" src="{{ $data->video_link }}">
                </iframe>
                
                  
                  <div class="card-body">
                    <h5 class="card-title card-title0">{{ $data->title }}</h5>
                    <p class="card-text card-title1">Discount Fee <span class="right">{{ $data->regular_fee }} BDT</span></p>
                    <p class="card-text card-title1" style="color:red ;">Regular Fee <span class="right" style="text-decoration: line-through;">{{ $data->discount_fee }} BDT</span></p>
                    <input  type="submit" class="btn btn-primary btn-hover-dark" value="কোর্সটি কিনুন " >

                    <br>
                    <br>
                    <div class="row">
                      <div class="col" >
                          <div class="row">
                              <div class="col-4">
                                  <i class="fas fa-book-reader" style="font-size:30px;color:#3f3e3d; float: right;"></i>
                              </div>
                              <div class="col-8 align-items-center1">
                                  <h6 >কোর্সটি করেছেন</h6>
                                  <h6 >২২৯৯৬ জন</h6>
                              </div>
                            </div>
                      <div>
                          
                      </div>
                      </div>
                      <div class="col" >
                          <div class="row">
                              <div class="col-4">
                                  <i class="fas fa-clock" style="font-size:30px;color:#3f3e3d; float: right;"></i>
                              </div>
                              <div class="col-8 align-items-center1">
                                  <h6 >সময় লাগবে</h6>
                                  <h6 >২৫ ঘণ্টা</h6>
                              </div>
                            </div>
                      <div>
                          
                      </div>
                      </div>
                  </div>
  
                  </div>
              </form>
              
              </div>
        </section>
       
      </div>
    </div>
 </div>
</div>
 

@include('user.footer')


@include('user.js')
<script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
    </script>
</body>
</html>
