$ (document).ready(function(){
	update_amounts();
	$('.qty, .price	').on('keyup keypress blur change',
	function(e){
		update_amounts();

	});
})
function update_amounts(){
	var sum = 0.0;
	$('#myTable > tbody > tr').each(function(){
		var qty = $(this).find('.qty').val();
		var price = $(this).find('.price').val();
		var amount =(qty*price)
		sum+=amount;
		$(this).find('.amount').text(''+amount);
	});
	$('.total').text(sum);
}
// + and -
var incrementQty;
var decrementQty;
var plusBtn = $(".cart-qty-plus");
var minusBtn = $(".cart-qty-minus");
var incrementQty = plusBtn.click(function(){
	var $n = $(this)
	.parent(".button-container")
	.find(".qty");
	$n .val(Number($n.val())+1);
	update_amounts(); 
});
var decrementQty = minusBtn.click(function(){
	var $n = $(this)
	.parent(".button-container")
	.find(".qty");
	var QtyVal = Number($n.val());
	if (QtyVal > 0) {
		$n.val(QtyVal - 1);
	}
	update_amounts();
});
// Date
 function renderTime(){
 	var mydate = new Date();
 	var year   = mydate.getYear();
 		if(year < 1000){
 			year +=1900;
 		}
 		var day = mydate.getDay();
 		var month = mydate.getMonth();
 		var daym = mydate.getDate();
 		var dayarray = new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Firday,","Saturday,");
 		var montharray = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
 	// Time
 	var currentTime = new Date();
 	var h = currentTime.getHours();
 	var m = currentTime.getMinutes();
 	var s = currentTime.getSeconds();
 	if(h == 24){
 		h = 0;
 	}else if(h > 12){
 		h = h - 0;
 	}
 	if (h < 10) {
 		h ="0" + h;
 	}
 	if (m < 10) {
 		m ="0" + m;
 	}
 	if (s < 10) {
 		s = "0" + s;
 	}
 	var myClock = document.getElementById("clockDisplay");
 	myClock.textContent = "" +year+ " " +dayarray[day]+ " " +daym+ " " +montharray[month]+ " | " +h+ ":" +m+ ":" +s;
 	myClock.innerText = "" +year+ " " +dayarray[day]+ " " +daym+ " " +montharray[month]+ " | " +h+ ":" +m+ ":" +s;

 	setTimeout("renderTime()", 1000);
 }
 renderTime();
