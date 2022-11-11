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

  text-align: left;
  padding: 8px;
}
    table{
      border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
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
      <h1>Success Student</h1>

<div style="position: relative; top:20px; right:4px;">
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Success Student
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Success Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{ url('/uploadSuccess_Student') }}" method="post" enctype="multipart/form-data">
              @csrf
             
              
              <div>
                 <label>Title</label>
                 <input type="text" id="title" name="title" class="text" placeholder="Write a title" required>
             </div>
             <div>
                 <label>Position</label>
                 <input type="text" id="Position" name="Position" class="text" placeholder="Position"   required>
                 
             </div>
             <div>
                <label>Facebook Link</label>
                <input type="text" id="Facebook" name="Facebook" class="text" placeholder="Facebook Link" >
            </div>
            <div>
                <label>YouTube Link</label>
                <input type="text" id="YouTube" name="YouTube" class="text" placeholder="YouTube Link" >
            </div>
            <div>
                <label>Linkedin Link</label>
                <input type="text" id="Linkedin" name="Linkedin" class="text" placeholder="Linkedin Link" >
            </div>
            
            <div>
                <label>Images:</label>
                <input type="file" id="image" name="image" required>
            </div>
           </div>
             <div>

                  
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <input  type="submit"  class="btn btn-primary" value="Save">
                 </div>
             </div>
              
          </form>
      </div>
    </div>
  </div><br><br>
  <table id="" class="display">
    <thead>
      <tr class="table-success" style="color: black !important;">
        <th style="padding: 10px">Title</th>
        <th style="padding: 10px">Position</th>
        <th style="padding: 10px">Facebook Link</th>
        <th style="padding: 10px">YouTube Link</th>
        <th style="padding: 10px">Linkedin Link</th>
        <th style="padding: 10px">Image</th>
        <th style="padding: 10px">Action</th>
      </tr>
    </thead>
    @foreach ($data as $data)
    <tbody>
      <tr style="background-color: #ffffff; color:black;" class="item">
        <td>{{ $data->title }}</td>
        <td>{{ $data->Position }}</td>
        <td>{{ $data->Facebook }}</td>
        <td>{{ $data->YouTube }}</td>
        <td>{{ $data->Linkedin }}</td>
        <td><img height="100" width="100" src="Success_Student/{{ $data->image }}" ></td>
        <td><a class="btn btn-warning" href="{{ url('/deleteSuccess_Student',$data->id) }}">Delete</a>&nbsp
          <a class="btn btn-primary" href="{{ url('/updateSuccess_Student',$data->id) }}">Edit</a></td> 
      </tr>
    </tbody>
    @endforeach
    
  </table>
<span>

</span>
</div>
</div>







    @include('admin.script')
    
    <script type="text/javascript">
      $(document).ready( function () {
    $('#table_id').DataTable();
} );
      </script>

  </body>
</html>
