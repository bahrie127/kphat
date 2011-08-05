<table class="display datatable" > 
            <thead> 
               <tr> 
                    <th>No</th> 
                    <th>Code Tagihan</th> 
                    <th>Nama user</th> 
                    <th>Status</th>
                    <th>Total</th>
                    
                    <th>Confirm Pembayaran</th> 

                </tr> 
            </thead> 
    <tbody> 
        <?
        $i = 0;
        foreach ($data as $row) {
            $i++;
            echo "<tr class=\"record\">";
            echo "<td>$i</td>";
            echo "<td>$row->tagihan_codepembayaran</td>";
            echo "<td>$row->user_nama</td>";
            echo "<td>$row->tagihan_status</td>";
            echo "<td>$row->tagihan_jumlahharga</td>";
            
            echo "<td align=\"center\"><a href=\"#\" class=\"conbuttonbatal\" id=\"$row->tagihan_codepembayaran\">Confirm</a>";
            
            echo "</td></tr>";
        }
        ?>

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
