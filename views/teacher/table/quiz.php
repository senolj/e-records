<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Quiz<small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Quiz</li>
        <li class="active">Quiz Criteria</li>
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
      <a href="/e-records/teacher/add-quiz" class="btn btn-submit add-plus"><i class="glyphicon glyphicon-plus"></i> Add Quiz</a>
		<div class="box  box-info">
		  <div class="box-header ">
		    <h3 class="box-title">List of All Quizzess</h3>
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
					<th>Quiz Name</th>
					<th>Section</th>
					<th>Year Level</th>
					<th>Subject</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
				
			</thead>

			<tbody>
				<tr>
					<td>1</td>
					<td>Quiz Name</td>
					<td>R1</td>
					<td>2nd Year</td>
					<td>English</td>
					<td>03/09/2017</td>
					<td>
						<a href="/e-records/teacher/edit-quiz" class="btn btn-info">Edit</a>
						<a href="/e-records/teacher/quiz?delete" class="btn btn-delete">Delete</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Quiz Name</td>
					<td>R1</td>
					<td>2nd Year</td>
					<td>English</td>
					<td>03/09/2017</td>
					<td>
						<a href="/e-records/teacher/edit-quiz" class="btn btn-info">Edit</a>
						<a href="/e-records/teacher/quiz?delete" class="btn btn-delete">Delete</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Quiz Name</td>
					<td>R1</td>
					<td>2nd Year</td>
					<td>English</td>
					<td>03/09/2017</td>
					<td>
						<a href="/e-records/teacher/edit-quiz" class="btn btn-info">Edit</a>
						<a href="/e-records/teacher/quiz?delete" class="btn btn-delete">Delete</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Quiz Name</td>
					<td>R1</td>
					<td>2nd Year</td>
					<td>English</td>
					<td>03/09/2017</td>
					<td>
						<a href="/e-records/teacher/edit-quiz" class="btn btn-info">Edit</a>
						<a href="/e-records/teacher/quiz?delete" class="btn btn-delete">Delete</a>
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