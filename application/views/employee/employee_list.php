	<div class="container" style="padding-left:100px;">
			<div id="wrap1" class="span10" style="margin-bottom:50px;">
                <div class="nav" >
                 	<div class="navbar-inner">
                        <h4>Employee List</h4>
                    </div>
                 </div>
     
               	<div class="" style="padding: 0px 10px;">  
                                             
                   
                    <table id="myTable" class="tablesorter"> 
                  	  <thead> 
                        <tr> 
                            <th>Username</th> 
                            <th>Date Registered</th> 
                            <th>Email Address</th> 
                            <th>IP Address</th> 
                            <th>Counter&nbsp;</th> 
							<th>Status&nbsp;&nbsp;</th>                       
                           
                        </tr> 
                    </thead> 
                    <tbody> 
					<?php foreach($employee_list as $row){ ?>
                        <tr>
                            	<td id="edit_username"><?php echo $row->employee_username;?></td>
                                <td><?php echo $row->employee_date_registered;?></td>
                                <td id="edit_emailad"><?php echo $row->employee_email_address;?></td>
                                <td><?php echo $row->employee_ip_address?></td>
                                <td class="text-center"><?php echo $row->employee_counter_num;?></td>
								<td class="text-center">
									<?php 	if($row->employee_status == 0)
												echo "inactive";
											else
												echo "active";
									?>
								
								</td>
								                                <td>
									<?php if($row->employee_status == 1) { ?>
										<a onclick="deleteEmployee(this.id)" id="<?php echo $row->employee_id;?>" data-toggle="modal"><i class="icon-remove" title="delete" ></i></a>
									<?php }else{ ?>
										<a><i class="icon-remove icon-white"></i></a>
									<?php } ?>
								</td>
								
                        </tr>
					<?php } ?>
					
                    </tbody> 
                    </table> 
					
                    <div id="pager" class="pager span10 pull-left">
						<div class="span2 pull-left">
							<form>
								<input type="checkbox">
								<span style="font-size:13px;">inactive employees</span>
							</form>
						</div>
                    	<form class="span7 pull-left" style="text-align:right">
                            <img src="<?php echo base_url('/assets/img/pager/first.png');?>" class="first"/>
                            <img src="<?php echo base_url('/assets/img/pager/prev.png');?>" class="prev"/>
                            <input type="text" class="pagedisplay input-mini" disabled/>
                            <img src="<?php echo base_url('/assets/img/pager/next.png');?>" class="next"/>
                            <img src="<?php echo base_url('/assets/img/pager/last.png');?>" class="last"/>
                            <select class="pagesize input-mini">
                            	<option selected="selected"  value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                            </select>
					  </form>
                    </div>
                                   
              	</div>
            </div>
		</div>
		
		<!-- popup for deleting empployee -->
		<div class="modal fade" id="deleteEmployee_modal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Delete Employee</h3>
			</div>
			
			<div class="modal-body">
				<p>Are you sure you want to delete this employee?</p>
				<input type="hidden" name="employee_id" id="container_id" value=""/>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-success">Yes</a>
				<a href="#" class="btn btn-danger" data-dismiss="modal">No</a>
			</div>
		</div>
		
		<!-- pop up for successfully deleting employee -->
		<div class="modal fade" id="deleteEmployeeSuccess_modal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Delete Employee</h3>
			</div>
			
			<div class="modal-body">
				<p>Successfully deleted employee.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-success" data-dismiss="modal">Okay</a>
			</div>
			</form>
		</div>