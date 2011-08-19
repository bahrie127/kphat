$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
      $( "#confirm-formKontan" ).dialog({
        autoOpen: false,
        resizable: false,
        height:140,
        modal: true,
        hide: 'Slide',
        buttons: {
            "Bayar": function() {
                var del_id = {
                    id : $('#idtotaltagihan').val(),
                    kurang: $('#totaltagihan').val(),
                    codeuser: $('#user').val()
                };
                $.ajax({
                    type: "POST",
                    url : "tagihan/all",
                    data: del_id,
                    success: function(msg){
                            $('#show21').html(msg);       
                        $('#confirm-formKontan' ).dialog( "close" );
                    }
                });
                return false;
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
                
    $( "#confirm-formTagihan" ).dialog({
        autoOpen: false,
                    
        width: 475,
        modal: true,
                    
        hide: 'Slide',
                   
        buttons: {
            "Bayar": function() {
                
                var form_data = {
                    id: $('#idtagihan').val(),
                    kurang: $('#kurang').val(),
                    bayar: $('#bayarharga').val(),
                    dp:$('#dp').val(),
                    status:$('#status').val(),
                    codeuser:$('#codeuser').val(),
                                               
                    ajax:1
                };
		
                $.ajax({
                    url : "tagihan/update",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                        $('#show21').html(msg),
                        $('#idtagihan').val(''),
                        $('#kurang').val(''),
                        $('#bayarharga').val(''),
                        $('#dp').val(''),
                        $('#status').val(''),
                        $('#codeuser').val(''),
                        $( '#confirm-formTagihan' ).dialog( "close" )
                    }
                });
            		
            },
            Cancel: function() {
                $('#idtagihan').val(''),
                $('#kurang').val(''),
                $('#bayarharga').val(''),
                $('#dp').val(''),
                $('#status').val(''),
                $('#codeuser').val(''),
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            $('#idtagihan').val(''),
            $('#kurang').val(''),
            $('#bayarharga').val(''),
            $('#dp').val(''),
            $('#status').val(''),
            $('#codeuser').val('')
                                
        }
    });

		
      
});
	

$(".conbuttontagihan").live("click",function(){
    var element = $(this);
    var con_id = element.attr("idtagihan");
    var codeuser=element.attr("codeuser");
    var kurang=element.attr("kurang");
    var dp=element.attr("dp");
    var status=element.attr("status");
    
    $('#codeuser').val(codeuser);
    $('#status').val(status);
    $('#dp').val(dp);
    $('#idtagihan').val(con_id);
    $('#kurang').val(kurang);
    $( "#confirm-formTagihan" ).dialog( "open" );
    	
    return false;
});
   
   $(".bayarkontan").live("click",function(){
       
    var element = $(this);
    var del_id = element.attr("idtotaltagihan");
    var kurang=element.attr("totaltagihan");
    var codeuser=element.attr("user");
    var info = 'id=' + del_id;
     $('#user').val(codeuser);
    $('#idtotaltagihan').val(del_id);
    $('#totaltagihan').val(kurang);
    $( "#confirm-formKontan" ).dialog( "open" );
    	
    return false;
});
