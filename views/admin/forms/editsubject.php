<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   	<section class="content-header">
      <h1>Subject <small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Subject</li>
        <li>View Subjects</li>
        <li class="active">Edit Subject</li>
      </ol>
    </section>
     <?php
        if(@$records):
 			foreach($records as $get):
	?>
			 
    <!-- Main content -->
    <section class="content" id="smaller-teacher">
     	<div class="box box-solid box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title"><i class="glyphicon glyphicon-pencil"></i> Edit Subject</h3>
		    
		  </div>
		  <div class="box-body">
		    <form action="" method="POST" id="editsubject-form">
		    <div id="editsubject_message"></div>
		      <input type="hidden" id="subjectID" name="subjectID" value="<?php echo $get->subjectID; ?>"/>
		      <div class="form-group">
			    <label for="subject_name">Subject Name:</label>
			    <input type="text" class="form-control" id="subject_name" name="subject_name" value="<?php echo $get->subjectName; ?>"/>
			  </div>

			  <div class="form-group">
			    <label for="subject_code">Subject Code:</label>
			    <input type="text" class="form-control" id="subject_code" name="subject_code" value="<?php echo $get->subjectCode; ?>"/>
			  </div>
		
			  <button type="submit" class="btn btn-submit">Submit</button>
			 <a href="/e-records/admin/subject" class="btn btn-reset"> Back</a>

		    </form>
		  </div>
		
		</div>
    </section>

   <?php 
       endforeach;
   	endif;
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->