<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Section <small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Section</li>
        <li class="active">View Sections</li>
      </ol>
    </section>

    <!-- Main content -->
   <section class="content">
     <?php 
     	if(isset($_GET['delete'])):
     		$id = $_GET['delete'];
     ?>

		<form method='POST' id="deletesection_form">
            <div class="callout callout-danger">
	          <p>Are you sure you want to delete record ?</p>
	        </div>

            <input type="hidden" id="idelete" name="idelete" value="<?php echo $id;?>" >

			<a href="" 
				class='btn btn-large btn-submit'
				type='submit'
				name='btn-del' 
				id="del" >
				<i class='glyphicon glyphicon-trash'></i>
				 &nbsp; YES</a>

			
			<a href='<?php echo base_url('admin/section');?>' class='btn btn-large btn-reset'>
			<i class='glyphicon glyphicon-backward'></i> &nbsp; NO</a>
			 
		</form>  
     <?php endif; ?>
       
     <br/>
     
     <div id="delete_notify"></div>
      <a href="/e-records/admin/add-section" class="btn btn-submit add-plus"><i class="glyphicon glyphicon-plus"></i> Add Section</a>
		<div class="box  box-info">
		  <div class="box-header ">
		    <h3 class="box-title">List of Sections</h3>

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
					<th>Section</th>
					<th>Limit</th>
					<th>Action</th>
				</tr>
				
			</thead>

			<tbody>
				<?php
			 		foreach($data as $get):
				?>
					<tr data-row-id="<?php echo $get->sectionID; ?>"> 
					    <td>
					     <form action="" method="POST" id="chkbox">
					     	<input type="checkbox" class="sub_chk" name="sub_chk" data-id="<?php echo $get->sectionID; ?>">
					     </form>
					    </td>
						<td><?php echo $get->sectionID;?></td>
						<td><?php echo $get->sectionName;?></td>
						<td><?php echo $get->sectionLimit;?></td>
						<td>
							<a href="<?php echo base_url('admin/edit-section/').$get->sectionID;?>" 
							class="btn btn-info">Edit</a>
							<a href="/e-records/admin/section?delete=<?php echo $get->sectionID; ?>" class="btn btn-delete">Delete</a>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		   </table>
		  </div><!-- /.box-body -->
		  <div class="box-footer">
		  	<div class="box-tools pull-right">
		        <ul class="pagination pagination-md inline">
		         <?php echo $this->pagination->Create_links();?>
		        </ul>
		     </div>
		  </div>
		  </div>

    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->