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
      <h1>Contact Us</h1>

<div style="position: relative; top:20px; right:4px;">
  
  </div><br><br>
  <table id="" class="display">
    <thead>
      <tr class="table-success" style="color: black !important;">
        <th style="padding: 10px">Name</th>
        <th style="padding: 10px">Phone</th>
        <th style="padding: 10px">Email Address</th>
        <th style="padding: 10px">Course Name</th>
        <th style="padding: 10px">Course Type</th>
        <th style="padding: 10px">Message</th>
        <th style="padding: 10px">Action</th>
      </tr>
    </thead>
    @foreach ($data as $data)
    <tbody>
      <tr style="background-color: #ffffff; color:black;" class="item">
        <td>{{ $data->name }}</td>
        <td>{{ $data->phone }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->course_name }}</td>
        <td>{{ $data->course_type }}</td>
        <td>{{ $data->message }}</td>
        <td><a class="btn btn-warning" href="{{ url('/deleteadmin_contact',$data->id) }}">Delete</a></td> 
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
