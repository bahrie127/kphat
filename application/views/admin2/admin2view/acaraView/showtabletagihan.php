
<table class="display datatable" > 
            <thead> 
               <tr> 
                    <th>No</th> 
                    <th>Code Tagihan</th> 
                    <th>Nama user</th> 
                    
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Kurang</th>
                    <th>Status</th>
                    <th>Confirm Pembayaran</th> 

                </tr> 
            </thead> 
    <tbody> 
        <?
        $i = 0;
        foreach ($data as $row) {
            $i++;
            $rowkurang=$row->tagihan_jumlahharga-$row->tagihan_bayar;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$row->tagihan_codepembayaran</td>";
            echo "<td>$row->user_nama</td>";
           
            echo "<td>$row->tagihan_tanggal</td>";
            echo "<td>$row->tagihan_jumlahharga</td>";
            echo "<td>$rowkurang</td>";
            echo "<td>$row->tagihan_status</td>";
            echo "<td align=\"center\">"; 
            if($row->tagihan_status=="belum"||$row->tagihan_status=="dp"){
                echo "<a href=\"#\" class=\"conbuttontagihan\" codeuser=\"$row->user_codeuser\" status=\"$row->tagihan_status\" dp=\"$row->tagihan_bayar\" kurang=\"$rowkurang\" idtagihan=\"$row->tagihan_codepembayaran\">Confirm</a>";
            }  else{
                echo "sudah diconfirm";
            }
            
            
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
