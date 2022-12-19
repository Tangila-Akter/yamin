@include('user.css')
    <div class="container-fluid">
    <nav class="nav navbar navbar-expand-lg sticky-top  row0 justify-content-between ">
       <a class="navbar-brand" href="#"><img height="40" src="{{ asset('user/assets/img/bg.png') }}"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
     
       <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
         <ul class="nav justify-content-center navbar-nav">
           <li class="nav-item active">
            
             <a class="nav-link" href="{{ url('/user_home') }}"><i class="fa fa-home" style="font-size:17.5px"></i></a>
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
           <li class="nav-item">
            @if (Route::has('login'))
            <div class="">
                @auth
            <a class="nav-link" href="{{ url('/cart',Auth::user()->id) }}"><i class="fas fa-cart-arrow-down" style="font-size:17.5px"></i></a>
            @endif
                @endauth
          </li>
          <li class="nav-item">
            @if (Route::has('login'))
            
                @auth
                {{-- <li class="scroll-to-section"><a href="{{ url('myreservation') }}">My reservation</a></li>  --}}
                                                {{-- <li><x-app-layout></x-app-layout></li> --}}
                                                <form method="POST" action="{{ route('logout') }}">
                                                  @csrf
                                                  <div class="nav-item">
                                                      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                  this.closest('form').submit(); " role="button">
                                                          {{-- <i class="fas fa-sign-out-alt"></i> --}}

                                                          {{ __('Log Out') }}
                                                      </a>
                                                  </div>
                                                </form>
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
<x-guest-layout>
    
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
               
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
