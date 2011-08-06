$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formEvent" ).dialog({
        autoOpen: false,
        resizable: false,
        height:140,
        modal: true,
        hide: 'Slide',
        buttons: {
            "Delete": function() {
                var del_id = {
                    id : $("#del_id").val()
                };
                $.ajax({
                    type: "POST",
                    url : "event/delete",
                    data: del_id,
                    success: function(msg){
                                   
                        $('#confirm-formEvent' ).dialog( "close" );
                    }
                });

            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
		
   

                
});
	


	
$(".delbuttonevent").live("click",function(){
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $('#del_id').val(del_id);
    $( "#confirm-formEvent" ).dialog( "open" );
    	
    return false;
});
   
