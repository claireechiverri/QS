		<div class="container" style="padding-left:100px;">
			<div id="wrap1" class="span10" style="margin-bottom:50px;">
                <div class="nav">
                 	<div class="navbar-inner">
                        <h4>Employee Logs</h4>
                    </div>
                 </div>
                 <div style="padding: 0px 10px; position: relative;">
                   <table id="myTable" class="tablesorter"> 
                    <thead> 
                    <tr> 
                        <th>Date</th> 
                        <th>User ID</th> 
                        <th>Username</th> 
                        <th>IP Address</th> 
						<th>Status</th>
                        <th>Action</th> 
                    </tr> 
                    </thead> 
                    <tbody> 
					<?php foreach($employee_logs as $row) {?>
                    <tr> 
                        <td><?php echo $row->user_logs_date;?></td> 
                        <td><?php echo $row->user_logs_user_id;?></td> 
                        <td><?php echo $row->employee_username;?></td> 
                        <td><?php echo $row->user_logs_ip_address;?></td> 
						<td><?php echo ($row->employee_status == 1)?"active":"inactive";?></td>
                        <td><?php echo ($row->user_logs_action == 1)?"Login":"Logout";?></td> 
                    </tr> 
					<?php } ?>
                   
                   
                    </tbody> 
                    </table> 
                    <div id="pager" class="pager span10 pull-left">
						<div class="span2 pull-left">
							<form>
								<input type="checkbox" checked="checked">
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