  <!-- Navbar -->
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white;"></i></a>
      </li>
    </ul>  

    @php
        $user_id  = Session::get('userID');
        $username = DB::table('wp.users')->where('user_id', '=', $user_id)->first();     
    @endphp
     
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle nama" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="{{ asset("images/man.svg") }}" class="user-image" alt="User Image"/>
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs nama">{{ $username->user_id }} - {{ $username->username }}</span>
        </a>
        <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
                <img src="{{ asset("images/man.svg") }}" class="img-circle" alt="User Image" />
                <p>
                    <span>{{ $username->user_id }} - {{ $username->username }}</span>
                    <small>{{ $username->user_type }}</small>
                </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="d-flex flex-nowrap">
                  <div class="col kafan">
                    <form action="{{ route('logout') }}">
                      <button class="btn btn-danger" style="float: center;"><i class="nav-icon fas fa-sign-out-alt"></i>Sign out</button>
                    </form>
                  </div>
                </div>
            </li>
        </ul>
    </li>
    </ul>
    
    <style>
      .box-menu{
        border-radius: 10px;
      }
      .kafan{
        text-align: center;
      }
      .nama{
        color: white;
      }
    </style>