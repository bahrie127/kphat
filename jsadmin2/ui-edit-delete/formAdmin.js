$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formAdmin" ).dialog({
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
                    url : "<?php echo site_url('tempat/delete') ?>",
                    data: del_id,
                    success: function(msg){
                                   
                        $('#confirm-formAdmin' ).dialog( "close" );
                    }
                });

            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
		

});
	


	
$(".delbutton").live("click",function(){
    var element = $(this);
    var del_id = element.attr("codeAdmin");
    var info = 'codeAdmin=' + del_id;
    $('#del_id').val(del_id);
    $( "#confirm-formAdmin" ).dialog( "open" );
    	
    return false;
});