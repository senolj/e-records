<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Attendance<small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Exam</li>
        <li class="active">Exam Criteria</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php if(isset($_GET['delete'])):?>
    <div class="callout callout-danger">
          <h4>Warning!</h4>

          <p>Are you sure you want to delete this record # 12?.</p>
        </div>

    <form method='post'>
      <button class='btn btn-large btn-submit' type='submit' name='btn-del'><i class='glyphicon glyphicon-trash'></i> &nbsp; YES</button>
      <a href='job_category.php' class='btn btn-large btn-reset'><i class='glyphicon glyphicon-backward'></i> &nbsp; NO</a>
    </form>  
     <?php endif; ?>
     <br/>
    <div class="box  box-info">
      <div class="box-header ">
        <h3 class="box-title"><span style="font-weight:bold;">Section:</span> 3rd Year-R1</h3>
        <br>
        <br>
         <h3 class="box-title"><span style="font-weight:bold;">Subject:</span> English</h3>
        <br>
        <br>
         <h3 class="box-title"><span style="font-weight:bold;">Date:</span> February 30,2017</h3>
       
        <div class="box-tools pull-right">
             
            <input type="text" class="search-control input-sm" placeholder="Search...">
            <span class="glyphicon glyphicon-search form-control-feedback"></span> 
        </div>
      </div><!-- /.box-header -->
      
       <div class="box-body table-responsive">
       <table class="table"> 
      <thead>
        <tr>
          
          <th>ID</th>
          <th>Name</th>
          <th><input type="checkbox" id="master"></th>
        </tr>
        
      </thead>

      <tbody>
        <tr>
         
          <td>2013102163</td>
          <td>Louie John Seno</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
         
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
         
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
        <tr>
          <td>2013102163</td>
          <td>Jushua Laoman</td>
           <td>
            <form action="" method="POST" id="chkbox">
              <input type="checkbox" class="sub_chk" name="sub_chk" >
            </form>
          </td>
        </tr>
      </tbody>
       </table>
       <div class="pull-right input-btn">
              <button type="button" class="btn  btn-reset save-btn">Save</button>
              <button type="button" class="btn  btn-delete save-btn">Cancel</button>
          </div>
      </div><!-- /.box-body -->
      
    </div>

    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->