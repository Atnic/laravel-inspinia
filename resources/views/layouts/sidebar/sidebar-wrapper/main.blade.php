<div class="sidebar-collapse">

  <ul class="nav metismenu" style="padding-left:0px;">
    <li class="nav-header">
      <div class="dropdown profile-element">
        <span>
          <img alt="image" class="img-circle" src="@yield('user-avatar', 'http://www.gravatar.com/avatar/?d=mm')" height="48px"/>
        </span>
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="clear">
            <span class="block m-t-xs">
              <strong class="font-bold">@yield('user-name', 'Admin')</strong>
            </span>
            <span class="text-muted text-xs block">@yield('user-text', 'Web Developer')<b class="caret"></b></span>
          </span>
        </a>
        <ul class="dropdown-menu animated fadeInRight m-t-xs">
          <li><a href="">Profile</a></li>
          <li><a href="">Contacts</a></li>
          <li><a href="">Mailbox</a></li>
          <li class="divider"></li>
          <li>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
          </li>
        </ul>
      </div>
      <div class="logo-element">
        IN+
      </div>
    </li>
  </ul>
  @section('sidebar-menu')
  <ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    <li class="">
      <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
      <ul class="nav nav-second-level">
        <li><a href="search_results.html">Search results</a></li>
        <li><a href="lockscreen.html">Lockscreen</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="login_two_columns.html">Login v.2</a></li>
        <li><a href="forgot_password.html">Forget password</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="404.html">404 Page</a></li>
        <li><a href="500.html">500 Page</a></li>
        <li class="active"><a href="empty_page.html">Empty page</a></li>
      </ul>
    </li>
  </ul>
@show
</div>
