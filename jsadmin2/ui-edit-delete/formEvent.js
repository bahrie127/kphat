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
		
    $( "#form_event" ).dialog({
        autoOpen: false,
                    
        width: 475,
        modal: true,
                    
        hide: 'Slide',
                   
        buttons: {
            "Update": function() {
                var form_data = {
                    codeevent: $('#codeEvent').val(),
                    namaevent: $('#namaEvent').val(),
                    materi: $('#tiny_input').val(),
                    praktek: $('#praktek').val(),
                   
                                                
                                               
                    ajax:1
                };
				  
                                      

                $.ajax({
                    url : "event/update",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                        $('#show21').html(msg),
                        $('#codeEvent').val(''),
                        $('#namaEvent').val(''),
                        $('#tiny_input').val(''),
                        $('#praktek').val(''),
                        
                                        
                                    
                        $( '#form_event' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#codeEvent').val(''),
                $('#namaEvent').val(''),
                $('#tiny_input').val(''),
               
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            $('#codeEvent').val(''),
            $('#namaEvent').val(''),
            $('#tiny_input').val('')
            
        }
    });

                
});
	
$(".editE").live("click",function(){
    var code = $(this).attr("codeEvent");
    var nama = $(this).attr("namaEvent");
    var informasi = $(this).attr("tiny_input");
   
               

    $('#codeEvent').val(code);
    $('#namaEvent').val(nama);
    $('#tiny_input').val(informasi);
    
        
        
    $( "#form_event" ).dialog( "open" );
        
    return false;
});
	
$(".delbuttonevent").live("click",function(){
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $('#del_id').val(del_id);
    $( "#confirm-formEvent" ).dialog( "open" );
    	
    return false;
});
   
