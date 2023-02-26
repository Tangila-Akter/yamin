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
      <h1>Orders Info</h1>

<div style="position: relative; top:20px; right:4px;">
  <!-- Button trigger modal -->

<!-- Modal -->

  <table id="table_id" class="display">
    <thead>
      <tr class="table-success" style="color: black !important;">
        <th style="padding: 10px">Id</th>
        <th style="padding: 10px">Name</th>
        <th style="padding: 10px">Amount</th>
        <th style="padding: 10px">Transaction id</th>
       
        
      </tr>
    </thead>
    @foreach ($orderdetails as $data)
    <tbody>
      <tr style="background-color: #ffffff; color:black;" class="item">
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->amount }} .BDT</td>
        <td>{{ $data->transaction_id }}</td>
   


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
 
} );
      </script>

  </body>
</html>
