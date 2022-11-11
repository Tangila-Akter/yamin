<x-app-layout>

  
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      
    @include("admin.css")
    <style>
        .text{
            color: #191c24;
        }
        body{
          background: #191c24;
          color: rgb(255, 255, 255);
        }
        a:link {
          color: white;
        text-decoration: none;
      }
      .min-h-screen {
    min-height: 0vh !important;
}
      </style>
  </head>
  <body>
    <div class="container-scroller">


    <div style="position: relative; top:60px; right:-150px;">
        <form action="{{ url('/update_Online_Course',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
           
            
            <div>
               <label>Title</label>
               <input type="text" class="text" name="title" value="{{ $data->title }}" required>
           </div>
           <div>
               <label>Regular fee</label>
               <input type="number" class="text" name="regular_fee" value="{{ $data->regular_fee }}" required>
           </div>
           <div>
            <label>Discount fee</label>
            <input type="number" class="text" name="discount_fee" value="{{ $data->discount_fee }}" required>
        </div>
           <div>
               
               <img height="200" width="200" src="Online_Course/{{ $data->image }}" hidden >
           </div>

           <div>
            <label>New Image</label>
            <input type="file" name="image" required>
        </div>
           <div>

               <div>
                   <input style="color:rgb(255, 255, 255);color: #ffffff;
                   background: dodgerblue;
                   margin: 1px;
                   padding: 7px;
                   border-radius: 5px;" type="submit" value="Save">
               </div>
              
           </div>
           <div>
            <a style="color:rgb(255, 255, 255);color: #ffffff;
            background: rgb(238, 149, 114);
            margin: 1px;
            padding: 7px;
            border-radius: 5px;" type="submit" href="{{ url('/admin_Online_Course') }}">Go Back </a>
        </div>
        </form>
       </div>
    </div>
    @include("admin.script")
   
  </body>
</html>