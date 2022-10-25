$(document).ready(function(){
    $("#datepicker").datepicker( {
        format: "mm-yyyy",
        viewMode: "months", 
        minViewMode: "months"
    }); // input year month

    $('#donate').change(function(){
        var val=$(this).val();
        var min= $('#donate').attr('min');
        var max= $('#donate').attr('max');
        $('#donate').css({"background-size":(val - min) * 100 / (max - min) + '% 100%' });
        var elmnt = $('#donate').get(0);
        var width = elmnt.offsetWidth;
        if((val/max)*width - 50 > 0 && ((width - (val/max)*width) >= 50)) {
        	if(val/max > 0.5) {
          	$('.box').css({"left": ((val/max)*width + (0.5-(val/max))*92 ) + "px"});
          } else {
          	$('.box').css({"left": ((val/max)*width + (0.5-(val/max))*108 ) + "px"});
          }
        } else if((width - (val/max)*width) < 50) {
        	$('.box').css({"left": ((val/max)*width - 58 ) + "px"});
        }  else {
        	$('.box').css({"left": ((val/max)*width + 58 ) + "px"});
        }
        $('.box .number').text(""+val+"");
    });//input range
    
    $('.btn-reset').click(function(){
        $('#donate').css({"background-size":'50% 100%'});
        $('.box').css({"left": "50%"});
        $('.box .number').text("500");
        $('.invalid-feedback').css({"display": "none"});
        $('input').attr('value', '');
        $('#gender option').attr('selected',false);
        $('#gender option:first').attr('selected',true);
        $('.form-check-input').attr('checked',false);
        $('#visa').attr('checked',true);
    });//reset form
});