<!doctype html>
<body onload="updateClock(); setInterval('updateClock()', 1000 )" >
		<div class="container"  style="padding-left:100px;">
            <div class="row">    
                <div class="span6"  style="padding-bottom:50px;">
					<div id="wrap1" style="min-height:270px;">
						<div class="nav">
						   <div class="navbar-inner"> 
							   <p class="navbar-text" style="text-align:center">Currently Serving</p>  
							</div>
						</div>
						<div class="row">
							<div class="span3">
								<p style="text-align:center; font-size:140px; line-height:1; margin: 0 -20px 0 20px;">27</p>
							</div>
							
							<div class="span2">
								<span class="span2 text-center claire-currentnum-details" id="info" style="margin-top:15px;">12kn23034</span>
								<span class="span2 text-center claire-currentnum-details" id="info" style="margin-top:15px;">0:10</span>
							</div>
							
						</div>
						<div style=" margin:auto;">
							
								<textarea class="claire-comment-box" placeholder="Enter Comments Here"></textarea>
								 <a class="btn btn-success"  href="#"><i class="icon-edit"></i></a>
						</div>
					</div>
                    
						<div class="">
                        <button class="btn btn-large btn-success" style="width:109px;">Next</button>
                        <button class="btn btn-large btn-danger" style="width:109px;" >Invalid</button>
                        <button class="btn btn-large btn-info" style="width:120px;" >Unclaimed</button>
                        <button class="btn btn-large btn-primary" style="width:109px;" >Done</button>
						</div>
                    
                </div>
				<div class="span1"></div>
                <div class="span4" style="margin-top:55px;">
               			<p class="claire-datetime" style="margin-left:20px;"><span id="clock">&nbsp;</span> | <?php echo $day; ?> </p>
						<p class="claire-datetime" style="margin-left:20px;"><?php echo $date; ?><p>
	                	<span class="span3" id="info" style="margin-top:15px;"> 
	                      	<span class="span2" style="margin-left:0;">Currently Serving </span>
	                      	<span class="span1 text-right" style="margin-left:15px;"><b><strong>29</strong></b></span> 
	                    </span>
                    	<span class="span3" id="info" style="margin-top:15px;">
                    		<span class="span2" style="margin-left:0; width:155px;">Number of Cancellations</span>
                    		<span class="span1 text-right" style="margin-left:0px;"><b><strong>2</strong></b> </span>
                    	</span>
                      	<span class="span3" id="info" style="margin-top:15px;">
                      		<span class="span2" style="margin-left:0;">Last Number Taken</span>
                    		<span class="span1 text-right" style="margin-left:15px;"><b><strong><?php echo $last_number; ?></strong></b> </span>
                    	</span>
                </div>
			</div>
			
		</div>
</body>
	