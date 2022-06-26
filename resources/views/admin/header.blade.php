
   <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-3 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div>
      <div class="col-3 text-center">
        <a class="blog-header-logo text-dark" href="#">Large</a>
      </div>
      <div class="col-3 text-center">
        {{-- <a class="blog-header-logo text-dark" href="#"> --}}
          Admin :  {{ 
               $user = Auth::user()->name
               
            }}
            <br>
        </a>
         @php
          $user = App\Models\User::find(2);
         @endphp
        <div class="well">
            <ul>
              @foreach ($user->unreadNotifications  as $notification) 
                 <li>NotifyAble User: : {{ $notification->data['name'] }}; </li>
                 @php $notification->markAsRead(); @endphp
              @endforeach
            </ul>
        </div>

      </div>
      @if(Auth::user())
    {{--   <div class="col-4 d-flex justify-content-end align-items-center">
        
      <a class="dropdown-item" href="{{ url('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

              <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
      </div> --}}
      @else
      <div class="col-3 d-flex justify-content-end align-items-center">
         <a href="{{ url('loginshow') }}">Login</a>
      </div>
      @endif
       
</div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
       <a class="btn btn-sm btn-outline-secondary" href="{{ url('dashboardForm') }}">Post Form</a>
     
        <a class="btn btn-sm btn-outline-secondary" href="{{ url('/') }}">Post All</a>
         <a class="btn btn-sm btn-outline-secondary" href="{{ url('lessonForm') }}">Lesson Form</a>
        <a class="btn btn-sm btn-outline-secondary" href="{{ url('/lessonAll') }}">Lesson All</a>
        <a class="btn btn-sm btn-outline-secondary" href="{{ url('/loginshow') }}">Login Form</a>
        <a class="btn btn-sm btn-outline-secondary" href="{{ url('/signupform') }}">SignUp Form</a>
      <a class="p-2 link-secondary" href="#">Culture</a>
      <a class="p-2 link-secondary" href="#">Business</a>
      <a class="p-2 link-secondary" href="#">Politics</a>
      <a class="p-2 link-secondary" href="#">Opinion</a>
      <a class="p-2 link-secondary" href="#">Science</a>
      <a class="p-2 link-secondary" href="#">Health</a>
      <a class="p-2 link-secondary" href="#">Style</a>
      <a class="p-2 link-secondary" href="#">Travel</a>
    </nav>
  </div>