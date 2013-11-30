
<head>
<style type="text/css">

.accordion-group {

border:none;

}
</style>
</head>

<body>	
		<div class="container">
			<div id="wrap1">
                <div class="nav">
                 	<div class="navbar-inner">
                        <h4 class="navbar-text">Administration</h4>
                    </div>
                 </div>
                 
               	<div class="" style="padding: 0px 10px;">  
                       <table class="table" >
                       		<thead>
                                <tr>
                                    <td>Username:</td>
                                     <td></td>
                                    <td><?php echo $row->admin_username;?></td>
                                   
                                </tr>
                             </thead>
                            <tr class="accordion-group">
                            	<td>Password:</td>
                                <td></td>
                                <td ><p style="display:inline;">edited 100 years ago </p>
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
                                    	<td><button class="btn btn-danger">cancel</button> <input type="submit" class="btn btn-primary" value=" save "></td>
                                        <td></td>
                                    
                                    </tr>
                                   
                                   </table>
                             		</form>
                                </div>
                                
                                </td>
                            </tr>
                            <tr class="accordion-group">
                            	<td>Email:</td>
                                <td></td>
                                <td > 
                                    <div class="input-append">
                                      <input  id="inputIcon" value= "<?php echo $row->admin_email_address;?>" type="text" disabled = "disabled">
                                      <button class="btn enable btn-success"><i class="icon-edit"></i></button>
                                    </div>                        
                                 </td>
                            </tr>
                             <tr class="accordion-group">
                            	<td>IP Address:</td>
                                <td></td>
                                <td > 
                                    <div class="input-append">
                                      <input  id="inputIcon" value="<?php echo $row->admin_ip_address;?>" type="text" disabled = "disabled">
                                      <button class="btn enable btn-success"><i class="icon-edit"></i></button>
                                    </div>                        
                                 </td>
                            </tr>
                        </table>
                 
              	</div>
            </div>
		</div>

