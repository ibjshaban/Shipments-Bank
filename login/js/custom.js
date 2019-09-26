//  alert('hi there');  //---> js runs before the page load , so first it will print this alert meessage then open the page,
// OR I GUESS THIS IS BECAUSE --> ITS AN ALERT MESSAGE, SO IT WILL SHOW FIRST (OFCOURSE)

var url = window.location;
// alert(url);
$('ul.nav a').filter(function(){	//$ is for jquery
	return this.href == url// anonymous function
}).parent().addClass('active');

$(document).ready(function(){

	load_data();

	function load_data(query)
	{
		$.ajax({
			url:"index.php",
			//method:"POST",
			//data:{query:query},
			success:function(data)
			{
				$('#result').html(data).css("display","none");
				//alert("test success");
			}
		});
	}



	$('#country').select2();
	$('#gds-cr-one').select2();

});