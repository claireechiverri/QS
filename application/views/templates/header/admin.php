<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>" style="type/css"/>
<link rel="stylesheet" href="<?php echo base_url('/assets/css/reid.css');?>" style="type/css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/claire.css" style="type/css">
<script type="text/javascript" src="<?php echo base_url('/assets/js/jqueryv1.9.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-migrate-1.2.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.tablesorter.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/tablesorter_paging.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.jeditable.js"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/qs.validate.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/reid.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/claire.js"></script>
</head>


<body>
	<div class="page-header">
		<div class="navbar navbar-inverse">	
        	        
                <div class="container">
                    <a class="brand">Company Name/Logo</a>
                    
                    <div class="nav pull-right">
                        <ul class="nav nav-pills">
                            <li class="dropdown">    
                              <a class="dropdown-toggle" data-toggle="dropdown"  data-target="#" href="#">Employee</a>
							  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li><a href="<?php echo base_url('index.php/employee/addEmployee'); ?>"><i class="icon-plus"></i> Add</a></li>
								<li><a href="<?php echo base_url('index.php/employee/viewEmployeeList'); ?>"><i class="icon-th-list"></i> List</a></li>
							  </ul>                      
                      		</li>
                            <li><a href="<?php echo base_url('index.php/admin/configure');?>">Configure</a></li>
                            <li class="dropdown">
                            	<a class="dropdown-toggle" data-toggle="dropdown"  data-target="#" href="#">Logs</a>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="<?php echo base_url('index.php/logs/employee'); ?>"> Employee</a></li>
                                    <li><a href="<?php echo base_url('index.php/logs/queue'); ?>"> Queue</a></li>
                                    <li><a href="<?php echo base_url('index.php/logs/admin'); ?>"> Admin</a></li>
                                  </ul>
                            </li>
							<li><a href="<?php echo base_url('index.php/admin/myinfo'); ?>">My Info</a></li>
                            <li><a href="#logout_modal" data-toggle="modal"  title="Log out"><i id="logout_icon" class="icon-off icon-white"></i></a></li>
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
		<a href="<?php echo base_url('index.php/logout'); ?>" class="btn btn-success">Yes</a>
		<a href="#" class="btn btn-danger"  data-dismiss="modal" >No</a>
	  </div>
	</div>