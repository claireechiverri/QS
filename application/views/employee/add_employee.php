<head>
<style type="text/css">
	.table td {
		border-top:none;
	}
</style>
</head>
		<div class="container" style="padding-left:100px;">
		
			<div id="wrap1" class="span10" style="margin-bottom:50px;">
                <div class="nav">
                 	<div class="navbar-inner">
                        <h4>Add Employee <?php if(isset($error_add_employee_db))$error_add_employee_db; ?></h4>
                    </div>
                 </div>
                 
               	<div class="" style="padding: 0px 10px;">  
                     <?php echo form_open('employee/addEmployee') ?>
  						<fieldset>  
                       		<table class="table" id="login_form">
                       		
                                <tr>
                                    <td>Username:</td>
                                    <td>
										<div><input type="text" name="add_username" placeholder="" value="<?php echo set_value('add_username'); ?>" tabindex="1"></div>
										<div><?php echo form_error('add_username', '<small class="text-error">', '</small>'); ?></div>
									</td>
                                    <td>E-mail Address:</td>
                                    <td>
									<input type="text" name="add_emailad" placeholder="" value="<?php echo set_value('add_emailad'); ?>" tabindex="4">
									<div><?php echo form_error('add_emailad', '<small class="text-error">', '</small>'); ?></div>	
									</td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                     <td>
									 <input type="password" name="add_password" placeholder="" value="<?php echo set_value('add_password'); ?>" tabindex="2">
									 <div><?php echo form_error('add_password', '<small class="text-error">', '</small>'); ?></div>
									 </td>
                                    <td>IP Address:</td>
                                    <td>
									<input type="text" name="ipaddress" placeholder="" value="<?php echo set_value('ipaddress'); ?>" tabindex="5">
									<div><?php echo form_error('ipaddress', '<small class="text-error">', '</small>'); ?></div>
									</td>
                                   
                                </tr>
                                <tr>
                                    <td>Confirm Password:</td>
                                     <td>
									 <input type="password" name="confirmpassword" placeholder="" value="<?php echo set_value('confirmpassword'); ?>" tabindex="3">
									 <div><?php echo form_error('confirmpassword', '<small class="text-error">', '</small>'); ?></div>
									 </td>
                                    <td>Counter no:</td>
                                    <td><select name="counternum" style=" width: 50px"  tabindex="6">
											<option value="0">0</option>
											<?php 	for($i = 1; $i <= $no_of_counters; $i++){ 
															if(set_value("counternum") == $i){ ?>
																<option value="<?php echo set_value("counternum"); ?>" selected>
																	<?php echo set_value("counternum"); ?>
																</option>
											<?php		}else{										?>
																<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
											<?php		}												?>
											<?php } ?>
										</select>
									<div><?php echo form_error('counternum', '<small class="text-error">', '</small>'); ?></div>
									</td>
                                   
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="position:relative; margin-left:40px;padding-left: 93px;"> <input type="submit" class="btn btn-success" value="  Add ">
									<input class="btn btn-danger " type="button" onClick="window.location.reload()" value="Cancel">
									</td>
                                   
                                </tr>
                           
                               
                           
                        </table>
                 
                 		</fieldset>
						
                     </form>
					 <button href="#add_employee_error_modal" data-toggle="modal" id="button_add_employee_error">Test</button>
					 <button href="#add_employee_success_modal" data-toggle="modal" id="button_add_employee_success">Test</button>
					 
              	</div>
					
            </div>
		
		</div>

<div class="modal hide" id="add_employee_error_modal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Error</h3>
	</div>
	<div class="modal-body">
		<p>New employee cannot be added: counters are already full.</p>
		</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-success" data-dismiss="modal">Okay</a>
	</div>
</div>
<div class="modal hide" id="add_employee_success_modal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Error</h3>
	</div>
	<div class="modal-body">
		<p>Employee successfully added!</p>
		</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-success" data-dismiss="modal">Okay</a>
	</div>
</div>

<?php 
					
	 if(isset($error_add_employee_db))
	{
		if($error_add_employee_db == 0)
		{
			echo '<script type="text/javascript">addEmployeeSuccess();</script>';
			
		}else{
			
			echo '<script type="text/javascript">addEmployeeErrorDB();</script>';
		}
	}
	if(isset($error_add_employee))
	{
		if($error_add_employee == true)
		{
			echo '<script type="text/javascript">addEmployeeError();</script>';
		
		}
	}
	
?>