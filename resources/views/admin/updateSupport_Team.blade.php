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

        <form action="{{ url('/update_Student_Consulting',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
           
            
            <div>
               <label>Title</label>
               <input type="text" class="text" name="title" value="{{ $data->title }}" required>
           </div>
           <div>
            <label>Position</label>
            <input type="text" class="text" name="Position" value="{{ $data->Position }}" required>
        </div>
        <div>
            <label>Facebook Link</label>
            <input type="text" class="text" name="Facebook" value="{{ $data->Facebook }}" >
        </div>
        <div>
         <label>YouTube Link</label>
         <input type="text" class="text" name="YouTube" value="{{ $data->YouTube }}" >
     </div>
           <div>
               <label>Linkedin Link</label>
               <input type="text" class="text" name="Linkedin" value="{{ $data->Linkedin }}" >
           </div>
           
           <div>
               
               <img height="200" width="200" src="Student_Consulting/{{ $data->image }}" hidden >
           </div>

           <div>
            <label>New Image</label>
            <input type="file" name="image"  required>
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
            border-radius: 5px;" type="submit" href="{{ url('/admin_management_team') }}">Go Back </a>
        </div>
        </form>
       </div>
    </div>
    @include("admin.script")
   
  </body>
</html>