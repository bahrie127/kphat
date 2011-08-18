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
                    url : "pemateri/delete",
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
                    codepemateri: $('#code').val(),
                    nama: $('#namadiskon').val(),
                    diskon: $('#diskon').val(),
                   
                    ajax:1
                };
                $.ajax({
                    url : "",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                    
                        $('#show21').html(msg),
                        $('#code').val(''),
                        $('#namadiskon').val(''),
                        $('#diskon').val(''),
                       
                                        
                                    
                        $( '#form_diskon' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#code').val(''),
                $('#namadiskon').val(''),
                $('#diskon').val(''),
               
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            $('#code').val(''),
            $('#namadiskon').val(''),
            $('#diskon').val('')
           
                                
        }
    });

                
});
	
$(".edit").live("click",function(){
    var code = $(this).attr("code");
    var nama = $(this).attr("namadiskon");
    var diskon = $(this).attr("diskon");
   
               

    $('#code').val(code);
    $('#namadiskon').val(nama);
    $('#diskon').val(diskon);
    
        
        
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
   
