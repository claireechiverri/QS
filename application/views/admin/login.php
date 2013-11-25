<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>" style="type/css"/>
<link rel="stylesheet" href="<?php echo base_url('/assets/css/reid.css');?>" style="type/css">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/claire.css');?>" style="type/css">
<script type="text/javascript" src="<?php echo base_url('/assets/js/jqueryv1.9.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-migrate-1.2.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.js');?>"></script>
<script type="text/javascript" src="../assets/js/claire.js"></script>
<script type ="text/javascript">
$( document ).ready(function() {
	$('#current').focus();
});
</script>
<title>Log In</title>
</head>

<body>
		
	<div id="login" style="padding-bottom:135px;">
        <div class="text-center">company logo</div>
        <div id="wrap1" style="padding:20px;">
            <?php echo form_open('login') ?>
            	
                <div class="control-group" class="test">
                    <label class="control-label" for="username">Username</label>
                    <div class="controls">
						<input type="text"  class="input-block-level" style="margin-bottom:0;"  value="<?php echo set_value('username'); ?>" name="username" id="current" >
						<?php echo form_error('username', '<small class="text-error">', '</small>'); ?>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
						<input type="password"  class="input-block-level" style="margin-bottom:0;"  value="<?php echo set_value('password'); ?>" name="password">
                    </div>
					<?php echo form_error('password', '<small class="text-error">', '</small>'); ?>
                </div>
                
                <div class="control-group" style="padding:0px 0px 10px;">
                    <div class="controls">
						<h6 class="pull-left"><a href="forgotPassword">Forgot password?</a></h6>
						<div class="span2 pull-right"><input type="submit" class="btn btn-block btn-success" value="Log in"/></div>
                    </div>
               </div>
                     
			</form>
			<button href="#login_error_modal" data-toggle="modal" id="button_login_error">sdf</button>   
			
        		
        </div>
    </div>
	<div class="modal fade" id="login_error_modal">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Logout</h3>
	  </div>
	  <div class="modal-body">
		<p>Invalid Credentials</p>
	  </div>
	  <div class="modal-footer">
		<a href="#" class="btn btn-success" data-dismiss="modal" >Okay</a>
	  </div>
	</div>
</body>
<?php 	if ($error_login == true)
		{
			echo '<script type="text/javascript">$("#button_login_error").click();</script>';
		}
		?>
</html>
