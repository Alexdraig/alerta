// $(document).ready(function() {

	// (function(){
		var parent_element = $("#pt-main"),
				pages = parent_element.children(),
				btn_move = $('.btn-move'),
				curr = parent_element.find(".pt-page-current"),
				whites = $('.white-section');
				// currnum = 0;

			function totopscroll() {
			  $('.pt-page').animate({scrollTop:0},0);
			}
			
			function animate() {
			  btn_move.attr('disabled', 'disabled');
			  pages.eq(0).addClass("pt-page-moveToRightEasing pt-page-ontop");
			  pages.eq(1).addClass("pt-page-current pt-page-moveFromLeft");
			  setTimeout(function (argument) {
			  	$('.chevron-down-services').addClass('animate');
			  },500);
			}
		  
			function callback1() {
			  pages.eq(0).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
			  pages.eq(1).removeClass("pt-page-moveFromLeft");
			  btn_move.removeAttr('disabled', 'disabled');
			  curr = parent_element.find(".pt-page-current");
			  pages.eq(0).addClass('invisible');
			}

			$("#btn-pag-left").on("click", function() {
			  pages.eq(1).removeClass('invisible');
			  whites.removeClass('invisible');
			  animate();
			  setTimeout(function (argument) {
			  	$('.chevron-down-services').removeClass('animate');
			  },3500);
			  setTimeout(totopscroll,550);
			  setTimeout(callback1,600);
			});
			
			function animate2() {
			  btn_move.attr('disabled', 'disabled');
			  pages.eq(1).addClass("pt-page-moveToLeftEasing pt-page-ontop");
			  pages.eq(0).addClass("pt-page-current pt-page-moveFromRight");
			}
		  
			function callback2() {
			  pages.eq(1).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
			  pages.eq(0).removeClass("pt-page-moveFromRight");
			  btn_move.removeAttr('disabled', 'disabled');
			  curr = parent_element.find(".pt-page-current");
			  pages.eq(1).addClass('invisible');
			  whites.addClass('invisible');
			}
		  
			$("#btn-left-to-right").on("click", function() {
			  pages.eq(0).removeClass('invisible');
			  animate2();
			  setTimeout(totopscroll,550);
			  setTimeout(callback2,600);
			});
			
			function animate3() {
			  btn_move.attr('disabled', 'disabled');
			  pages.eq(0).addClass("pt-page-moveToLeftEasing pt-page-ontop");
			  pages.eq(2).addClass("pt-page-current pt-page-moveFromRight");
			}
		  
			function callback3() {
			  pages.eq(0).removeClass("pt-page-current pt-page-moveToLeftEasing pt-page-ontop");
			  pages.eq(2).removeClass("pt-page-moveFromRight");
			  btn_move.removeAttr('disabled', 'disabled');
			  curr = parent_element.find(".pt-page-current");
			  pages.eq(0).addClass('invisible');
			}
		  
			$("#btn-pag-right").on("click", function() {
			  pages.eq(2).removeClass('invisible');
			  animate3();
			  setTimeout(totopscroll,550);
			  setTimeout(callback3,600);
			});
			 
			function animate4() {
			  btn_move.attr('disabled', 'disabled');
			  pages.eq(2).addClass("pt-page-moveToRightEasing pt-page-ontop");
			  pages.eq(0).addClass("pt-page-current pt-page-moveFromLeft");
			}
		  
			function callback4() {
			  pages.eq(2).removeClass("pt-page-current pt-page-moveToRightEasing pt-page-ontop");
			  pages.eq(0).removeClass("pt-page-moveFromLeft");
			  btn_move.removeAttr('disabled', 'disabled');
			  curr = parent_element.find(".pt-page-current");
			  pages.eq(2).addClass('invisible');
			}
		  
			$("#btn-right-to-left").on("click", function() {
			  pages.eq(0).removeClass('invisible');
			  animate4();
			  setTimeout(totopscroll,550);
			  setTimeout(callback4,600);
			});
	// }());

	
	
// });