<ul id="touch_sort" class="tab_header grad_colour round_top clearfix">
    <li><a href="#tabs-1" class="round_top">Lihat Data</a></li>
    
   
</ul>	
<a href="#" class="grabber">&nbsp;</a>
<a href="#" class="toggle">&nbsp;</a>
<div class="toggle_container">

    <div id="tabs-1" class="block no_padding">
        <table class="display datatable" > 
            <thead> 
                <tr> 
                    <th>No</th> 
                    <th>Nama</th> 

                    <th>Kena Potongan (%)</th> 

                    <th>Edit</th> 
                    
                </tr> 
            </thead> 
            <tbody> 

             <?
        $i = 0;

        foreach ($data as $row) {
            
            $i++;
            echo "<tr class=\"record\">";
            
            echo "<td>$row->id</td>";
            echo "<td>$row->namapotongan</td>";
            echo "<td>$row->nominal</td>";
            

            echo "<td align=\"center\"><a href=\"#\" class=\"edit\" idpotongan=\"$row->id\" namapotongan=\"$row->namapotongan\" nominal=\"$row->nominal\">Edit</a>";
//            echo "   |   <a class=\"delbuttonevent\" id=\"$row->codeivent\" href=\"#\" >Delete</a></td>";
            echo "</td></tr>";
        }
        ?>
           
            </tbody> 
        </table>

    </div>
    
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
   