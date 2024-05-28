    <!-- Sidebar -->
    @php
      $user_id  = Session::get('userID');
      $user     = DB::table('wp.users')->where('user_id', '=', $user_id)->first();     
    @endphp 
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/images/man.svg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ $user->user_type }}</a>
        </div>
      </div>

      @if($user->user_type == 'Admin')
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <!-- <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('/') ? 'active' : null }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li> -->
          
            <li class="nav-item">
              <a href="{{ route('project') }}" class="nav-link {{ Request::is('project') ? 'active' : null }}">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Projects
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('administrator') }}" class="nav-link {{ Request::is('administrator') ? 'active' : null }}">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Administrator
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      @elseif($user->user_type == 'Manager')
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <!-- <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('/') ? 'active' : null }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li> -->
          
            <li class="nav-item">
              <a href="{{ route('project') }}" class="nav-link {{ Request::is('project') ? 'active' : null }}">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Projects
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('ApprovalProject') }}" class="nav-link {{ Request::is('ApprovalProject') ? 'active' : null }}">
                <i class="nav-icon fas fa-clipboard-check"></i>
                <p>
                  Approval project
                </p>
              </a>
            </li>

          </ul>
        </nav>

      @elseif($user->user_type == 'Pengawas Lapangan')
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <!-- <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('/') ? 'active' : null }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li> -->
          
            <li class="nav-item">
              <a href="{{ route('project') }}" class="nav-link {{ Request::is('project') ? 'active' : null }}">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Projects
                </p>
              </a>
            </li>

          </ul>
        </nav>

      @endif
  
     
    <!-- /.sidebar -->