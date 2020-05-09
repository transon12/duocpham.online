$('.kch-del-caitemrt').on('click', function() { //alert('OK');
	
  	var id = $(this).attr('data-code'); //console.log(code);
  	if(id!=''){
  		$.ajax({
			url:base_url+'/index.php?c=cart&a=removecart',
			method:'get',
			data:{id:id},
			success:function(data){ //console.log(data);
				if(data!=''){
					var jdata = JSON.parse(data); console.log(jdata['list']);
					$('.total-cart-money').text(number_format(jdata['money']));
					$('.total-cart-product').text(number_format(jdata['total']));
					$('.item-'+id).remove();
					location.reload(setTimeout(2000));
				}
			}
		});
  	}
  return false;
});

$('.check-code').click(function($id, $codesale) {
       var id=$(this).attr('data-code');
       var codesale= $('.xtv1').val();
        $.ajax({
        	url:base_url+'/cart/addeventproduct?code='+id+'&codesale='+codesale,
        	dataType:'json',
        	success:function(data){ console.log(data)
        		if(data==200){
        			location.reload(setTimeout(2000));
        	}
        }

        });
        

    });

$('.mycart-inputs').on('change',function(){
	var number = parseInt($(this).val());
	var id = $(this).attr('data-code');
	if(number!=''&&number>0&&number<6){ //alert(number);
		addCart(id,number,2);
		 setTimeout(function(){
   			location.reload();}, 100);
		 //alert(number+' Sản phẩm vào giỏ hàng.');
	}
})
$('.addcart-input').on('click',function(){
	var number = parseInt($('.mycart-input').val());
	var id = $('.mycart-input').attr('data-code');
	if(number!=''&&number>0&&number<6){ //alert(number);
		addCart(id,number,2);
		//alert(number+' Sản phẩm vào giỏ hàng.');
	}
})
$('.mycart-minus').on('click',function(){
	var id = $(this).attr('data-code');
	if(id!=''){ //alert(id);
		addCart(id,-1,1);
		 setTimeout(function(){
   			location.reload();}, 100);
	}
})

$('.mycart-plus').on('click',function(){
	 
	var id = $(this).attr('data-code');
	if(id!=''){ //alert(id);
		addCart(id,1,1);
		 setTimeout(function(){
   			location.reload();},100);
	};
})

function addCart(id,total,type,event){ //type = 1 tang/giam; 2- tong 
	var total ;
	if (total<6) {
	$.ajax({
		url:base_url+'/index.php?c=cart&a=addcart',
		method:'get',
		data:{id:id,total:total,type:type,event:event},
		success:function(data){ //console.log(data);
			if(data!=''){
				var jdata = JSON.parse(data); console.log(jdata['list']);
				var html = '';
				if(jdata['list']!=''){
					for(i in jdata['list']){
						html += '<li class="item-'+jdata["list"][i]["id"]+'"> <div class="cart-single-product"> <div class="media"> <div class="pull-left cart-product-img"> <a href="#"> <img style="height:80px;" class="img-responsive" alt="product" src="'+base_url+'/upload/'+jdata["list"][i]["avatar"]+'"> </a> </div><div class="media-body cart-content"> <ul> <li> <h2><a href="#">'+jdata["list"][i]["name"]+'</a></h2> <h3><span>Mã SP:</span>'+jdata["list"][i]["code"]+'( x'+jdata["list"][i]["total"]+')</h3> </li><li style="text-align: right;"> <p>'+number_format(jdata["list"][i]["money"])+'</p></li><li style="text-align: right;"> <a data-code="'+jdata["list"][i]["id"]+'" class="trash kch-del-cartitem" href="#"><i class="fa fa-trash-o"></i></a> </li></ul> </div></div></div></li>';
						if(jdata["list"][i]["id"]==id){ $('.money-'+id).text(number_format(jdata["list"][i]["money"])+''); }
					}
				}else{
					html ='Chưa có sản phẩm nào';
				}
				$('.total-cart-money').text(number_format(jdata['money']));
				$('.total-cart-product').text(number_format(jdata['total']));
				$('.shop-cart-view').html(html);
			}
			setTimeout( 1000);
		}
	});
}else{
	alert('vượt quá số lượng');
	return false;
}
}

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