$(document).ready(function() {
	 var editable_url = 'http://localhost/QS-master/index.php/employee/editEmployee';
     $('#edit_username').editable(editable_url, {
		onsubmit: function(settings, td){
			var input = $(td).find('input');
			$(this).validate({
				rules: {
					'value': {
						required: true
					}
				},
				messages: {
					value: "Username is required",

				}
			});
			return ($(this).valid());
		}
	});
	

 });

function deleteEmployee(id){
	$('#deleteEmployee_modal').modal('toggle');
	$("#deleteEmployee_modal #container_id").val(id);
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