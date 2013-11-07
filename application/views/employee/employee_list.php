	<div class="container" style="padding-left:100px;">
			<div id="wrap1" class="span10" style="margin-bottom:50px;">
                <div class="nav">
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
                        <tr>
                            	<td>fuegova</td>
                                <td>30/03/2013</td>
                                <td>fuegova@companyname.com</td>
                                <td>192.168.1.101</td>
                                <td class="text-center">1</td>
								<td>active</td>
                                <td><a href="#deleteEmployee_modal" data-toggle="modal"><i class="icon-remove" title="delete"></i></a></td>
                        </tr>
                        <tr> 
                               	<td>echiverricl</td>
                                <td>11/11/2010</td>
                                <td>echiverricl@companyname.com</td>
                                <td>192.168.1.102</td>
                                <td class="text-center">2</td>
								<td>inactive</td>
                                <td><i class="icon-remove"></i></td>
                        </tr> 
                       <tr>
                            	<td>veranomi</td>
                                <td>07/03/2013</td>
                                <td>veranomi@companyname.com</td>
                                <td>192.168.1.103</td>
                                <td class="text-center">3</td>
								<td>inactive</td>
                                <td><i class="icon-remove"></i></td>
                        </tr>
						<tr>
                            	<td>bongbongma</td>
                                <td>20/02/2013</td>
                                <td>bongbongma@companyname.com</td>
                                <td>192.168.1.104</td>
                                <td class="text-center">4</td>
								<td>active</td>
                                <td><i class="icon-remove"></i></td>
                        </tr>
						<tr>
                            	<td>bacatanch</td>
                                <td>10/04/2013</td>
                                <td>bacatanch@companyname.com</td>
                                <td>192.168.1.105</td>
                                <td class="text-center">5</td>
								<td>active</td>
                                <td><i class="icon-remove"></i></td>
                        </tr>
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
                            <img src="../assets/img/pager/first.png" class="first"/>
                            <img src="../assets/img/pager/prev.png" class="prev"/>
                            <input type="text" class="pagedisplay input-mini" disabled/>
                            <img src="../assets/img/pager/next.png" class="next"/>
                            <img src="../assets/img/pager/last.png" class="last"/>
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
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-success">Ok</a>
				<a href="#" class="btn btn-danger">Cancel</a>
			</div>
		</div>