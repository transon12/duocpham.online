function addCart(id){
	var total = 1;
	if(total<5){
	$.ajax({
		url:base_url+'/index.php?c=cart&a=addcart',
		method:'get',
		data:{id:id,total:total,type:1},
		success:function(data){ console.log(data);
			if(data!=''){
				var jdata = JSON.parse(data); console.log(jdata['list']);
				$('.shop-cart-view').html(data);
				var html = '';
				$('.total-cart-money').text(number_format(jdata['money'])+'');
				$('.total-cart-product').text(jdata['total']);
				$('.shop-cart-view').html(html);
			}
		}
	});
	event.preventDefault();
	return false;
	}else{
		alert('aaaaa');
	}
}



$(document).on('click','a.kch-del-cartitem', function() { //alert('OK');
	// $.LoadingOverlay("show",{image: "",text: "Loading...",size:5});
  	var id = $(this).attr('data-code'); //console.log(code);
  	if(id!=''){
  		$.ajax({
			url:base_url+'/index.php?c=cart&a=removecart',
			method:'get',
			data:{id:id},
			success:function(data){ //console.log(data);
				if(data!=''){
					var jdata = JSON.parse(data); //console.log(jdata['list']);
					$('.total-cart-money').text(number_format(jdata['money'])+' ');
					$('.total-cart-product').text(number_format(jdata['total'])+' ');
					$('.item-'+id).remove();
				}
			}
		});
  	}
  return false;
});



function number_format (number, decimals=0, dec_point='.', thousands_sep=',') {
    // Strip all characters but numerical ones.
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}
