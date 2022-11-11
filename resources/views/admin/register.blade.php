<x-app-layout>

  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.css')
        
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
          <h1>Account Management</h1>
    <div style="position: relative; top:20px; right:4px;">
      <!-- Button admin add modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Add Admin
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{ url('/admin_upload') }}" method="post" enctype="multipart/form-data">
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
                     
                     <input type="number"  name="usertype" class="text" value="1"  hidden>
                     
                 </div>
                 <div>
                    <label>Password:</label>
                    <input type="password" name="password" class="text" placeholder="Write a password" required>
                </div>
                 <div>
    
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <input  type="submit"  class="btn btn-primary" value="Save">
                     </div>
                 </div>
                  
              </form>
          </div>
        </div>
      </div>
    </div>



    
    <br><br>
    <h3><b>Admin Account</b></h3>
    <table id="" class="display">
      <thead>
        <tr class="table-success" style="color: black !important;">
          <th style="padding: 5px">Admin name</th>
          <th style="padding: 5px">Phone</th>
          <th style="padding: 5px">Email Address</th>
          <th style="padding: 5px">Action</th>
        </tr>
      </thead>
      @foreach ($users as $users)
      <tbody>
        <tr style="background-color: #ffffff; color:black;" class="item">
          <td>{{ $users->name }}</td>
          <td>{{ $users->phone }}</td>
          <td>{{ $users->email }}</td>
          <td><a class="btn btn-warning" href="{{ url('/deleteadmin',$users->id) }}">Delete</a></td> 
        </tr>
      </tbody>
      @endforeach
      
    </table>


    <br>
    <h3><b>Student Account</b></h3>
    <table id="" class="display">
      <thead>
        <tr class="table-success" style="color: black !important;">
          <th style="padding: 5px">Student name</th>
          <th style="padding: 5px">Phone</th>
          <th style="padding: 5px">Email Address</th>
          <th style="padding: 5px">Action</th>
        </tr>
      </thead>
      @foreach ($users1 as $users1)
      <tbody>
        <tr style="background-color: #ffffff; color:black;" class="item">
           <td>{{ $users1->name }}</td> 
           <td>{{ $users1->phone }}</td>
          <td>{{ $users1->email }}</td>
          <td><a class="btn btn-warning" href="{{ url('/deleteuser',$users1->id) }}">Delete</a></td> 
        </tr>
      </tbody>
      @endforeach
      
    </table>
    

    @include('admin.script')
  </body>
</html>