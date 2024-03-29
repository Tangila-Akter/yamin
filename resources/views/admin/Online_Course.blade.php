<x-app-layout>

  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <style>  
    th{
      background-color: rgb(228, 226, 226);
      color: #140a0a;
    }
    th, td {
    text-align: center;
    padding: 2px;
}
    table{
      border-collapse: collapse;
  border-spacing: 0;
  width: 50%;
    }
td:hover{
  background-color: #cdc9c9;
  color: #140a0a;
}
    [type="search"] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
  color: white !important;
}
.text{
  color: black;
}
#editor{
  color: #000000;
}
   
.min-h-screen {
    min-height: 0vh !important;
}
.dropdown .dropdown-menu .dropdown-item:hover {
    color: white;
}
</style>
  </head>
  <body>
    <div class="container-scroller">


@include('admin.navbar')

<div class="container-fluid page-body-wrapper">
    <div>
      <h1>Online Course</h1>

<div style="position: relative; top:20px; right:4px;">
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Online Course
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Online Course</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{ url('/uploadOnline_Course') }}" method="post" enctype="multipart/form-data">
              @csrf
             
              
              <div>
                 <label>Course title</label>
                 <input type="text" id="title" name="title" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Write a title" required>
             </div>
             <div>
                 <label>Regular fee</label>
                 <input type="text" id="regular_fee" name="regular_fee" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Regular fee"   required>BDT
                 
             </div>
             <div>
                <label>Discount fee</label>
                <input type="text" id="discount_fee" name="discount_fee" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Discount fee" required>BDT
            </div>
            <div>
              <label>Course Purpuse </label>
              <textarea name="course_purpuse" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Course Purpuse" row="6"></textarea>
          </div>
          <div>
            <label>Course About</label>
            <textarea name="course_about" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Course About" row="6" ></textarea>
          </div>
          <div>
            <label>Syllabus:</label>
            <div style="background-color: #ffffff; color:#000000;">
            <textarea  id="editor" name="course_slybus" style="background-color: #ffffff; color:#000000"  placeholder="syllabus" row="6"></textarea>
            </div>
        </div>
        <div>
          <label>Instractor name </label>
          <input type="text" id="title" name="ins_name" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Instractor name" required>
          
      </div>
      <div>
        <label>Instractor about</label>
        <input type="text" id="title" name="ins_details" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Instractor about" required>
      </div>
          <div class="col-5"><label for="exampleFormControlInput1" class="form-label">Course type:</label><br>
            <select name="course_type" style="background-color: #ffffff; color:#000000;" class="form-control custom-select" required>
              <option placeholder="">Select a course type</option>
              <option value="Online Course" >Online Course</option>
              <option value="Offline Course" >Offline Course</option>
              <option value="Video Course" >Video Course</option>
            </select>
          </div>
          <div>
            <label>Video link:</label>
            <input type="text" id="video_link" name="video_link" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Video link" required>
        </div>
            <div>
                <label>Images:</label>
                <input type="file" id="image" style="background-color: #ffffff; color:#000000;" class=" form-control" name="image" required>
            </div>
            <div>
              <label>Instractor Images:</label>
              <input type="file" id="image" style="background-color: #ffffff; color:#000000;" class=" form-control" name="ins_image" required>
          </div>
           </div>
             <div class="d-flex justify-content-center mb-4">

                  
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <input  type="submit"  class="btn btn-primary" value="Save">
                 </div>
             </div>
              
          </form>
      </div>
    </div>
  </div><br><br>
  {{-- <table id="" class="display">
    <thead>
      <tr class="table-success" style="color: black !important;">
        <th style="padding: 10px">Title</th>
        <th style="padding: 10px">Regular fee</th>
        <th style="padding: 10px">Discount fee</th>
        <th style="padding: 10px"> Course type</th>
        <th style="padding: 10px"> Course Image</th>
        <th style="padding: 10px">Course purpuse</th>
        <th style="padding: 10px">Course about</th>
        <th style="padding: 10px">Course syllabus</th>
        <th style="padding: 10px"> Course video link</th>
        <th style="padding: 10px"> instractor image</th>
        <th style="padding: 10px">instractor name</th>
        <th style="padding: 10px">instractor details</th>
        <th style="padding: 3px">Action</th>
      </tr>
    </thead>
    @foreach ($data as $data)
    <tbody>
      <tr style="background-color: #ffffff; color:black;" class="item">
        <td>{{ $data->title }}</td>
        <td>{{ $data->regular_fee }}</td>
        <td>{{ $data->discount_fee }}</td>
        <td>{{ $data->course_type }}</td>
        <td><img style="height:90px; width:90px;"  src="Online_Course/{{ $data->image }}" ></td>
        <td>{{ $data->course_purpuse }}</td>
        <td>{{ $data->course_about }}</td>
        <td>{{ $data->course_slybus }}</td>
        <td>{{ $data->video_link }}</td>
        <td><img style="height:90px; width:90px;"  src="ins_Course/{{ $data->ins_image }}" ></td>
        <td>{{ $data->ins_name }}</td>
        <td>{{ $data->ins_details }}</td>
        <td><a class="btn btn-warning" href="{{ url('/deleteOnline_Course',$data->id) }}">Delete</a>&nbsp
          <a class="btn btn-primary" href="{{ url('/updateOnline_Course',$data->id) }}">Edit</a></td> 
      </tr>
    </tbody>
    @endforeach
    
  </table> --}}
  <div class="table-responsive-xxl">
    <table class="table table-dark table-striped-columns table-striped table-hover">
      <thead>
          <tr class="table-success" style="color: black !important;">
            <th style="padding: 10px">Title</th>
            <th style="padding: 10px">Regular fee</th>
            <th style="padding: 10px">Discount fee</th>
            <th style="padding: 10px"> Course type</th>
            <th style="padding: 10px"> Course Image</th>
            <th style="padding: 10px">Course purpuse</th>
            <th style="padding: 10px">Course about</th>
            <th style="padding: 10px">Course syllabus</th>
            <th style="padding: 10px"> Course video link</th>
            <th style="padding: 10px"> instractor image</th>
            <th style="padding: 10px">instractor name</th>
            <th style="padding: 10px">instractor details</th>
            <th style="padding: 3px">Action</th>
          </tr>
        </thead>
        @foreach ($data as $data)
        <tbody>
          <tr style="background-color: #ffffff; color:black;" class="item">
            <td style="height:20px; width:20px">{{ $data->title }}</td>
            <td style="height:20px; width:5px">{{ $data->regular_fee }}</td>
            <td style="height:20px; width:5px">{{ $data->discount_fee }}</td>
            <td style="height:20px; width:5px">{{ $data->course_type }}</td>
            <td style="height:20px; width:5px"><img style="height:90px; width:90px;"  src="Online_Course/{{ $data->image }}" ></td>
            <td style="height:20px; width:5px">{{ $data->course_purpuse }}</td>
            <td style="height:20px; width:5px">{{ $data->course_about }}</td>
            <td style="height:20px; width:5px">{{ $data->course_slybus }}</td>
            <td style="height:20px; width:5px">{{ $data->video_link }}</td>
            <td style="height:20px; width:5px"><img style="height:90px; width:90px;"  src="ins_Course/{{ $data->ins_image }}" ></td>
            <td style="height:20px; width:5px">{{ $data->ins_name }}</td>
            <td style="height:20px; width:5px">{{ $data->ins_details }}</td>
            <td style="height:20px; width:5px"><a class="btn btn-warning" href="{{ url('/deleteOnline_Course',$data->id) }}">Delete</a>&nbsp
              <a class="btn btn-primary" href="{{ url('/updateOnline_Course',$data->id) }}">Edit</a></td> 
          </tr>
        </tbody>
        @endforeach
    </table>
  </div>

<span>

</span>
</div>
</div>
{{-- <table class="table table-success table-striped">
  ...
</table> --}}







    @include('admin.script')
    
    <script type="text/javascript">
      $(document).ready( function () {
    $('#table_id').DataTable();
} );
      </script>

  </body>
</html>
