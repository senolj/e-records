<?php $this->load->view('partials/header.php'); ?>

<div class="wrapper ">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/e-records/parents/" class="logo">
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
           <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

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
         <li class="treeview">
          <a href="#"><i class="fa fa-user-o"></i> <span>Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/e-records/parents?add-student"><i class="fa fa-plus"></i>Add Student</a></li>
               <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Parent code">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa  fa-plus-square"></i>
                        </button>
                      </span>
                </div>
              </form>
            <li><a href="/e-records/parents/student?id=2013102163">Louie John</a></li>
            <li><a href="/e-records/parents/student?id=2013102164">John Louie</a></li>
          </ul>
        </li>
        <?php 
          if(isset($_GET['id'])):
            $id = $_GET['id'];
        ?>
        <li>
          <a href="<?php echo base_url("parents/exam?id=$id"); ?>">
          <i class="fa fa-th-list"></i><span>Student Exam</span></a>
        </li>
        <li>
          <a href="<?php echo base_url("parents/project?id=$id"); ?>">
          <i class="fa fa-th-list "></i> <span>Student Project</span></a>
        </li>
        <li>
          <a href="<?php echo base_url("parents/quiz?id=$id");?>">
          <i class="fa fa-th-list"></i> <span> Student Quizzes</span></a>
        </li>  
        <li>
          <a href="<?php echo base_url("parents/grades?id=$id");?>"><i class="fa fa-th-list">
          </i> <span> Student Grades</span></a>
        </li>   
        <?php endif;?>      
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
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('partials/footer.php'); ?>