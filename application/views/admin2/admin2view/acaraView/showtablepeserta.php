<table class="display datatable" > 
    <thead> 
        <tr> 
            <th>No</th> 
            <th>Code</th> 
            <th>Tanggal Daftar</th> 
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Event</th>
            <th>Status</th>



        </tr> 
    </thead> 
    <tbody> 
        <?php $i=0;foreach ($data as $row): $i++;?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row->jadwalevent_codejadwalevent; ?></td>
                <td><?php echo $row->pendaftaran_tanggal; ?></td>
                <td><?php echo $row->user_nama; ?></td>
                <td><?php echo $row->user_alamat; ?></td>
                <td><?php echo $row->user_email; ?></td>
                <td><?php echo $row->event_namaevent; ?></td>
                <td><?php echo $row->tagihan_status; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody> 
</table>

<script text="javascript">
    $(document).ready(function() {
        // DataTables Config (more info can be found at http://www.datatables.net/)
        var oTable = $('.datatable').dataTable( {
            "bJQueryUI": true,
            "sScrollX": "",
            "bSortClasses": false,
            "aaSorting": [[0,'asc']],
            "bAutoWidth": true,
            "bInfo": true,
            "sScrollY": "100%",	
            "sScrollX": "100%",
            "bScrollCollapse": true,
            "sPaginationType": "full_numbers",
            "bRetrieve": true
        } );

	


        // DataTables Config - this reloads dataTables when it is placed in a hidden tab			
	
        $(".tabs").tabs( {
            "select": function(event, ui) {
                oTable.fnAdjustColumnSizing();
                $('.tabs div.dataTables_scroll').css({
                    "visibility":"hidden" 
                });
            },
            "show": function(event, ui) {
                var oTable = $('div.dataTables_scrollBody > table', ui.panel).dataTable();
                if ( oTable.length > 0 ) {
                    oTable.fnAdjustColumnSizing();
                    $(".tabs div.dataTables_scroll").css({
                        "display":"none",
                        "visibility":"visible" 
                    }).show();
                }
            }
        } );

        // DataTables Config - this reloads dataTables when it is placed in a closed accordion			
        $( ".content_accordion" ).accordion( {
            "change": function(event, ui) {
                var oTable = $('div.dataTables_scrollBody > table', ui.panel).dataTable();
                if ( oTable.length > 0 ) {
                    oTable.fnAdjustColumnSizing();
                    $(".content_accordion div.dataTables_scroll").css({
                        "display":"none",
                        "visibility":"visible" 
                    }).show();
                }
            }
        });
    
        $(window).resize(function(){
            oTable.fnAdjustColumnSizing();
        });
    });
</script>
