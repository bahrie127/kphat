<table class="display datatable" id="records"> 
    <thead> 

        <tr> 
            <th>No</th> 
            <th>Code</th> 
            <th>Nama</th> 
            <th>Alamat</th>
            <th>Telephone</th> 
            <th>Link Peta</th> 
            <th>Update</th> 

        </tr> 
    </thead> 
    <tbody> 
        <?
        $i = 0;
        foreach ($data as $row) {
            $linkpeta=substr($row->linkpeta, 0, 15);
            $i++;
            echo "<tr class=\"record\">";
            echo "<td>$i</td>";
            echo "<td>$row->codetempat</td>";
            echo "<td>$row->namatempat</td>";
            echo "<td>$row->alamat</td>";
            echo "<td>$row->telepon</td>";
            echo "<td>$linkpeta</td>";
            echo "<td align=\"center\"><a href=\"#\" class=\"editTempat\" codeTempat=\"$row->codetempat\" namaTempat=\"$row->namatempat\" alamatTempat=\"$row->alamat\" linkPeta=\"$row->linkpeta\" telephone=\"$row->telepon\">Edit</a>";
            
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