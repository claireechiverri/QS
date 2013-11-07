<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>" style="type/css"/>
<link rel="stylesheet" href="<?php echo base_url('/assets/css/reid.css');?>" style="type/css">
<script type="text/javascript" src="<?php echo base_url('/assets/js/jqueryv1.9.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-migrate-1.2.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.tablesorter.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/tablesorter_paging.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/reid.js');?>"></script>
</head>


<body>
	<div class="page-header">
		<div class="navbar navbar-inverse">	
        	        
                <div class="container">
                    <a class="brand" href="#">Company Name/Logo</a>
                    
                    <div class="nav pull-right">
                        <ul class="nav nav-pills">
                            <li class="dropdown">    
                              <a class="dropdown-toggle" data-toggle="dropdown"  data-target="#" href="#">Employee</a>
							  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li><a href="viewAddEmployee"><i class="icon-plus"></i> Add</a></li>
								<li><a href="viewEmployeeList"><i class="icon-th-list"></i> List</a></li>
							  </ul>                      
                      		</li>
                            <li><a href="#configure" data-toggle="tab">Configure</a></li>
                            <li class="dropdown">
                            	<a class="dropdown-toggle" data-toggle="dropdown"  data-target="#" href="#">Logs</a>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#employee_logs" data-toggle="tab"> Employee</a></li>
                                    <li><a href="#queue_logs" data-toggle="tab"> Queue</a></li>
                                    <li><a href="#admin_logs" data-toggle="tab"> Admin</a></li>
                                  </ul>
                            </li>
							<li><a href="#admin_myinfo" data-toggle="tab">My Info</a></li>
                            <li><a href="#logout_modal" data-toggle="modal"><i class="icon-off icon-white"></i></a></li>
                        </ul>
                   </div>
            
        	</div>
       </div>
	</div>
	
	<!-- popup for logout -->
	<div class="modal fade" id="logout_modal">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Logout</h3>
	  </div>
	  <div class="modal-body">
		<p>Are you sure you want to logout?</p>
	  </div>
	  <div class="modal-footer">
		<a href="#" class="btn btn-success">Yes</a>
		<a href="#" class="btn btn-danger">No</a>
	  </div>
	</div>