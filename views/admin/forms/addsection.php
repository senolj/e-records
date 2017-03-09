<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Section <small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Section</li>
        <li>View Sections</li>
        <li class="active">Add Section</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="smaller-teacher">
     	<div class="box box-solid box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title"><i class="glyphicon glyphicon-plus"></i> Add Section</h3>
		    
		  </div>
		  <div class="box-body">
		    <form action="" method="POST" id="addsection-form">
		     <div id="addsection_message"></div>
		      <div class="form-group">
			    <label for="section_name">Section Name:</label>
			    <input type="text" class="form-control" id="section_name" name="section_name" >
			  </div>

			  <div class="form-group">
			    <label for="section_limit">Section Limit:</label>
			    <input type="text" class="form-control" id="section_limit" name="section_limit" >
			  </div>
		
			  <button type="submit" class="btn btn-submit">Submit</button>
			 <a href="/e-records/admin/section" class="btn btn-reset"> Back</a>

		    </form>
		  </div>
		
		</div>
    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->