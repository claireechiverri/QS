$(document).ready(function() {
	 var editable_url_username = 'http://localhost/QS-master/index.php/employee/editUsername';
     $('.edit_username').editable(editable_url_username, {
     	cssclass: 'qs-editable',
     	maxlength: 45,
		onsubmit: function(settings, td){
			var input = $(td).find('input');
			$(this).validate({
				rules: {
					'value': {
						required: true,
						minlength: 3,
						isUniqueUsername: true,
					}
				},
				messages: {
					'value' : {
						required: "Required",
						minlength: "Should be more than 3 characters",
					}

				},
			});
			return ($(this).valid());
		}
	});

     var editable_url_emailad = 'http://localhost/QS-master/index.php/employee/editEmailAddress';
     $('.edit_emailad').editable(editable_url_emailad, {
     	cssclass: 'qs-editable',
     	maxlength: 45,
		onsubmit: function(settings, td){
			var input = $(td).find('input');
			$(this).validate({
				rules: {
					'value': {
						required: true,
						email: true,
						isUniqueEmailAddress: true,
					}
				},
				messages: {
					'value' : {
						required: "Required",
						email: "Invalid format",
					}

				},
			});
			return ($(this).valid());
		}
	});
	
	 var editable_url_ipad = 'http://localhost/QS-master/index.php/employee/editIPAddress';
     $('.edit_ipaddress').editable(editable_url_ipad, {
     	cssclass: 'qs-editable',
		onsubmit: function(settings, td){
			var input = $(td).find('input');
			$(this).validate({
				rules: {
					'value': {
						required: true,
						isValidIP: true,
						isUniqueIPAddress: true,
					}
				},
				messages: {
					'value' : {
						required: "Required",
						
					}

				},
			});
			return ($(this).valid());
		}
	});

     var editable_url_counternum = 'http://localhost/QS-master/index.php/employee/editCounterNumber';
     cssclass: 'qs-editable-dropdown',
     $('.edit_counternum').editable(editable_url_counternum, {
     	 loadurl : 'http://localhost/QS-master/index.php/admin/getCountersJsonArray',
    	 type   : 'select',
    	 submit : 'OK'
	});

	$('#inactive_list').change(function () {
		if($(this).prop("checked")) {
			alert('check');
		}else{
			$('#myTable').load();
		}
	});
	

 });
 function enableConfigureTime()
{
	$('#btnconfiguret_save').css('display', 'block');
	$('#btnconfiguret_cancel').css('display', 'block');
	$('#btnconfiguret_edit').css('display', 'none');
	$('#configuretime_form input').removeAttr('disabled');
}

function getPriorityNumber()
{
	$.ajax({
		type: "POST",
		url: "http://localhost/QS-master/index.php/queue/getPriorityNumber",
		dataType:'json',
		cache: false,
		beforeSend: function()
		{
		//parent.animate({'backgroundColor':'#ffff99'},300).animate({ opacity: 0.35 }, "slow");;
		}, 
		success: function(data)
		{
			$('#pn_container').html(data.pn);
			$('#code_container').html(data.hashkey);
			$('#getPN_modal').modal('show');


		},
		error: function(){
				alert("Something went wrong");
		}


		});

}

function cancelPriorityNumber()
{
	
	$.ajax({
		type: "POST",
		url: "http://localhost/QS-master/index.php/queue/cancelPriorityNumber",
		dataType:'json',
		cache: false,
		beforeSend: function()
		{
		//parent.animate({'backgroundColor':'#ffff99'},300).animate({ opacity: 0.35 }, "slow");;
		}, 
		success: function(data)
		{
			$('#cancelPN_btn').hide();
			$('#getPN_modal .modal-body p').html("You have cancelled your priority number.");


		},
		error: function(){
				alert("Something went wrong");
		}


		});
}
	
function enableConfigureInfo()
{
	$('#btnconfigurei_save').css('display', 'block');
	$('#btnconfigurei_cancel').css('display', 'block');
	$('#btnconfigurei_edit').css('display', 'none');
	$('#configureinfo_form input').removeAttr('disabled');
	$('#configureinfo_form textarea').removeAttr('disabled');
}

 function disableConfigureTime()
{
	$('#btnconfiguret_save').css('display', 'none');
	$('#btnconfiguret_cancel').css('display', 'none');
	$('#btnconfiguret_edit').css('display', 'block');
	$('#configuretime_form input').attr('disabled', 'true');
}
	
function disableConfigureInfo()
{
	$('#btnconfigurei_save').css('display', 'none');
	$('#btnconfigurei_cancel').css('display', 'none');
	$('#btnconfigurei_edit').css('display', 'block');
	$('#configureinfo_form input').attr('disabled', 'true');
	$('#configureinfo_form textarea').attr('disabled', 'true');
}


function deleteEmployee_first(id){
	$('#deleteEmployee_modal').modal('toggle');
	$("#deleteEmployee_modal #container_id").val(id);
}

function deleteEmployee_second(){
	var id = $('#container_id').val();
	var dataString = 'employee_id='+ id;
	$('#deleteEmployee_modal').modal('hide');
	$.ajax({
		type: "POST",
		url: "http://localhost/QS-master/index.php/employee/deleteEmployee",
		data: dataString,
		cache: false,
		beforeSend: function()
		{
		//parent.animate({'backgroundColor':'#ffff99'},300).animate({ opacity: 0.35 }, "slow");;
		}, 
		success: function(data)
		{
			if(data.error_flag == true){
				alert(data.error_msg);
			}else{
				$('#deleteEmployeeSuccess_modal').modal('show');
			}

		},
		error: function(){
				alert("Something went wrong");
		}


		});
		
}

function loginError()
{
	$('#button_login_error').click();

}
function addEmployeeError()
{
$('#login_form input').attr('disabled', 'true');
$('#login_form select').attr('disabled', 'true');
//alert("You cannot add an employee: Number of counters must be more than the number of active employees");
$('#button_add_employee_error').click();

}

function addEmployeeSuccess()
{
	$('#button_add_employee_success').click();
	$('#login_form input').val('');
	$('#login_form input[type=submit]').val('Add');
	$('#login_form input[type=button]').val('Cancel');	
	$('#login_form select').val(0);
	
}

function addEmployeePlusCountersFull()
{
	alert('Successfully added employee!');
	$('#login_form input').val('');
	$('#login_form input[type=submit]').val('Add');
	$('#login_form input[type=button]').val('Cancel');	
	$('#login_form select').val(0);
	$('#login_form input').attr('disabled', 'true');
	$('#login_form select').attr('disabled', 'true');
	alert("You cannot add an employee: Number of counters must be more than the number of active employees");

}
function addEmployeeErrorDB()
{
	alert("Something went wrong with adding the employee.");
}

function forgotPasswordError()
{
	alert('Invalid Username');
}

function sendPasswordError()
{
	alert('Something went wrong with sending your password.');
}
function sendPasswordSuccess()
{
	alert('Email successfully sent!');
	$('input[name=username]').val('');
}

function closeclaire(e){
	e.preventDefault();
	$('#add_employee_error_modal').modal('hide');
	return false;
}	

$('#testing').click(function() {
    $('#add_employee_error_modal').modal('hide');
});

function test()
{
	$('input#test').click();
}

/** auto load clock **/

function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "am" : "pm";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  // Compose the string for display
  var currentTimeString = currentHours + ":" + currentMinutes +  " " + timeOfDay;

  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}