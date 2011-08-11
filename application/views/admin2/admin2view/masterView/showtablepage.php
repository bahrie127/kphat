<table class="display datatable" > 
            <thead> 
                <tr> 
                    <th>No</th> 
<<<<<<< HEAD
                    <th>Code Page</th> 
=======
                    <th>judul</th> 
>>>>>>> bb7f4822cb4e8d630cef8cf43beeeac710c59d4c
                    <th>Isi</th> 
                    <th>Kategori</th> 
                    
                    <th>Edit</th> 

                </tr> 
            </thead> 
    <tbody> 
        <?
        $i = 0;
<<<<<<< HEAD
        
            $i++;
            echo "<tr class=\"record\">";
            echo "<td>$i</td>";
            echo "<td>code page</td>";
=======
         foreach ($data as $row) {
            $i++;
            echo "<tr class=\"record\">";
            echo "<td>$i</td>";
            echo "<td>$row->judul</td>";
>>>>>>> bb7f4822cb4e8d630cef8cf43beeeac710c59d4c
            echo "<td>isi</td>";
            echo "<td>kategori</td>";
            
            
<<<<<<< HEAD
            echo "<td align=\"center\"><a href=\"page/edit\" >Edit</a>";
            echo " </td>";
            echo "</tr>";
       
=======
            echo "<td align=\"center\"><a href=\"edit/$row->codehalaman\" >Edit</a>";
            echo " </td>";
            echo "</tr>";
         }
>>>>>>> bb7f4822cb4e8d630cef8cf43beeeac710c59d4c
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