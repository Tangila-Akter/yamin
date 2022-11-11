<div class="container">
    <nav class="nav navbar navbar-expand-lg sticky-top  row0 justify-content-between ">
       <a class="navbar-brand" href="#"><img height="40" src="user/assets/img/bg.png"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
     
       <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
         <ul class="nav justify-content-center navbar-nav">
           <li class="nav-item active">
             <a class="nav-link" href="{{ url('/user_home') }}">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/user_course') }}">All Course</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/user_service') }}">Service</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/user_team') }}">Team</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/user_teacher') }}">All Teacher</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/user_student') }}">Success Student</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/user_contact') }}">Contact Us</a>
           </li>
          
           <li class="nav-item">
            @auth
            <li>
              <a class="nav-link" href="{{ url('/user_dashboard') }}">Dashboard</a>
            </li>
            @endauth
          </li>
           {{-- <li class="nav-item">
            <a class="nav-link" href="contact.html">Login
                / 
               Register</a>
          </li> --}}
          <li class="nav-item">
            @if (Route::has('login'))
            <div class="">
                @auth
                {{-- <li class="scroll-to-section"><a href="{{ url('myreservation') }}">My reservation</a></li>  --}}
                  {{-- <li><x-app-layout></x-app-layout></li> --}}
                  <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
    </a>
                  {{-- <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log out</a> --}}
                @else
                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                    @endif
                @endauth
            </div>
            @endif
          </li>
         </ul>
       </div>
     </nav>
 </div>