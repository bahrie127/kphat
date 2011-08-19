$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formDiskon" ).dialog({
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
                    url : "diskon/edit",
                    data: del_id,
                    success: function(msg){
                        $('#show21').html(msg);           
                        $('#confirm-formDiskon' ).dialog( "close" );
                    }
                });

            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
		
    $( "#form_diskon" ).dialog({
        autoOpen: false,
                    
        width: 475,
        modal: true,
                    
        hide: 'Slide',
                   
        buttons: {
            "Update": function() {
               
                var form_data = {
                    id: $('#idpotongan').val(),
                    namapotongan: $('#namapotongan').val(),
                    nominal: $('#nominal').val(),
                   
                    ajax:1
                };
                $.ajax({
                    url : "diskon/edit",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                    
                        $('#show21').html(msg),
                        $('#idpotongan').val(''),
                        $('#namapotongan').val(''),
                        $('#nominal').val(''),
                       
                                        
                                    
                        $( '#form_diskon' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#idpotongan').val(''),
                        $('#namapotongan').val(''),
                        $('#nominal').val(''),
               
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            $('#idpotongan').val(''),
                        $('#namapotongan').val(''),
                        $('#nominal').val('')
           
                                
        }
    });

                
});
	
$(".edit").live("click",function(){
    var code = $(this).attr("idpotongan");
    var nama = $(this).attr("namapotongan");
    var nominal = $(this).attr("nominal");
   
               

    $('#idpotongan').val(code);
    $('#namapotongan').val(nama);
    $('#nominal').val(nominal);
    
        
        
    $( "#form_diskon" ).dialog( "open" );
        
    return false;
});
	
$(".delbuttonpemateri").live("click",function(){
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $('#del_id').val(del_id);
    $( "#confirm-formDiskon" ).dialog( "open" );
    	
    return false;
});
   
