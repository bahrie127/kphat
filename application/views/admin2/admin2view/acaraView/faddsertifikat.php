<div class="toggle_container">
    <div class="block">
        <form>
        <label>No. Serifikat</label> 
        <input id="nosertifikat" name="nosertifikat" title="Berisi NO. sertifikat" type="text" class="medium required LV_valid_field" autofocus> 

       
        
        <label>Nama Pemegang</label> 
        <div class="input_group">
            <select name="nama" id="nama"> 
                <option value="">Fendithuk
                        </option>
                
            </select>
        </div>

        <label>Event yang di ikuti</label> 
        <div class="input_group">

            <select name="pemateri" id="codepemateri"> 
                    <option value="">
                        Pra Web Hacking
                    </option>
            </select>
        </div>

        
        <button class="button_colour round_all" id="kirim"><img height="24" width="24" alt="Bended Arrow Right" src="<?php echo base_url(); ?>imgadmin2/icons/small/white/Bended%20Arrow%20Right.png"><span>Submit</span></button>
        </form>
    </div>
</div>

<script type="text/javascript"> 
    var co = new LiveValidation('nosertifikat');
    co.add( Validate.Presence );
      
    
   
</script>
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