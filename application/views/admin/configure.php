<head>
	<style type="text/css">
		.table td {
			border-top:none;
		}

	 
	</style>


</head>
<body>	
		<div class="container" style="padding-left:100px;">
			<div class="tabbable span10" id="wrap1" style="margin-bottom:50px;">
            	<ul class="nav nav-tabs navbar-inner">
                    <li class="active"><a href="#tab1" data-toggle="tab">Time Settings</a></li>
                    <li><a href="#tab2" data-toggle="tab">Company Information</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">                            
                            <div class="" style="padding: 0px 10px;">  
                                 <form id="configuretime_form">
                                    <fieldset>  
                                        <table class="table" >
                                        
                                               <thead>
                                                <tr>
                                                    <td>Opening Time:</td>
                                                    <td><input type="text" id="opening_time" disabled="true"></td>
                                                    <td>Span Time:</td>
                                                    <td><input type="time" disabled></td>
                                                   
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>Closing Time:</td>
                                                 <td><input type="time" disabled = "" ></td>
                                                <td>Waiting Time:</td>
                                                <td><input type="time" disabled = ""></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>End Time:</td>
                                                 <td><input type="time" disabled = ""></td>
                                                <td></td>
                                                <td></td>
                                               
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="position:relative">
													<a onclick="disableConfigureTime()" class="btn btn-danger pull-right" id="btnconfiguret_cancel" >Cancel</a>
													<a class="btn btn-success pull-right" id="btnconfiguret_save">Save</a>
													<a onclick="enableConfigureTime()" id="btnconfiguret_edit" class="btn btn-success pull-right">Edit</a>
													
												</td>
                                               
                                            </tr>
                                           
                                           
                                       
                                    </table>
                             
                                    </fieldset>
                                 </form>
                            </div>
           				 
                    </div>
                    <div class="tab-pane" id="tab2">
                       <div class="row" style="padding: 0px 10px 10px 10px;">
                       		<div class="span6">
                            	<form id="configureinfo_form">
                                    <fieldset>  
                                        <table class="table" >
                                        	<tr>
                                            	<td>Contact Number</td>
                                                <td><input type="text" placeholder="" disabled = ""></td>
                                                
                                            </tr>
                                            <tr>
                                            	<td>No. of Counters</td>
                                                <td><input class="input-small" disabled = "" type="number" min="1"></td>
                                               
                                                
                                            </tr>
											<tr>
                                            	<td>Brief Description</td>
                                                <td><textarea rows="3" disabled = ""></textarea></td>
                                               
                                                
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </div>
                            
                           
                           <div style="margin-top:200px; margin-right:10px"> 
                            <a onclick="disableConfigureInfo()" class="btn btn-danger pull-right" id="btnconfigurei_cancel" >Cancel</a>
							<a class="btn btn-success pull-right" id="btnconfigurei_save">Save</a>
							<a onclick="enableConfigureInfo()" id="btnconfigurei_edit" class="btn btn-success pull-right">Edit</a>
                            </div>
                       </div>
                    </div>
            	</div>
</div>

            
            
            
            
            
            
            
		</div>
		
			<script type="text/javascript">
	
	</script>
		
		
	
	