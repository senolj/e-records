<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Exam <small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Exam</li>
        <li>View All Exams</li>
        <li class="active"> Edit Exam</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="smaller-teacher">
     	<div class="box box-solid box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title"><i class="glyphicon glyphicon-pencil"></i> Edit Exam</h3>
		    
		  </div>
		  <div class="box-body">
		    <form action="" method="POST">
		    	 <div class="form-group">
				   <label for="ex_section">Section:</label><br>	
			       <select name="ex_section" id="ex_section" class=" class-route-select  btn btn-default dropdown-toggle">
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
				   <label for="cr_subject">Subject:</label>
			       <select name="cr_subject" id="cr_subject" class=" class-route-select btn btn-default dropdown-toggle">
				   	<option selected disabled>Select Subject</option>
				   	<option value="">Math36</option>
				   	<option value="">Math36</option>
				    <option value="">Math36</option>
				   </select>
				</div>

				<div class="form-group">
				   <label for="ex_section">Exam Name:</label><br>	
			       <select name="ex_section" id="ex_section" class=" class-route-select  btn btn-default dropdown-toggle">
				   	<option selected disabled>Select Exam</option>
				   	<option value="Writen Preliminary Exam">Writen Preliminary Exam</option>
				   	<option value="Laboratory Preliminary Exam">Laboratory Preliminary Exam</option>
				    <option value="Writen Midterm Exam">Writen Midterm Exam</option>
				    <option value="Laboratory Midterm Exam">Laboratory Midterm Exam</option>
				    <option value="Written Semifinal Exam">Written Semifinal Exam</option>
				    <option value="Laboratory Semifinal Exam">Laboratory Semifinal Exam</option>
				    <option value="Written Final Exam">Written Final Exam</option>
				    <option value="Laboratory Final Exam">Laboratory Final Exam</option>
				   </select>
				</div>

				<div class="form-group">
				    <label for="t_score">Total Score:</label>
				    <input type="text" maxlength="5"  class="form-control" id="t_score" name="t_score">
				</div>
				
				<div class="form-group">
					<label for="cr_day">Day:</label>
			       <input type="date" class="form-control">
				</div>

				<div class="form-group">
				   <label for="start">Time Start:</label>
			       <input type="time" name="start" placeholder="Time Start" class="class-route-select">
				</div>
			
				<div class="form-group">
				   <label for="end">Time End:</label>
			       <input type="time" name="end" placeholder="Time End"  class="class-route-select">
				</div>
		
		
			  <button type="submit" class="btn btn-submit">Submit</button>
			 <a href="/e-records/teacher/exams" class="btn btn-reset"> Back</a>

		    </form>
		  </div>
		
		</div>
    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->