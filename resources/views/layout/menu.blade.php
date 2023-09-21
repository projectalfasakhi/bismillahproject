<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              List Tampilan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="bar" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('pasiens.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pasien</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('pemeriksas.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Periksa</p>
              </a>
            </li>


          <li class="nav-item">
            <a href="{{ route('gejalas.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Gejala</p>
            </a>
          </li>
        </ul>

        <li class="nav-item">
            <a href="{{ route('charts') }}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
              <p>Grafik</p>
            </a>
          </li>

        <li class="nav-item">
            <a href="{{ route('pelayanan.index') }}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
              <p>Janji Temu</p>
            </a>
          </li>
</nav>
