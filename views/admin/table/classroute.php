<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	 <h1>Class Routing<small>preview</small></h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Class Route</li>
        <li class="active">Select Section</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="smaller-teacher">
    
         <a href="/e-records/admin/add-classroute" class="btn btn-submit add-plus"><i class="glyphicon glyphicon-plus"></i> Add Class Routing</a>
     	<div class="box box-solid box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title"><i class="glyphicon glyphicon-list"></i> Select Class</h3>
		    
		  </div>
		  <div class="box-body">
		    <form action="" method="POST">
		    	<div class="form-group">
				   <label for="crv_section" >Section:</label>
			       <select name="crv_section" id="crv_section" class="btn btn-default dropdown-toggle class-route-select">
				   	<option selected disabled>Select Section</option>
				   	<option value="">R1</option>
				   	<option value="">R1</option>
				   	<option value="">R1</option>
				   </select>
				</div>
				
				<div class="form-group">
					<label for="crv_yearlvl">Year Level:</label>
			       <select name="crv_yearlvl" id="crv_yearlvl" class="btn btn-default dropdown-toggle class-route-select">
				   	<option selected disabled>Select Year Level</option>
				   	<option value="">1st Year</option>
				   	<option value="">2nd Year</option>
				    <option value="">3rd Year</option>
				    <option value="">4th Year</option>
				   </select>
				</div>

				<div class="form-group"> 
				  <label for="year">School Year:</label>
				  <br>
				   <span>Start</span>
				  <input
				  	 type="text" 
				  	 name='year' 
				  	 id='year' 
				  	 placeholder="School Year"  
				  	 class="class-route-select datepicker">

				  <span>End</span>
				  <input 
				  	type="text" 
				  	name='year' 
				  	id='year' 
				  	placeholder="School Year"  
				  	class="class-route-select datepicker">
				</div>

			  <a href="/e-records/admin/classroute?view" class="btn btn-submit"> View Routing</a>
		    </form>
		  </div>
		
		</div>
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
		    <h3 class="box-title">2nd Year-R1</h3>
		    <div class="box-tools pull-right">
                <button type="button" class="btn btn-delete btn-sm delete_all" >Delete Records
                </button>
                 <input type="text" class="search-control input-sm" placeholder="Search...">
		        <span class="glyphicon glyphicon-search form-control-feedback"></span> 
		    </div>
		  </div><!-- /.box-header -->
			
		   <div class="box-body table-responsive">
		   <table class="table"> 
			<thead>
				<tr>
				    <th><input type="checkbox" id="master"></th>
					<th>Schedule</th>
					<th>Information</th>
					<th>Action</th>
				</tr>
				
			</thead>

			<tbody>
				<tr>
				     <td>
					     <form action="" method="POST" id="chkbox">
					     	<input type="checkbox" class="sub_chk" name="sub_chk" >
					     </form>
				     </td>
					<td>Sunday</td>
					<td>
						<span>English</span>
						<br>
						<span>Louie Seno</span>
						<br> 
						<span>2:00pm-3:00pm</span>
						<br>
						<span>9-206</span>
					</td>
					<td>
						<a href="/e-records/admin/editroute" class="btn btn-info">Edit</a>
						<a href="/e-records/admin/classroute?delete" class="btn btn-delete">Delete</a>
					</td>
				</tr>
				<tr>
				    <td>
					     <form action="" method="POST" id="chkbox">
					     	<input type="checkbox" class="sub_chk" name="sub_chk" >
					     </form>
			        </td>	
					<td>Monday</td>
					<td>
						<span>English</span>
						<br>
						<span>Louie Seno</span>
						<br> 
						<span>2:00pm-3:00pm</span>
						<br>
						<span>9-206</span>
					</td>
					<td>
						<a href="#" class="btn btn-info">Edit</a>
						<a href="#" class="btn btn-delete">Delete</a>
					</td>
				</tr>
				<tr>
				    <td>
					     <form action="" method="POST" id="chkbox">
					     	<input type="checkbox" class="sub_chk" name="sub_chk" >
					     </form>
			        </td>
					<td>Tuesday</td>
					<td>
						<span>English</span>
						<br>
						<span>Louie Seno</span>
						<br> 
						<span>2:00pm-3:00pm</span>
						<br>
						<span>9-206</span>
					</td>
					<td>
						<a href="#" class="btn btn-info">Edit</a>
						<a href="#" class="btn btn-delete">Delete</a>
					</td>
				</tr>
				<tr>
				   <td>
					     <form action="" method="POST" id="chkbox">
					     	<input type="checkbox" class="sub_chk" name="sub_chk" >
					     </form>
			        </td>
					<td>Wednesday</td>
					<td>
						<span>English</span>
						<br>
						<span>Louie Seno</span>
						<br> 
						<span>2:00pm-3:00pm</span>
						<br>
						<span>9-206</span>
					</td>
					<td>
						<a href="#" class="btn btn-info">Edit</a>
						<a href="#" class="btn btn-delete">Delete</a>
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
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->