
	
	<script
		type="text/javascript"
		src="<?php echo base_url('resources/vendors/jquery/jquery-3.1.1.js');?>"	
	></script>
	
	<script 
		type="text/javascript"
		src="<?php echo base_url('resources/vendors/bootstrap/js/bootstrap.js');?>"	
	></script>
	
	<?php 
		if(@$script):
			foreach($script as $scripts):
	?>
	<script 
	type="text/javascript"
	src="<?php echo base_url($scripts);?>"
	></script>
	<?php 
		endforeach;
	endif;
	?>
	<?php 
		if(@$script2):
	?>
	<script 
	type="text/javascript"
	src="<?php echo base_url($script2);?>"
	></script>
	<?php 
	endif;
	?>
	
</body>
</html>