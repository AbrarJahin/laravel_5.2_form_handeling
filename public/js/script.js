$(document).ready(function()
{
	"use strict";

	$('.date-field').datetimepicker({
		//format: 'DD/MM/YYYY'
        format: 'YYYY/MM/DD'
	});

	$('.check-styled').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green',
        cursor: true,
        labelHover: true,
        labelHoverClass: 'hover',
    });

    $(function(){
        $('.color-pic').colorpicker({});
    });


});
