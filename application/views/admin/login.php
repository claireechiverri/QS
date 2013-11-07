<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<link rel="stylesheet" href="../assets/css/bootstrap.css" style="type/css"/>
<link rel="stylesheet" href="../assets/css/reid.css" style="type/css">
<script type="text/javascript" src="js/jquery v1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div id="login" style="padding-bottom:135px;">
        
        
        <div class="text-center">company logo</div>
        
        
        <div id="wrap1" style="padding:20px;">

        	
            <?php echo form_open('login') ?>
            	
                <div class="control-group">
                    <label class="control-label" for="username">Username</label>
                    <div class="controls">
                      <input type="text"  class="input-block-level" style="margin-bottom:0;"  value="<?php echo set_value('username'); ?>" name="username">
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
                      <h6 class="pull-left"><a href="#">Forgot Password</a></h6>
                      <div class="span2 pull-right"><input type="submit" class="btn btn-block btn-success" value="Log in"/></div>
                    </div>
               </div>
                
               
			</form>
        
        		
        </div>
    </div>
</body>
</html>
