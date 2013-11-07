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
                    <tr> 
                        <td>12/04/13 09:30:02</td> 
                        <td>001</td> 
                        <td>bongbongma</td> 
                        <td>192.168.255.255</td> 
						<td>active</td>
                        <td>Log In</td> 
                    </tr> 
                    <tr> 
                        <td>12/04/13 16:02:34 </td> 
                        <td>002</td> 
                        <td>echiverricl</td> 
                        <td>192.168.1.1</td>
						<td>active</td>
                        <td>Log Out</td> 
                    </tr> 
                    <tr> 
                        <td>12/04/13 11:23:34</td> 
                        <td>003</td> 
                        <td>fuegova</td> 
                        <td>192.168.1.131</td> 
						<td>inactive</td>
                        <td>Log In</td> 
                    </tr> 
                    <tr> 
                        <td>12/04/13 13:35:11</td> 
                        <td>004</td> 
                        <td>veranomi</td> 
                        <td>192.121.133.1</td> 
						<td>inactive</td>
                        <td>Log Out</td> 
                    </tr>
                    <tr> 
                        <td>12/04/13 15:02:33</td> 
                        <td>005</td> 
                        <td>Christine</td> 
                        <td>192.121.133.1</td> 
						<td>active</td>
                        <td>Log Out</td> 
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
                            <img src="img/pager/first.png" class="first"/>
                            <img src="img/pager/prev.png" class="prev"/>
                            <input type="text" class="pagedisplay input-mini" disabled/>
                            <img src="img/pager/next.png" class="next"/>
                            <img src="img/pager/last.png" class="last"/>
                            <select class="pagesize input-mini">
                            	<option selected="selected"  value="5">5</option>
                                <option  value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option  value="40">40</option>
                            </select>
					  </form>
                    </div>
                </div>
            </div>
		</div>