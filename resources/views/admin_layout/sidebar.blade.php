<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.home')}}">
        <i class="fa fa-bars"></i>
        <span class="menu-title">Home</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
        aria-controls="form-elements">


        <i class="fa fa-cog "></i>
        <span class="menu-title"> Settings</span>
        <i class="menu-arrow"></i>
      </a>


      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.social_show')}}">Social Network</a>
          </li>
        </ul>
      </div>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.communication_show')}}">Communication</a>
          </li>
        </ul>
      </div>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.about_show')}}">About</a>
          </li>
        </ul>
      </div>

    </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-element" aria-expanded="false"
        aria-controls="form-elements">


        <i class="fa fa-tags"></i>
        <span class="menu-title"> Categories</span>
        <i class="menu-arrow"></i>
      </a>


      <div class="collapse" id="form-element">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.movcategory')}}">Movie Category</a>
          </li>
        </ul>
      </div>
      <div class="collapse" id="form-element">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.blogcategory')}}">Blog Category</a>
          </li>
        </ul>
      </div>

    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.user_show')}}">
        <i class="fa fa-users"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.blog_show')}}">
        <i class="fa fa-blog"></i>
        <span class="menu-title">Blog</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.contact_show')}}">
        <i class="fa fa-envelope"></i>
        <span class="menu-title">Contact</span>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.mov_show')}}">
        <i class="fa fa-film"></i>
        <span class="menu-title">Movies</span>
      </a>
    </li>


  </ul>
</nav>