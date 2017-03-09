<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Exam <small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Exam</li>
        <li>View All Exams</li>
        <li class="active"> Add Exam</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="smaller-teacher">
     	<div class="box box-solid box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title"><i class="glyphicon glyphicon-plus"></i> Add Exam</h3>
		    
		  </div>
		  <div class="box-body">
		    <form action="" method="POST" id="exam-form" >
		    	 <div class="form-group">
				   <label for="ex_section">Section:</label><br>	
			       <select name="ex_section" id="ex_section" class=" class-route-select  btn btn-default dropdown-toggle" >
				   	<option selected disabled>Select Section</option>
				   	<option value="R1">R1</option>
				   	<option value="R1">R1</option>
				   	<option value="R1">R1</option>
				   </select>
				</div>
				
				<div class="form-group">
					<label for="ex_yearlvl">Year Level:</label>
			       <select name="ex_yearlvl" id="ex_yearlvl" class="btn btn-default dropdown-toggle class-route-select">
				   	<option selected disabled>Select Year Level</option>
				   	<option value="1st Year">1st Year</option>
				   	<option value="2nd Year">2nd Year</option>
				    <option value="3rd Year">3rd Year</option>
				    <option value="4th Year">4th Year</option>
				   </select>
				</div>
				
				<div class="form-group">
				   <label for="ex_subject">Subject:</label>
			       <select name="ex_subject" id="ex_subject" class=" class-route-select btn btn-default dropdown-toggle" >
				   	<option selected disabled>Select Subject</option>
				   	<option value="Math36">Math36</option>
				   	<option value="Math36">Math36</option>
				    <option value="Math36">Math36</option>
				   </select>
				</div>

                <div class="form-group">
				   <label for="ex_category">Category:</label>
			       <select name="ex_category" id="ex_category" class=" class-route-select btn btn-default dropdown-toggle">
				   	<option selected disabled>Select Category</option>
				   	<option value="Lecture">Lecture</option>
				   	<option value="Laboratory">Laboratory</option>
				   </select>
				</div>

                 <div class="form-group">
				   <label for="ex_term">Exam Term:</label><br>	
			       <select name="ex_term" id="ex_term" class=" class-route-select  btn btn-default dropdown-toggle">
				   	<option selected disabled>Select Term</option>
				   	<option value="Midterm">Midterm </option>
				   	<option value="Final">Final </option>
				   </select>
				</div>

				 <div class="form-group">
				    <label for="exam_name">Exam Name:</label>
				    <input type="text" class="form-control" id="exam_name" name="exam_name">
				</div>

				<div class="form-group">
				    <label for="ex_totalScore">Total Score:</label>
				    <input type="text"  class="form-control" id="ex_totalScore" name="ex_totalScore">
				</div>
				
				<label>Date:</label>

                <div class="input-group date form-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
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