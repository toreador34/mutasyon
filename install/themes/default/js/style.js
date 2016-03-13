//if image not found
function imgError(image) {
    image.onerror = "";
    image.src = "img/noimage-large.jpg";
    return true;
}

//Send forms with ajax no reload
$(document).ready(function() {
$(".noload").each(function(index) {   				    
	$(".noload").eq(index).submit(function(event){
	    event.preventDefault();
	    $("div.work-inf").addClass("display-block");
	    $("div.work-inf").html("<img src='img/load.gif' />");
	    $.post($(".noload").eq(index).attr("action"), $(".noload").eq(index).serialize(), function(gelen){
		    $("div.work-inf").addClass("display-block");
		    $("div.work-inf").html(gelen);
	    });
	});
    });
});