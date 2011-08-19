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