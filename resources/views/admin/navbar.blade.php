<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admin_register') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Account Management </span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Online Course</span>
            
          </a>
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/admin_Online_Course') }}">Add Online Course</a></li>
            <li><a class="dropdown-item" href="{{ url('/admin_Offline_Course') }}">Course Details</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Offline Course</span>
            
          </a>
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/admin_Offline_Course') }}">Add Offline Course</a></li>
            <li><a class="dropdown-item" href="{{ url('/admin_Video_Course') }}">Course Details</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Video Course</span>
            
          </a>
        
          <ul class="dropdown-menu">
            
            <li><a class="dropdown-item" href="{{ url('/admin_Video_Course') }}">Add Video Course</a></li>
            <li><a class="dropdown-item" href="{{ url('/admin_Offline_Course') }}">Course Details</a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admin_Service1') }}">
          <span class="menu-icon">
            <i class="mdi mdi-cube-outline"></i>
          </span>
          <span class="menu-title">Service</span>
        </a>
      </li>
      
      <li class="nav-item menu-items">
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="menu-icon">
              <i class="mdi mdi-account-multiple"></i>
            </span>
            <span class="menu-title">Team</span>
            
          </a>
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/admin_management_team') }}">Management Team</a></li>
            <li><a class="dropdown-item" href="{{ url('/admin_Student_Consulting') }}">Student Consulting Team</a></li>
            <li><a class="dropdown-item" href="{{ url('/admin_Support_Team') }}">Support Team</a></li>
            <li><a class="dropdown-item" href="{{ url('/admin_Web_Team') }}">Web Team</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admin_All_Teacher') }}">
          <span class="menu-icon">
            <i class="mdi mdi-account-tie"></i>
          </span>
          <span class="menu-title">All Teacher</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admin_Success_Student') }}">
          <span class="menu-icon">
            <i class="mdi mdi-account-star-outline"></i>
          </span>
          <span class="menu-title">Success Student</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admin_contact') }}">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">Contact us</span>
        </a>
      </li>


    </ul>
  </nav>