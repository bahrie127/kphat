$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formTempat" ).dialog({
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
                        $('#confirm-formTempat' ).dialog( "close" );
                    }
                });
                return false;
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
		
    $( "#form_tempat" ).dialog({
        autoOpen: false,
                    
        width: 475,
        modal: true,
                    
        hide: 'Slide',
                   
        buttons: {
            "Update": function() {
                var form_data = {
                    codetempat: $('#codeTempat').val(),
                    namatempat: $('#namaTempat').val(),
                    alamat: $('#alamatTempat').val(),
                    telepon: $('#telephone').val(),
                    linkpeta: $('#linkPeta').val(),
                                             
                    ajax:1
                };
		 $.ajax({
                    url : "tempat/update",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                        $('#show21').html(msg),
                        $('#codeTempat').val(''),
                        $('#namaTempat').val(''),
                        $('#alamat').val(''),
                        $('#telephone').val(''),
                        $('#linkPeta').val(''),
                        $( '#form_tempat' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#codeTempat').val(''),
                $('#namaTempat').val(''),
                $('#alamat').val(''),
                $('#telephone').val(''),
                $('#linkPeta').val(''),
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            $('#codeTempat').val(''),
            $('#namaTempat').val(''),
            $('#alamat').val(''),
            $('#telephone').val(''),
            $('#linkPeta').val('')
                                
        }
    });

                
});
	
$(".editTempat").live("click",function(){
    var code = $(this).attr("codeTempat");
    var nama = $(this).attr("namaTempat");
    var alamat = $(this).attr("alamatTempat");
    var telephone = $(this).attr("telephone");
    var linkpeta = $(this).attr("linkPeta");
               

    $('#codeTempat').val(code);
    $('#namaTempat').val(nama);
    $('#alamatTempat').val(alamat);
    $('#telephone').val(telephone);
    $('#linkPeta').val(linkpeta);
        
        
    $( "#form_tempat" ).dialog( "open" );
        
    return false;
});
	
$(".delbuttontempat").live("click",function(){
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $('#del_id').val(del_id);
    $( "#confirm-formTempat" ).dialog( "open" );
    	
    return false;
});
   
