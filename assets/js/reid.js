// JavaScript Document
//for pages with tables sorter

$( document ).ready(function() {
	//for myinfo pages
   $(".edit").click(function() {	
		$(this).siblings("p").toggle();
	});	
	$('#my_info').click(function(){
		alert('test');
	});
	$("#myTable")
			.tablesorter({widthFixed: true, widgets: ['zebra']})
			.tablesorterPager({container: $("#pager")})
	
});