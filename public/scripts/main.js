	$(document).ready(function(){

	$('.notification').delay(10000).fadeOut();

	// Show or hide the sticky footer button
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.go-top').fadeIn(200);
		} else {
			$('.go-top').fadeOut(200);
		}
	});
	
	// Animate the scroll to top
	$('.go-top').click(function(event) {
		event.preventDefault();
		
		$('html, body').animate({scrollTop: 0}, 300);
	});

	$('.account').unbind('click').click(function(){
		$(this).toggleClass('overlay');
		//$(this).addClass('span2').removeClass('span4');
		$(this).toggleClass('span4 span2');
		$('.acc_list').toggleClass('hide');
	});

	$('#add_task').click(function(){
		var desc = $('#new_task_desc').val();
		var date = $('#date').val();
		var month = $('#month').val();
		var year = $('#year').val();
		var gid = $(this).attr('data-id');
		$.ajax({
			type: 'POST',
			url: "/add_task/"+gid,
			datatype: "text",
			data: {
          		description: desc,
        		date: date,
        		month: month,
        		year: year
      		},
			success: function(response){
				console.log(response);
			},
			error: function(){
				console.log("something has gone wrong");
		  }
		});
		$('#new_task_desc').val('');
		$('#date').val('');
		$('#month').val('');
		$('#year').val('');
		var html = "<td>"+desc+"</td><td>"+date+"/"+month+"/"+year+"</td><td><i class='fa fa-square-o'></i></td>";
		$('#new_task').html(html);
	});
});

function DropDown(el) {
    this.dd = el;
    this.initEvents();
}
DropDown.prototype = {
    initEvents : function() {
        var obj = this;
 
        obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            event.stopPropagation();
        }); 
    }
}

$(function() {

		var dd = new DropDown( $('.drop') );

		$(document).click(function() {
			// all dropdowns
			$('.wrapper-dropdown-2').removeClass('active');
			$('#ds').removeClass('down');
		});
		$('#dd').click(function() {
			$('#ds').toggleClass('down');
		})
	});

