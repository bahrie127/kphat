$(function() {
	
    $( "#dialog:ui-dialog" ).dialog( "destroy" );
		
    $( "#form_setting" ).dialog({
        autoOpen: false,
                    
        width: 475,
        modal: true,
                    
        hide: 'Slide',
                   
        buttons: {
            "Update": function() {
                var form_data = {
                    code: $('#codeAdmin').val(),
                    nama: $('#namaAdmin').val(),
                    email: $('#emailAdmin').val(),
                    telephone: $('#telephoneAdmin').val(),
                    username: $('#username').val(),
                    password: $('#password').val(),
                                                
                                               
                    ajax:1
                };
				  
                                      

                $.ajax({
                    url : "pemateri/update",
                    type : 'POST',
                    data : form_data,
                    success: function(msg){
                       
                        $('#codeAdmin').val(''),
                        $('#namaAdmin').val(''),
                        $('#emailAdmin').val(''),
                        $('#telephoneAdmin').val(''),
                        $('#username').val(''),
                        $('#password').val(''),
                                        
                                    
                        $( '#form_setting' ).dialog( "close" )
                    }
                });
				
            },
            Cancel: function() {
                $('#codeAdmin').val(''),
                $('#namaAdmin').val(''),
                $('#emailAdmin').val(''),
                $('#telephoneAdmin').val(''),
                $('#username').val(''),
                $('#password').val(''),
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
    var code = $(this).attr("codeAdmin");
    var nama = $(this).attr("namaAdmin");
    var email = $(this).attr("emailAdmin");
    var telephone = $(this).attr("telephoneAdmin");
    var username = $(this).attr("username");
    var password = $(this).attr("password");
               

    $('#codeAdmin').val(code);
    $('#namaAdmin').val(nama);
    $('#emailAdmin').val(email);
    $('#telephoneAdmin').val(telephone);
    $('#username').val(username);
    $('#password').val(password);
        
        
    $( "#form_setting" ).dialog( "open" );
        
    return false;
});
