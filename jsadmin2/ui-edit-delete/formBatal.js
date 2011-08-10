$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formBatal" ).dialog({
        autoOpen: false,
        resizable: false,
        height:140,
        modal: true,
        hide: 'Slide',
        buttons: {
            "Delete": function() {
                var del_id = {
                    id : $('#del_id').val()
                };
                $.ajax({
                    type: "POST",
                    url : "tempat/delete",
                    data: del_id,
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
		
    $( "#form_batal" ).dialog({
        autoOpen: false,
                    
        width: 475,
        modal: true,
                    
        hide: 'Slide',
                   
        buttons: {
            "Dibatalkan": function() {
                var form_data = {
                    codetempat: $('#codeEvent').val(),
                    namatempat: $('#namaEvent').val(),
                    
                                                
                                               
                    ajax:1
                };
				  
                                      

                $.ajax({
                    url : "tempat/update",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                        $('#show21').html(msg),
                        $('#codeTempat').val(''),
                        
                                        
                                    
                        $( '#form_batal' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#codeEvent').val(''),
                $('#namaEvent').val(''),
                
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            $('#codeEvent').val(''),
            $('#namaEvent').val('')
           
                                
        }
    });

                
});
	
$(".editBatal").live("click",function(){
    var code = $(this).attr("codepembayaran");
    //var nama = $(this).attr("namaEvent");
    
               

    $('#codepembayaran').val(code);
    //$('#namaEvent').val(nama);
    
        
    $( "#form_batal" ).dialog( "open" );
        
    return false;
});
	
$(".delbuttonbatal").live("click",function(){
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $('#del_id').val(del_id);
    $( "#confirm-formBatal" ).dialog( "open" );
    	
    return false;
});