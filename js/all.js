$( function() {
    $( '#tabs' ).tabs({
        fx: { height: 'toggle', opacity: 'toggle' }
    });
    
    $.ajax({
        url: 'index.php/home/read',
        dataType: 'json',
        success: function( response ) {
            //convert json string returned from server into native array of javascript objects
            $( '#readTemplate' ).render( response ).appendTo( "#records" );
        }
    });
});
