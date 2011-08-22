$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#confirm-formJadwal" ).dialog({
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
                    codejadwal: $('#codeJadwal').val(),
                    codenamaevent:$('#codeNamaJadwal').val(),
                    codeevent: $('#codeeventedit').val(),
                    codepemateri: $('#codepemateriedit').val(),
                    codetempat: $('#codetempatedit').val(),
                    waktu: $('#waktuJadwal').val(),
                    tanggal: $('#tanggalJadwal').val(),
                   harga: $('#hargaJadwal').val(),
                                                
                                               
                    ajax:1
                };
				  
                                      

                $.ajax({
                    url : "jadwal/update",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                        $('#show21').html(msg),
                        $('#codeJadwal').val(''),
                        $('#codeNamaJadwal').val(''),
                        $('#waktuJadwal').val(''),
                        $('#tanggalJadwal').val(''),
                        $('#hargaJadwal').val(''),
                                        
                                    
                        $( '#form_jadwal' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#codeJadwal').val(''),
                $('#codeNamaJadwal').val(''),
                $('#waktuJadwal').val(''),
                $('#tanggalJadwal').val(''),
                
                $( this ).dialog( "close" );
            }
        },
        close: function() {
             $('#codeJadwal').val(''),
                $('#codeNamaJadwal').val(''),
                $('#waktuJadwal').val(''),
                $('#tanggalJadwal').val('')
                                
        }
    });

                
});
	
$(".editJadwal").live("click",function(){
    var code = $(this).attr("codejadwalevent");
    var codenama = $(this).attr("codenamaevent");
    var waktu = $(this).attr("waktu");
    var harga=$(this).attr("hargaJadwal");
    var tanggal = $(this).attr("tanggal");
               
               
    $('#codeJadwal').val(code);
    $('#codeNamaJadwal').val(codenama);
    $('#hargaJadwal').val(harga);
    $('#waktuJadwal').val(waktu);
    $('#tanggalJadwal').val(tanggal);
        
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