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
