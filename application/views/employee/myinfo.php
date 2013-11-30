<!doctype html>
<html>
<head>
<style type="text/css">
	.accordion-group{
		border:0;
	}
</style>
</head>

	
		<div class="container" style="padding-left:100px;">
			<div id="wrap1" class="span10" style="margin-bottom:50px;">
                <div class="nav">
                 	<div class="navbar-inner">
                        <h4>Personal Details</h4>
                    </div>
                 </div>
                 
               	<div class="" style="padding: 0px 10px;">  
                       <table class="table" >
                       		<thead>
                                <tr>
                                    <td>Username</td>
                                     <td></td>
                                    <td><?php echo $row->employee_username;?></td>
                                   
                                </tr>
                             </thead>
                            <tr class="accordion-group">
                            	<td>Password</td>
                                <td></td>
                                <td ><p style="display:inline;">Updated 4 months ago.</p>
                                <a class="btn btn-success pop pull-right edit"  data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                <i class="icon-edit"></i>
                                </a>
                                
                                <div id="collapseOne" class="accordion-body collapse">
                                	<form>
                                 	  <table>
                                   	  <thead>
                                        <tr>
                                            <td>Current: </td>
                                            <td> <input type="password"/></td>
                                        </tr>
                                      </thead>
                                    <tr>
                                    	<td>New: </td>
                                    	<td> <input type="password"/></td>
                                    </tr>
                                    <tr>
                                    	<td>Re-type New: </td>
                                    	<td> <input type="password"/></td>
                                    </tr>
                                    <tr>
                                    	<td><input type="submit" class="btn btn-primary" value=" Save "> <button class="btn btn-danger">Cancel</button></td>
                                        <td></td>
                                    
                                    </tr>
                                   
                                   </table>
                             		</form>
                                </div>
                                
                                </td>
                            </tr>
                             <tr class="accordion-group">
                            	<td>Email Address</td>
                                <td></td>
                                <td ><p style="display:inline;"><?php echo $row->employee_email_address; ?></p>
                               
                                
                                </td>
                            </tr>
                             <tr>
                            	<td>Counter Number</td>
                                <td></td>
                                <td><?php echo $row->employee_counter_num; ?></td>
                            </tr>
                             <tr>
                            	<td>Date Registered</td>
                                <td></td>
                                <td><?php echo $row->employee_date_registered; ?></td>
                            </tr>
                            <tr>
                            	<td>IP Address</td>
                                <td></td>
                                <td><?php echo $row->employee_ip_address; ?></td>
                            </tr>
                        </table>
                 
              	</div>
            </div>
		</div>