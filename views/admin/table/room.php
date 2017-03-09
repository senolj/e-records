<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Classroom</h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Classroom</li>
        <li class="active">View Classrooms</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   <section class="content">
     <?php 
     	if(isset($_GET['delete'])):
     		$id = $_GET['delete'];
     ?>

		<form method='POST' id="deleteroom_form">
            <div class="callout callout-danger">
	          <h4>Warning!</h4>

	          <p>Are you sure you want to delete record # <?php echo $id; ?> ?</p>
	        </div>

            <input type="hidden" id="idelete" name="idelete" value="<?php echo $id;?>" >

			<a href="" 
				class='btn btn-large btn-submit'
				type='submit'
				name='btn-del' 
				id="del" >
				<i class='glyphicon glyphicon-trash'></i>
				 &nbsp; YES</a>

			
			<a href='<?php echo base_url('admin/classroom');?>' class='btn btn-large btn-reset'>
			<i class='glyphicon glyphicon-backward'></i> &nbsp; NO</a>
			 
		</form>  
     <?php endif; ?>
       
     <br/>
     
     <div id="delete_notify"></div>

     <a href="/e-records/admin/add-room" class="btn btn-submit add-plus"><i class="glyphicon glyphicon-plus"></i> Add Classroom</a>
		<div class="box  box-info">
		  <div class="box-header ">
		    <h3 class="box-title">List of Classrooms</h3>

		    <div class="box-tools pull-right">
                <button type="button" class="btn btn-delete btn-sm delete_all" >Delete Records
                </button>
                 <input type="text" class="search-control input-sm" placeholder="Search...">
		        <span class="glyphicon glyphicon-search form-control-feedback"></span> 
		    </div>
		  </div><!-- /.box-header -->
			
		   <div class="box-body table-responsive">
		   <table class="table" id="refresh"> 
			<thead>
				<tr>
				    <th><input type="checkbox" id="master"></th>
					<th>ID</th>
					<th>Room</th>
					<th>Action</th>
				</tr>
				
			</thead>

			<tbody>
			    <?php
			 		foreach($data as $get):
				?>
					<tr> 
					     <td>
						     <form action="" method="POST" id="chkbox">
						     	<input type="checkbox" class="sub_chk" name="sub_chk" >
						     </form>
					     </td>
						<td><?php echo $get->roomID;?></td>
						<td><?php echo $get->roomName;?></td>
						<td>
							<a href="<?php echo base_url('admin/edit-room/').$get->roomID;?>" 
							class="btn btn-info">Edit</a>
							<a href="/e-records/admin/classroom?delete=<?php echo $get->roomID; ?>" class="btn btn-delete">Delete</a>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		   </table>
		  </div><!-- /.box-body -->
		  <div class="box-footer">
		  	<div class="box-tools pull-right">
		         <?php echo $this->pagination->Create_links();?>
		     </div>
		  </div>
		  </div>
    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->