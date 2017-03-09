<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	 <h1>Student<small>preview</small></h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Student</li>
        <li class="active">Select Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="smaller-teacher">
         <a href="/e-records/admin/add-student" class="btn btn-submit add-plus"><i class="glyphicon glyphicon-plus"></i> Add Student</a>
     	<div class="box box-solid box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title"><i class="glyphicon glyphicon-list"></i> Select Students</h3>
		    
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
				  <input type="text" name='year' id='year' placeholder="School Year">
				</div>

			  <a href="/e-records/admin/student?view" class="btn btn-submit"> View Student</a>
		    </form>
		  </div>
		
		</div>
    </section>


    <!-- Main content -->
    <section class="content">
		<div class="box  box-info">
		  <div class="box-header ">
		    <h3 class="box-title">List of Students</h3>
		    <div class="box-tools pull-right">
		      <div class="has-feedback">
		        <input type="text" class="form-control input-sm" placeholder="Search...">
		        <span class="glyphicon glyphicon-search form-control-feedback"></span>
		      </div>
		    </div>
		  </div><!-- /.box-header -->
			
		   <div class="box-body table-responsive">
		   <table class="table"> 
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
				
			</thead>

			<tbody>
				<tr>
					<td>40131</td>
					<td>Louie John Seno</td>
					<td>
						<a href="#" class="btn btn-status"> Activate</a>
					</td>
				</tr>
				<tr>
					<td>40131</td>
					<td>Louie John Seno</td>
					<td>
						<a href="#" class="btn btn-status"> Activate</a>
					</td>
				</tr>
				<tr>
					<td>40131</td>
					<td>Louie John Seno</td>
					<td>
						<a href="#" class="btn btn-status"> Activate</a>
					</td>
				</tr>
				<tr>
					<td>40131</td>
					<td>Louie John Seno</td>
					<td>
						<a href="#" class="btn btn-status"> Activate</a>
					</td>
					
				</tr>
				<tr>
					<td>40131</td>
					<td>Louie John Seno</td>
					<td>
						<a href="#" class="btn btn-status"> Activate</a>
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