<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light navigation">
          <a class="navbar-brand" href="{{route('visitor.home')}}">
            <h1>BOOKSHELF</h1>
            {{--            <img src="{{asset('assets/images/logo.png')}}" alt="">--}}
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto main-nav ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Collections</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Authors</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Members</a>
              </li>
{{--              <li class="nav-item dropdown dropdown-slide">--}}
{{--                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i--}}
{{--                      class="fa fa-angle-down"></i></span>--}}
{{--                </a>--}}

{{--                <!-- Dropdown list -->--}}
{{--                <div class="dropdown-menu">--}}
{{--                  <a class="dropdown-item" href="dashboard.html">Dashboard</a>--}}
{{--                  <a class="dropdown-item" href="dashboard-my-ads.html">Dashboard My Ads</a>--}}
{{--                  <a class="dropdown-item" href="dashboard-favourite-ads.html">Dashboard Favourite Ads</a>--}}
{{--                  <a class="dropdown-item" href="dashboard-archived-ads.html">Dashboard Archived Ads</a>--}}
{{--                  <a class="dropdown-item" href="dashboard-pending-ads.html">Dashboard Pending Ads</a>--}}
{{--                </div>--}}
{{--              </li>--}}
{{--              <li class="nav-item dropdown dropdown-slide">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                   aria-expanded="false">--}}
{{--                  Pages <span><i class="fa fa-angle-down"></i></span>--}}
{{--                </a>--}}
{{--                <!-- Dropdown list -->--}}
{{--                <div class="dropdown-menu">--}}
{{--                  <a class="dropdown-item" href="about-us.html">About Us</a>--}}
{{--                  <a class="dropdown-item" href="contact-us.html">Contact Us</a>--}}
{{--                  <a class="dropdown-item" href="user-profile.html">User Profile</a>--}}
{{--                  <a class="dropdown-item" href="404.html">404 Page</a>--}}
{{--                  <a class="dropdown-item" href="package.html">Package</a>--}}
{{--                  <a class="dropdown-item" href="single.html">Single Page</a>--}}
{{--                  <a class="dropdown-item" href="store.html">Store Single</a>--}}
{{--                  <a class="dropdown-item" href="single-blog.html">Single Post</a>--}}
{{--                  <a class="dropdown-item" href="blog.html">Blog</a>--}}
{{--                </div>--}}
{{--              </li>--}}
{{--              <li class="nav-item dropdown dropdown-slide">--}}
{{--                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                   aria-expanded="false">--}}
{{--                  Listing <span><i class="fa fa-angle-down"></i></span>--}}
{{--                </a>--}}
{{--                <!-- Dropdown list -->--}}
{{--                <div class="dropdown-menu">--}}
{{--                  <a class="dropdown-item" href="category.html">Ad-Gird View</a>--}}
{{--                  <a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>--}}
{{--                </div>--}}
{{--              </li>--}}
            </ul>
            <ul class="navbar-nav ml-auto mt-10">
              @auth
                <li class="nav-item">
                  <a class="nav-link text-white add-button" href="{{ route('member.profile') }}">
                    <i class="fa fa-user-circle"></i><span class="ml-2">{{auth()->user()->name}}</span>
                  </a>
                </li>
                <li class="ml-2 nav-item">
                  <a class="nav-link login-button" href="#" onclick="document.getElementById('logout').submit()">Logout</a>
                </li>
                <form class="hide" action="{{ route('logout') }}" id="logout" method="POST">@csrf</form>
              @else
                <li class="nav-item">
                  <a class="nav-link login-button" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link login-button" href="{{ route('register') }}">Register</a>
                </li>
              @endauth
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>
