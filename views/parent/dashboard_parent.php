<div class="content-wrapper">
  <?php
     if(isset($_GET['id'])):
      $id = $_GET['id'];
  ?>
 <!--  Content Header (Page header) -->
   <section class="content-header">
    <h1>Student Class<small>preview</small></h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Home</li>
        <li class="active">Class</li>
      </ol>
    </section>
  
   
    <section class="content">
     
    <div class="box  box-info">
      <div class="box-header ">
        <h3 class="box-title">List of Louie John's Classes</h3>
        <br>
        <br>
        <h3 class="box-title"><span style="font-weight:bold;">Section:</span> 3rd Year-3R1</h3>
        <div class="box-tools pull-right">
          <div class="has-feedback">
            <input type="text" class="form-control input-sm" placeholder="Search...">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
          </div>
        </div>
      </div>
      
       <div class="box-body table-responsive">
       <table class="table"> 
        <thead>
          <tr>
            <th>Subject</th>
            <th>Room</th>
            <th>Schedule</th>
          </tr>
          
        </thead>
  
        <tbody>
          <tr>
            <td>English</td>
            <td>9-206</td>
            <td> 
              <span>Saturday</span>
              <br>
              <span>9:00-10:30</span>
            </td>
          </tr>
           <tr>
            <td>English</td>
            <td>9-206</td>
            <td> 
              <span>Saturday</span>
              <br>
              <span>9:00-10:30</span>
            </td>
          </tr>
           <tr>
            <td>English</td>
            <td>9-206</td>
            <td> 
              <span>Saturday</span>
              <br>
              <span>9:00-10:30</span>
            </td>
          </tr>
           <tr>
            <td>English</td>
            <td>9-206</td>
            <td> 
              <span>Saturday</span>
              <br>
              <span>9:00-10:30</span>
            </td>
          </tr>
           <tr>
            <td>English</td>
            <td>9-206</td>
            <td> 
              <span>Saturday</span>
              <br>
              <span>9:00-10:30</span>
            </td>
          </tr> 
        </tbody>
       </table>
      </div>
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
    <?php endif;?> 
  </div>
  <!-- /.content-wrapper -->