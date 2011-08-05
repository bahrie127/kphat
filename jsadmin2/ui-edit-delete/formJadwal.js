$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formJadwal" ).dialog({
        autoOpen: false,
        resizable: false,
        height:180,
        modal: true,
        hide: 'Slide',
        buttons: {
            "Delete": function() {
                var del_id = {
                    id : $('#del_id').val()
                };
                $.ajax({
                    type: "POST",
                    url : "jadwal/delete",
                    data: del_id,
                    success: function(msg){
                            $('#show21').html(msg);       
                        $('#confirm-formJadwal' ).dialog( "close" );
                    }
                });
                return false;
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
		
    $( "#form_jadwal" ).dialog({
        autoOpen: false,
                    
        width: 475,
        modal: true,
                    
        hide: 'Slide',
                   
        buttons: {
            "Update": function() {
                var form_data = {
                    codetempat: $('#codeJadwal').val(),
                    namatempat: $('#namaEvent').val(),
                    jam: $('#waktu').val(),
                    tanggal: $('#tanggal').val(),
                   
                                                
                                               
                    ajax:1
                };
				  
                                      

                $.ajax({
                    url : "jadwal/update",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                        $('#show21').html(msg),
                        $('#codeJadwal').val(''),
                        $('#namaEvent').val(''),
                        $('#waktu').val(''),
                        $('#tanggal').val(''),
                        
                                        
                                    
                        $( '#form_jadwal' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#codeJadwal').val(''),
                $('#namaEvent').val(''),
                $('#waktu').val(''),
                $('#tanggal').val(''),
                
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            $('#codeJadwal').val(''),
                $('#namaEvent').val(''),
                $('#waktu').val(''),
                $('#tanggal').val('')
                                
        }
    });

                
});
	
$(".editJadwal").live("click",function(){
    var code = $(this).attr("codejadwalevent");
    var nama = $(this).attr("namaEvent");
    var jam = $(this).attr("jam");
    var tanggal = $(this).attr("tanggal");
               

    $('#codeJadwal').val(code);
    $('#namaEvent').val(nama);
    $('#waktu').val(jam);
    $('#tanggal').val(tanggal);
        
    $( "#form_jadwal" ).dialog( "open" );
        
    return false;
});
	
$(".delbuttonjadwal").live("click",function(){
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $('#del_id').val(del_id);
    $( "#confirm-formJadwal" ).dialog( "open" );
    	
    return false;
});