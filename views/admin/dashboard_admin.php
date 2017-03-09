<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard</h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content admin-content">
      <!-- Small boxes (Stat box) -->
      <div class="row ">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Total Student</p>
            </div>
            <div class="icon">
              <i class="fa fa-mortar-board"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>150</h3>

              <p>Total Teachers</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>    
            <div class="inner">
              <h3>44</h3>

              <p>Total Parents</p>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Total Classes</p>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
     <section class="content">
     <?php 
      if(isset($_GET['delete'])):
        $id = $_GET['delete'];
     ?>

    <form method='POST' id="deletesubject_form">
            <div class="callout callout-danger">
            <h4>Warning!</h4>

            <p>Are you sure you want to delete record # <?php echo $id; ?> ?</p>
          </div>

            <input type="hidden" id="idelete" name="idelete" value="<?php echo $id;?>" >

      <a href="" 
        class='btn btn-large btn-submit'
        type='submit'
        name='btn-del' 
        id="del" >
        <i class='glyphicon glyphicon-trash'></i>
         &nbsp; YES</a>

      
      <a href='<?php echo base_url('admin/subject');?>' class='btn btn-large btn-reset'>
      <i class='glyphicon glyphicon-backward'></i> &nbsp; NO</a>
       
    </form>  
     <?php endif; ?>
       
     <br/>
     
     <div id="delete_notify"></div>

     <a href="/e-records/admin/add-subject" class="btn btn-submit add-plus"><i class="glyphicon glyphicon-plus"></i> Add Percentage</a>
    <div class="box  box-info">
       <div class="box-header ">
        <h3 class="box-title">List of Percentage</h3>

        <div class="box-tools pull-right">
                <button type="button" class="btn btn-delete btn-sm delete_all" >Delete Records
                </button>
                 <input type="text" class="search-control input-sm" placeholder="Search...">
            <span class="glyphicon glyphicon-search form-control-feedback"></span> 
        </div>
      </div><!-- /.box-header -->
      
       <div class="box-body table-responsive">
       <table class="table" id="refresh"> 
      <thead>
        <tr>
           <th><input type="checkbox" id="master"></th>
          <th>ID</th>
          <th>Laboratory</th>
          <th>Lecture</th>
          <th>Action</th>
        </tr>
        
      </thead>

      <tbody >
         <tr> 
            <td> 
              <form action="" method="POST" id="chkbox">
                <input type="checkbox" class="sub_chk" name="sub_chk">
              </form>
            </td>
            <td>1</td>
            <td>40%</td>
            <td>60%</td>
            <td>
              <a href="/e-records/teacher/edit-exam" class="btn btn-info">Edit</a>
              <a href="/e-records/teacher/exams?delete" class="btn btn-delete">Delete</a>
            </td>
         </tr>
         <tr> 
            <td> 
              <form action="" method="POST" id="chkbox">
                <input type="checkbox" class="sub_chk" name="sub_chk">
              </form>
            </td>
            <td>1</td>
            <td>40%</td>
            <td>60%</td>
            <td>
              <a href="/e-records/teacher/edit-exam" class="btn btn-info">Edit</a>
              <a href="/e-records/teacher/exams?delete" class="btn btn-delete">Delete</a>
            </td>
         </tr>
         <tr> 
            <td> 
              <form action="" method="POST" id="chkbox">
                <input type="checkbox" class="sub_chk" name="sub_chk">
              </form>
            </td>
            <td>1</td>
            <td>40%</td>
            <td>60%</td>
            <td>
              <a href="/e-records/teacher/edit-exam" class="btn btn-info">Edit</a>
              <a href="/e-records/teacher/exams?delete" class="btn btn-delete">Delete</a>
            </td>
         </tr>
      </tbody>
       </table>

      </div><!-- /.box-body -->
      <div class="box-footer">
        <div class="box-tools pull-right">
           <ul class="pagination pagination-md inline">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
      </div>
      </div>
    </section>
  </div>


  <!-- /.content-wrapper -->