<header> 
	<div id="header-wrap" > 
	<div class="container-fluid hidden-xs">
		<div class="pull-left"> 
			<img src="<?php echo base_url('resources/assets/img/logo.png'); ?>" alt=""  
			style="width:62px; height:62px;">
		</div>
		<div class="pull-right "> 
			<a href="" class="btn sign-up" data-toggle="modal" data-target="#signupModal">Parent Sign Up</a>
			<a href="" class="btn login" data-toggle="modal" data-target="#loginModal">Login</a>     
		</div>
		
	</div>
    <div class="visible-xs main-xs-form"> 
		<center> 
			<div class="container-fluid"> 

		        <div class="mini-wrap" style="float:left;"> 
                   
		        </div>
		        <h1 class="xs-h1">E-Records</h1>
			   
                <a href="" class="btn xs-sign-up form-control" data-toggle="modal" data-target="#signupModal">
                	Parent Sign Up</a>
                <br>
				<a href="" class="btn xs-login form-control" data-toggle="modal" data-target="#loginModal">Login</a>    
			</div>
		</center>
    </div>
	<div class="container-fluid hidden-xs"> 
		<h1 class="pull-right header-content"  >	
			See everything your 
			<br>
			students see and keep 
			<br>
			them on-task.
		</h1>
	</div>
	<div class="container hidden-xs"> 
		<h3 class="pull-right header-sub-content">
			Vision helps you manage
			<br>
			the digital classroom.
		</h3>
	</div>
</header>
<footer class="text-center main-custom-footer ">
<!-- Default to the left -->
	<strong>Copyright &copy; 2017 <a href="#"> &nbsp;E-Records</a>.</strong> &nbsp;All rights reserved.
</footer>


	<?php  require_once(APPPATH.'views/main/login-modal.php');?>
<?php  require_once(APPPATH.'views/main/signup-modal.php');?>