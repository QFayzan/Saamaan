<nav class="main-header navbar navbar-expand bg-primary navbar-dark border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>
    
    <div class="navbar-nav mx-auto">
        <h3 class="text-center">
            @yield("nav-title")
        </h3>
    </div>
  
    <ul class="navbar-nav ml-auto">
        @if(auth()->user()->type=='client')
        <li class="nav-item">
            <a class="nav-link" href="{{route('rates')}}">Rate List</a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
    </ul>
    
</nav>