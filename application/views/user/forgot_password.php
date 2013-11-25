<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>" style="type/css"/>
<link rel="stylesheet" href="<?php echo base_url('/assets/css/reid.css');?>" style="type/css">
<script type="text/javascript" src="<?php echo base_url('/assets/js/jqueryv1.9.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-migrate-1.2.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.js');?>"></script>
<script type="text/javascript" src="../assets/js/claire.js"></script>
<script type ="text/javascript">
$( document ).ready(function() {
$('#current').focus();
});
</script>
<title>Forgot Password</title>
</head>

<body>
	<div id="login" style="padding-bottom:135px;">
        <div class="text-center">company logo</div>
        <div id="wrap1" style="padding:20px;">
		
            <?php echo form_open('forgotPassword') ?>
            	<div><h5>Your password will be emailed to you.</h5></div>
				
                <div class="control-group" >
                    <label class="control-label" for="username" id="username_label">Username</label>
                    <div class="controls">
						<input type="text"  class="input-block-level" style="margin-bottom:0;"  value="<?php echo set_value('username'); ?>" name="username" id="current" >
						<?php echo form_error('username', '<small class="text-error">', '</small>'); ?>
                    </div>
                </div>
			           
                <div class="control-group" style="padding:0px 0px 10px;">
                    <div class="controls">
						<h6 class="pull-left" ><a href="login" >Back to Login</a></h6>
						<div class="span2 pull-right"><input type="submit" class="btn btn-block btn-success" id="login_button" value="Send Email"/></div>
                    </div>
               </div>
                        
			</form>
			<?php 	if ($error_forgotpassword == true){
						echo '<script type="text/javascript">forgotPasswordError();</script>';
					}
					if (isset($error_sendpassword))
					{
						if($error_sendpassword == true)
						{
							echo '<script type="text/javascript">sendPasswordError();</script>';
						}else{
							echo '<script type="text/javascript">sendPasswordSuccess();</script>';
						}
					}
			?>
        		
        </div>
    </div>
	
</body>
</html>
