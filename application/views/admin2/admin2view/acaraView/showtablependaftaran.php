<table class="display datatabl" > 
    <thead> 
        <tr> 
            <th>No</th> 
            <th>Code</th> 
            <th>Tanggal Daftar</th> 
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Event</th>
            <th>Status</th>



        </tr> 
    </thead> 
    <tbody> 
        <?php $i = 0;
        foreach ($data as $row): $i++; ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row->jadwalevent_codejadwalevent; ?></td>
                <td>-</td>
                <td><?php echo $row->user_nama; ?></td>
                <td><?php echo $row->user_alamat; ?></td>
                <td><?php echo $row->user_email; ?></td>
                <td><?php echo $row->user_telepon; ?></td>
                <td>-</td>
                <td>-</td>
            </tr>
        <?php endforeach; ?>
    </tbody> 
</table>

<div class="block">
    <table class="tt">
        <tr>
            <td><label>Berdasarkan code Event </label>
            <input type="text" name="kategori" id="kategori"/></td>
        <td><br/><input class="btnsub"type="submit" id="cari"></td>
        </tr>
    </table>
</div>

<div id="tabelfilter">
    <?php $this->load->view('admin2/admin2view/acaraView/showtablefilterpeserta'); ?>
</div>
<script text="javascript">
    $(document).ready(function() {
        // DataTables Config (more info can be found at http://www.datatables.net/)
        var oTable = $('.datatabl').dataTable( {
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
<script type="text/javascript">
    $('#cari').click(function(){
       
        var form_data={
            kategori: $('#kategori').val(),
            ajax:1
        };
        $.ajax({
            url : "<?php echo site_url('admin2/pendaftaran/get_by_event') ?>",
            type : 'POST',
            data : form_data,
            success: function(msg){ 
                $('#tabelfilter').html(msg)
            }
        });
        return false;
    });
</script>