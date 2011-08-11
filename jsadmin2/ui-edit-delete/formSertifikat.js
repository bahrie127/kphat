$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formSertifikat" ).dialog({
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
                    url : "",
                    data: del_id,
                    success: function(msg){
                        $('#show21').html(msg);           
                        $('#confirm-formSertifikat' ).dialog( "close" );
                    }
                });

            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
		
    $( "#form_sertifikat" ).dialog({
        autoOpen: false,
                    
        width: 475,
        modal: true,
                    
        hide: 'Slide',
                   
        buttons: {
            "Update": function() {
                var form_data = {
                    codepemateri: $('#noSertifikat').val(),
                    nama: $('#nama').val(),
                    event: $('#event').val(),
                                                
                                               
                    ajax:1
                };
				  
                                      

                $.ajax({
                    url : "",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                        $('#show21').html(msg),
                        $('#noSerifikat').val(''),
                        $('#nama').val(''),
                        $('#event').val(''),
                                        
                                    
                        $( '#form_sertifikat' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#noSerifikat').val(''),
                        $('#nama').val(''),
                        $('#event').val(''),
                $( this ).dialog( "close" );
            }
        },
        close: function() {
           $('#noSerifikat').val(''),
                        $('#nama').val(''),
                        $('#event').val('')
                                
        }
    });

                
});
	
$(".edit").live("click",function(){
    var code = $(this).attr("noSertifikat");
    var nama = $(this).attr("nama");
    var event = $(this).attr("event");
    
    $('#noSertifikat').val(code);
    $('#nama').val(nama);
    $('#event').val(event);
        
    $( "#form_sertifikat" ).dialog( "open" );
        
    return false;
});
	
$(".delbuttonsertifikat").live("click",function(){
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $('#del_id').val(del_id);
    $( "#confirm-formSertifikat" ).dialog( "open" );
    	
    return false;
});
   
