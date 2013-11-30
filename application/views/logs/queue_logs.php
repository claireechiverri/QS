		<div class="container" style="padding-left:100px;">
			<div id="wrap1" class="span10" style="margin-bottom:50px;">
                <div class="nav">
                 	<div class="navbar-inner">
                        <h4>Queue Logs</h4>
                    </div>
                 </div>
                 <div style="padding: 0px 10px; position: relative;">
                   <table id="myTable" class="tablesorter"> 
                    <thead> 
                    <tr> 
                        <th>Priority Number</th> 
                        <th>Status</th> 
                        <th>Date Taken</th> 
                        <th>Time Called</th> 
                        <th>Time Modified</th> 
                        <th>Counter&nbsp;&nbsp;</th> 
                        <th>Modified By</th> 
                        <th>IP owner</th> 
                    </tr> 
                    </thead> 
                    <tbody> 
                    <?php foreach($queue_logs as $row) {?>
                        <tr> 
                            <td class="text-center"><?php echo $row->queue_priority_num;?></td> 
                            <td class="text-center"><?php echo $row->queue_status;?></td> 
                            <td><?php echo $row->queue_date_taken;?></td> 
                            <td><?php echo $row->queue_date_called;?></td> 
                            <td><?php echo $row->queue_date_modified;?></td> 
                            <td><center><?php echo $row->queue_counter_num;?></center></td> 
                            <td><?php echo ($row->queue_modified_by)?$row->employee_username:"0";?></td> 
                            <td><?php echo $row->queue_ip_address_owner;?></td>  
                        </tr> 
                    <?php } ?>
                   
                 
                    </tbody> 
                    </table> 
                    <div id="pager" class="pager">
                    	<form>
                            <img src="<?php echo base_url('/assets/img/pager/first.png');?>" class="first"/>
                            <img src="<?php echo base_url('/assets/img/pager/prev.png');?>" class="prev"/>
                            <input type="text" class="pagedisplay input-mini" disabled>
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