<div class="  border-warning border-end h-100">
   <div class="text-center">
      <img  src=" {{ asset('images/avt.png')}} " class="rounded-circle mt-3   img-fluid" alt="image not found"/>
      <h3 class="text-white mt-3 text-uppercase">Royal Mad</h3>
   </div>
   <nav class=" nav text-center flex-column mt-4">
      <a class="nav-link text-white {{Request::routeIs('home') ? 'active':'' }}" href=" {{ route('home')   }}">Home</a>
      <a class="nav-link text-white {{Request::routeIs('service') ? ' active':''}}" href="{{ route('service') }}">Service</a>
      <a class="nav-link text-white {{Request::routeIs('contact') ? ' active':''}}" href="{{ route('contact') }}">Contact</a>
      <a class="nav-link text-white {{Request::routeIs('form') ? ' active':''}}" href="{{ route('form') }}">Form</a>
      <a class="nav-link text-white {{Request::routeIs('student') ? ' active':''}}" href="{{ route('student') }}">Student</a>
   </nav>
</div>