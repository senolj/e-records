<?php $this->load->view('partials/header.php'); ?>

<div class="wrapper ">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/e-records/teacher/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo base_url('resources/assets/img/logo.png'); ?>" class="user-image" id="logo-header" alt="User Image" > </span>
      <!-- logo for regular state and mobile devices -->
      <div class="logo-display"> 
        <img src="<?php echo base_url('resources/assets/img/logo.png'); ?>" class="user-image" id="logo-header" alt="User Image" > 
        <span>E-Records</span>
      </div>
      
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
           
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <i class="fa fa-user-circle"></i>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu custom-dropdown">
              <!-- Menu Footer-->
              <li class='header'>
                  <a href="#" class="text-center"><i class="glyphicon glyphicon-pencil"></i> Change Password</a>
              </li>
              <li role='separator' class='divider'></li>
              <li class='header'>
                  <a href="#" class="text-center"><i class="glyphicon glyphicon-log-out"></i> Sign out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Main Navigation</li>
        <!-- Optionally, you can add icons to the links -->
        <li>
          <a href="<?php echo base_url("teacher");?>">
          <i class="fa fa-group"></i><span>Classes</span></a>
        </li>
        <li>
          <a href="<?php echo base_url("teacher/exams");?>">
          <i class="fa fa-pencil-square-o"></i><span>Exam</span></a>
        </li>
        <li>
          <a href="<?php echo base_url("teacher/student-exams");?>">
          <i class="fa fa-th-list"></i><span>Student Exam</span></a>
        </li>
        <li>
          <a href="<?php echo base_url("teacher/project");?>"">
          <i class="fa fa-pencil-square-o "></i> <span>Project</span></a>
        </li>
        <li>
          <a href="<?php echo base_url("teacher/student-project");?>">
          <i class="fa fa-th-list"></i> <span>Student Project</span></a>
        </li>
        <li>
          <a href="<?php echo base_url("teacher/quiz")?>">
          <i class="fa fa-pencil-square-o"></i><span>Quizzes</span></a></li>
        <li>
          <a href="<?php echo base_url("teacher/student-quiz")?>">
          <i class="fa fa-th-list"></i><span>Student Quizzes</span></a>
        </li> 
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <?php echo $yield;?>


  <!-- Main Footer -->
 <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#"> &nbsp; E-Records </a>.</strong> &nbsp; All rights reserved.
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('partials/footer.php'); ?>