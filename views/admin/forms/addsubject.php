<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   	<section class="content-header">
      <h1>Subject <small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Subject</li>
        <li>View Subjects</li>
        <li class="active">Add Subject</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="smaller-teacher">
     	<div class="box box-solid box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title"><i class="glyphicon glyphicon-plus"></i> Add Subject</h3>
		    
		  </div>

		 
		  <div class="box-body">
		   <div id="addsubject_message">
		  	
		  	</div>
		    <form action="" method="POST" id="addsubject-form">
		      <div class="form-group">
			    <label for="subject_name">Subject Name:</label>
			    <input type="text" class="form-control" id="subject_name" name="subject_name">
			  </div>

			  <div class="form-group">
			    <label for="subject_code">Subject Code:</label>
			    <input type="text" class="form-control" id="subject_code" name="subject_code">
			  </div>
		
			  <button type="submit" class="btn btn-submit">Submit</button>
			 <a href="/e-records/admin/subject" class="btn btn-reset"> Back</a>

		    </form>
		  </div>
		
		</div>
    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->