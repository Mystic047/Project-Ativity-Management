<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="<?php echo e('dashboard'); ?>">Activity</a>
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
                <li><a class="nav-link" href=" <?php echo e(route('student.manage')); ?> ">ข้อมูลนักศึกษา</a></li>
                <li><a class="nav-link" href=" <?php echo e('ActivitycoordinatorsManagement'); ?> ">ข้อมูลฝ่ายกิจกรรม</a></li>
                <li><a class="nav-link" href=" <?php echo e(route('professor.manage')); ?> ">ข้อมูลอาจารย์</a></li>
                <li><a class="nav-link" href=" <?php echo e('AdminManagement'); ?>">ข้อมูลผู้ดูแล</a></li>
            </ul>
          </li>
        <li class="dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-table"></i><span>จัดการข้อมูลสาขา</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href=" <?php echo e('FacultyManagement'); ?> ">จัดการข้อมูลสาขา</a></li>
            </ul>
        </li>

        

        

        

      </ul>


    </aside>
  </div>
<?php /**PATH G:\Mystic047-Project-Ativity-Management\Project-Ativity-Management\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>