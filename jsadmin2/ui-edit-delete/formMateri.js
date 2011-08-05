$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formMateri" ).dialog({
        autoOpen: false,
        resizable: false,
        height:180,
        modal: true,
        hide: 'Slide',
        buttons: {
            "Delete": function() {
                var del_id = {
                    id : $("#del_id").val()
                    };
                $.ajax({
                    type: "POST",
                    url : "pemateri/delete",
                    data: del_id,
                    success: function(msg){
                        $('#show21').html(msg);           
                        $('#confirm-formMateri' ).dialog( "close" );
                    }
                });

            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
		
    $( "#form_pemateri" ).dialog({
        autoOpen: false,
                    
        width: 475,
        modal: true,
                    
        hide: 'Slide',
                   
        buttons: {
            "Update": function() {
                var form_data = {
                    codepemateri: $('#codePemateri').val(),
                    nama: $('#namaPemateri').val(),
                    email: $('#emailPemateri').val(),
                    telephone: $('#telephonePemateri').val(),
                                                
                                               
                    ajax:1
                };
				  
                                      

                $.ajax({
                    url : "pemateri/update",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                        $('#show21').html(msg),
                        $('#codePemateri').val(''),
                        $('#namaPemateri').val(''),
                        $('#emailPemateri').val(''),
                        $('#telephonePemateri').val(''),
                                        
                                    
                        $( '#form_pemateri' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#codePemateri').val(''),
                $('#namaPemateri').val(''),
                $('#emailPemateri').val(''),
                $('#telephonePemateri').val(''),
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            $('#codePemateri').val(''),
            $('#namaPemateri').val(''),
            $('#emailPemateri').val(''),
            $('#telephonePemateri').val('')
                                
        }
    });

                
});
	
$(".edit").live("click",function(){
    var code = $(this).attr("codePemateri");
    var nama = $(this).attr("namaPemateri");
    var email = $(this).attr("emailPemateri");
    var telephone = $(this).attr("telephonePemateri");
               

    $('#codePemateri').val(code);
    $('#namaPemateri').val(nama);
    $('#emailPemateri').val(email);
    $('#telephonePemateri').val(telephone);
        
        
    $( "#form_pemateri" ).dialog( "open" );
        
    return false;
});
	
$(".delbuttonpemateri").live("click",function(){
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $('#del_id').val(del_id);
    $( "#confirm-formMateri" ).dialog( "open" );
    	
    return false;
});
   
