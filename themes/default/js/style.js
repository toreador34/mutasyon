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

//Send forms with ajax with reload
$(document).ready(function() {
$(".reload").each(function(index) {   				    
	$(".reload").eq(index).submit(function(event){
	    event.preventDefault();
	    $("div.work-inf").addClass("display-block");
	    $("div.work-inf").html("<img src='img/load.gif' />");
	    $.post($(".reload").eq(index).attr("action"), $(".reload").eq(index).serialize(), function(gelen){
		    $("div.work-inf").addClass("display-block");
		    $("div.work-inf").html(gelen);
		    setTimeout(function(){ location.reload(); }, 2000);
	    });
	});
    });
});


var i = 0;
var toplamfiyat = 0;
function addBasket() {
	var urunadi = $(".sprh").val();
	var urunadet = $(".basketamount").val();
	var urunfiyat = $(".basketprice").val();
	if (urunadi != "" && urunadet != "" && urunfiyat != "" && parseInt(urunadet) && parseInt(urunfiyat))
	{
		i++;
		toplamfiyat += urunadet*urunfiyat;
		var eklenecek = '<div id="sira'+i+'" class="siralar col-sm-12"><li class="col-sm-1">'+ i +'</li><input type="text" value="'+ urunadi +'" class="col-sm-6" name="productname[]" /><input type="number" id="adet'+i+'" value="'+ urunadet +'" class="col-sm-1 invamount" name="amount[]" /><input type="text" id="fiyat'+i+'" value="'+ urunfiyat +'" class="col-sm-2 invprice" name="price[]" /><li class="col-sm-2 colorRed son"><a class="sil btn btn-link"  onClick="delBasketPr('+i+')"><i class="fa fa-times"></i></a></li></div>';
		document.getElementById("sepet").innerHTML += eklenecek;
		$("#tplm").html(toplamfiyat);
		
		$(".spr").val("").focus();
		$(".basketprice").val("");
		$(".basketamount").val(1);
	}
};
function delBasketPr(e) {
       var count = $("#sepet").children().length;
	   var adet = $("#adet"+e).val();
       var fiyat = $("#fiyat"+e).val();
       var oncekiToplam = $("#tplm").text();
	   var slitoplam = adet*fiyat;
	   var yeniToplam = oncekiToplam-slitoplam;
	   $("#sira"+e).remove();
	   if(count < 2)
	   {
		   toplamfiyat = 0;
		   $("#tplm").html("0.00");
	   }
	   else {
		   $("#tplm").html(yeniToplam);
		   toplamfiyat = yeniToplam;
	   }
	   i--;
	   return false;
}


//Filter for search product
$(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
});


//--------------------------------------------------------------------------
//          THIS FOR ADD BUY INVOICE
//--------------------------------------------------------------------------

//Virtual products
 $(".notvirtual").on("click", function(){
        $(".buybank").toggle();
});

//Get pay amount on addstock.html
$(".buyamount").change(function(){
    var buyprice = $(".buyprice").val();
    var buyamount = $(".buyamount").val();
    $("input[name='buypayment']").val(buyprice*buyamount);
    $("#invtotal").val(buyprice*buyamount);
});

//--------------------------------------------------------------------------
//          THIS FOR SELL PRODUCT
//--------------------------------------------------------------------------

//For get total invoice on addinvoice.html and sellstock.html
$(".amount").on("change", function(){
    var amount = $(this).val();
    var price = $("#price").val();
    var discount = $("#discount").val();
    var totalinv = ((amount*price)-discount).toFixed(2);
    $(".totalinv").text(totalinv);
    $("input[name='totalinv']").val(totalinv);
});
$("#discount").on("change", function(){
    var amount = $("input[name='amount[]']").val();
    var price = $("#price").val();
    var discount = $("input[name='discount1']").val();
    var totalinv = ((amount*price)-discount).toFixed(2);
    $(".totalinv").text(totalinv);
    $("input[name='totalinv']").val(totalinv);
});

// Add ? or & on url
function removeOther(b, y) { 
  if(window.location.href.indexOf(y) != -1)
  {
    return false;
  }
  else if(window.location.href.indexOf(b) != -1) {
       location.search = location.search.replace(b,y);
  }
  else if(b == '')
  {
    window.location.search += '&' + y;
  }
  else if(window.location.href.indexOf('?') != -1)
  {
	window.location.search += '&' + y;
  }
  else
  {
	window.location.search += '?' + y;
  }
  
}