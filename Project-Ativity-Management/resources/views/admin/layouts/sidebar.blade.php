<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ 'dashboard' }}">Activity</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">ATVM</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown active">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li class=active><a class="nav-link" href="index-0.html">General Dashboard</a></li>
            <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
          </ul>
        </li>
        <li class="menu-header">Starter</li>
        <li class="dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>จัดการข้อมูลผู้ใช้</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href=" {{route('student.manage')}} ">ข้อมูลนักศึกษา</a></li>
                <li><a class="nav-link" href=" {{ 'ActivitycoordinatorsManagement' }} ">ข้อมูลฝ่ายกิจกรรม</a></li>
                <li><a class="nav-link" href=" {{'ProfessorManagement'}} ">ข้อมูลอาจารย์</a></li>
                <li><a class="nav-link" href=" {{'AdminManagement'}}">ข้อมูลผู้ดูแล</a></li>
            </ul>
          </li>
        <li class="dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-table"></i><span>จัดการข้อมูลสาขา</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href=" {{'FacultyManagement'}} ">จัดการข้อมูลสาขา</a></li>
            </ul>
        </li>

        {{-- <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>จัดการข้อมูลผู้ใช้</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="">ข้อมูลนักศึกษา</a></li>
            <li><a class="nav-link" href="">ข้อมูลฝ่ายกิจกรรม</a></li>
            <li><a class="nav-link" href="">ข้อมูลอาจารย์</a></li>
            <li><a class="nav-link" href="">ข้อมูลผู้ดูแล</a></li>
          </ul>
        </li> --}}

        {{-- <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
          </ul>
        </li> --}}

        {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}

      </ul>


    </aside>
  </div>
