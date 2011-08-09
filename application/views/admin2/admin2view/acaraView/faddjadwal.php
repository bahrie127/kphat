<div class="toggle_container">
    <div class="block">
<!--        <form id="name" action="<?php echo base_url(); ?>index.php/admin2/tempat/add" method="post">-->
        <label>Kode Jadwal</label> 
        <input id="codejadwal" name="code" title="Berisi kode jadwal" type="text" class="medium required" autofocus> 

        <label>Nama Event</label> 
        <div class="input_group">
            <select name="event" id="codeevent"> <?php foreach ($event as $row) : ?>
                <option value="<?php echo $row->codeivent; ?>">
                        <?php echo $row->namaevent; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <label>Nama Pemateri</label> 
        <div class="input_group">

            <select name="pemateri" id="codepemateri"> <?php foreach ($pemateri as $row) : ?>
                    <option value="<?php echo $row->codepemateri; ?>">
                        <?php echo $row->nama; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <label>Tempat</label> 
        <div class="input_group">

            <select name="tempat" id="codetempat"> <?php foreach ($tempat as $row) : ?>
                    <option value="<?php echo $row->codetempat; ?>">
                        <?php echo $row->namatempat; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label>Tanggal</label> 
        <input id="tanggal" name="tanggal" type="text" class="medium datepicker">

        <label>Jam</label> 
        <input id="waktu" name="jam" title="Jam mulai acara" type="text" class="medium">
        
        <label>Harga</label> 
        <input id="harga" name="harga" title="Harga event" type="text" class="medium">

        <button class="button_colour round_all" id="kirim"><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>
        </form>
    </div>
</div>
<script type="text/javascript">
    $('#kirim').click(function(){
        //alert('jalan');
        var form_data={
            codejadwal: $('#codejadwal').val(),
            codeevent: $('#codeevent').val(),
            codetempat: $('#codetempat').val(),
            codepemateri: $('#codepemateri').val(),
            waktu: $('#waktu').val(),
            tanggal: $('#tanggal').val(),
            harga: $('#harga').val(),
            ajax:1
        };
        $.ajax({
            url : "<?php echo site_url('admin2/jadwal/add') ?>",
            type : 'POST',
            data : form_data,
            success: function(msg){
            
                $('#codejawal').val(''),
                $('#codeevent').val(''),
                $('#codetempat').val(''),
                $('#codepemateri').val(''),
                $('#waktu').val(''),
                $('#tanggal').val(''),
                $('#harga').val('')
                // alert('data telah tersimpan');
                window.location='';
            }
        });
        return false;
    });
</script>