<div class="block">
    <table class="tt">
        <tr>

            <td><label>Pencarian Peserta Berdasarkan Code Acara </label>
                <input type="text" name="kategori" id="kategori"/></td>
            <td><br/><input class="btnsub"type="submit" id="cari"></td>
        </tr>
    </table>
</div>

<div id="tabelfilter">
    <?php $this->load->view('admin2/admin2view/acaraView/showtablefilterpeserta'); ?>
</div>

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