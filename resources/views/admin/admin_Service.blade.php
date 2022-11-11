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
      <h1>Service</h1>

<div style="position: relative; top:20px; right:4px;">
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Service
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{ url('/uploadadmin_Service') }}" method="post" class="px-4" enctype="multipart/form-data">
              @csrf
             
              
              <div class="mb-2 form-group">
                 <label>Title</label>
                 <input type="text" id="title" name="title" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Write a title" required>
             </div>
             <div class="mb-2 form-group">
                 <label>Details</label>
                 <input type="text" id="title" name="Details" style="background-color: #ffffff; color:#000000;" class=" form-control" rows="3" placeholder="Enter Your Message" required>
                                  
             </div>

            
            <div class="mb-2 form-group">
                <label>Images:</label>
                <input type="file" id="image" style="background-color: #ffffff; color:#000000;" class=" form-control" name="image" required>
            </div>
           </div>
             <div class="d-flex justify-content-center mb-4">

                  
                  <button type="button" class="btn btn-secondary mr-2" data-bs-dismiss="modal">Close</button>
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
        <th style="padding: 20px">Title</th>
        <th style="padding: 20px">Details</th>
        <th style="padding: 20px">Image</th>
        <th style="padding: 20px">Action</th>
      </tr>
    </thead>
    @foreach ($data as $data)
    <tbody>
      <tr style="background-color: #ffffff; color:black;" class="item">
        <td>{{ $data->title }}</td>
        <td>{{ $data->Details }}</td>
        <td><img height="100" width="100" src="admin_Service/{{ $data->image }}" ></td>
        <td><a class="btn btn-warning" href="{{ url('/deleteadmin_Service',$data->id) }}">Delete</a>&nbsp
          <a class="btn btn-primary" href="{{ url('/updateadmin_Service',$data->id) }}">Edit</a></td> 
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
