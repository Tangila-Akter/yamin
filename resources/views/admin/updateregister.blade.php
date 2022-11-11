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

        <form action="{{ url('/update_updateregister',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
           
            
            <div>
                     <label>Name:</label>
                     <input type="text" name="name" class="text" placeholder="Write a name" required>
                 </div>
                 <div>
                    <label>Phone Number:</label>
                    <input type="text" name="phone" class="text" placeholder="Write phone number" required>
                </div>
                <div>
                    <label>Email Address:</label>
                    <input type="email" name="email" class="text" placeholder="Write phone number" required>
                </div>
                 <div>
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
            border-radius: 5px;" type="submit" href="{{ url('/admin_register') }}">Go Back </a>
        </div>
        </form>
       </div>
    </div>
    @include("admin.script")
   
  </body>
</html>