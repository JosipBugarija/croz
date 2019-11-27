<!-- Main Sidebar Container --> 
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #121212 url({{ asset('img/sidebar.png') }}) no-repeat right">
  <!-- Brand Logo -->
  <a href="{{ route('jokes.index') }}" class="brand-link" style="height: 57px">
    <img src="{{ asset('/img/logo.png') }}" class="brand-image">
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            @auth
              <a href="{{ route('profile.index') }}" class="nav-link {!! classActiveSegment(1, 'profile') !!}">
                <i class="nav-icon fa fa-user"></i>
                <p>{{ auth()->user()->name }}</p>
              </a>
            @endauth
          </li>

          <li class="nav-item">
            <a href="{{ route('jokes.index') }}" class="nav-link {!! classActiveSegment(1, 'jokes') !!}">
              <i class="nav-icon fa fa-th-list"></i>
              <p>Jokes</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>