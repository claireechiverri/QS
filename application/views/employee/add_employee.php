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
                        <h4>Add Employee</h4>
                    </div>
                 </div>
                 
               	<div class="" style="padding: 0px 10px;">  
                     <?php echo form_open('employee/addEmployee') ?>
  						<fieldset>  
                       		<table class="table" >
                       		
                                <tr>
                                    <td>Username:</td>
                                    <td>
										<div><input type="text" name="add_username" placeholder=""></div>
										<div><?php echo form_error('username', '<small class="text-error">', '</small>'); ?></div>
									</td>
                                    <td>Email Address:</td>
                                    <td><input type="text" name="add_emailad" placeholder=""></td>
                                   
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                     <td><input type="password" name="add_password" placeholder=""></td>
                                    <td>IP Address:</td>
                                    <td><input type="text" name="ipaddress" placeholder=""></td>
                                   
                                </tr>
                                <tr>
                                    <td>Confirm Password:</td>
                                     <td><input type="password" name="confirmpassword" placeholder=""></td>
                                    <td>Counter no:</td>
                                    <td><input class="input-small" name="counternum" type="number" value="0"></td>
                                   
                                </tr>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td> </td>
                                    <td style="position:relative; margin-left:40px;padding-left: 93px;"> <input type="submit" class="btn btn-success" value="  Add ">  <button class="btn btn-danger " >Cancel</button> </td>
                                   
                                </tr>
                               
                               
                           
                        </table>
                 
                 		</fieldset>
                     </form>
              	</div>
            </div>
		</div>