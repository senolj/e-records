<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Classroom <small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Classroom</li>
        <li>View Classrooms</li>
        <li class="active"> Edit Classroom</li>
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
		    <h3 class="box-title"><i class="glyphicon glyphicon-pencil"></i> Edit Room</h3>
		    
		  </div>
		  <div class="box-body">
		    <form action="" method="POST" id="editroom-form">
		      <div id="editroom_message"></div>
		      <input type="hidden" id="roomID" name="roomID" value="<?php echo $get->roomID; ?>" >
		      <div class="form-group">
			    <label for="room">Room:</label>
			    <input type="text" class="form-control" id="room" name="room" value="<?php echo $get->roomName; ?>">
			  </div>
		
			  <button type="submit" class="btn btn-submit">Submit</button>
			 <a href="/e-records/admin/classroom" class="btn btn-reset"> Back</a>

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