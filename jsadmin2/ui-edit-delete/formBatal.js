$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formBatal" ).dialog({
        autoOpen: false,
        resizable: false,
        height:140,
        modal: true,
        hide: 'Slide',
        buttons: {
            "Confirm": function() {
                var con_id = {
                    id : $('#con_id').val()
                };
                $.ajax({
                    type: "POST",
                    url : "tempat/update",
                    data: con_id,
                    success: function(msg){
                            $('#show21').html(msg);       
                        $('#confirm-formBatal' ).dialog( "close" );
                    }
                });
                return false;
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
		
      
});
	

$(".conbuttonbatal").live("click",function(){
    var element = $(this);
    var con_id = element.attr("id");
    
    $('#del_id').val(con_id);
    $( "#confirm-formBatal" ).dialog( "open" );
    	
    return false;
});
   
