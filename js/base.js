function fillMandat(id){
	$.ajax( "controller/engagement.php?action=fillacd&id="+id,{
		dataType:'json',
		success:function(data){
			console.log(data);
		}
	});
}

$(function () {
	
	
	$('.subnavbar').find ('li').each (function (i) {
	
		var mod = i % 3;
		
		if (mod === 2) {
			$(this).addClass ('subnavbar-open-right');
		}
		
	});
	
	
	
});