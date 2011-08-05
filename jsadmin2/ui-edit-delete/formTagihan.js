$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formTagihan" ).dialog({
        autoOpen: false,
        resizable: false,
        height:180,
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
                        $('#confirm-formTagihan' ).dialog( "close" );
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
	

$(".conbuttontagihan").live("click",function(){
    var element = $(this);
    var con_id = element.attr("id");
    
    $('#del_id').val(con_id);
    $( "#confirm-formTagihan" ).dialog( "open" );
    	
    return false;
});
   
